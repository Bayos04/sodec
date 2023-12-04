<?php

use \Slim\App;
use Ramsey\Uuid\Uuid;
use App\Attribute\Route;
use App\Controller\PageController;
use \Slim\Psr7\{
	Request,
	Response
};

function getBody()
{
    $json = json_encode(file_get_contents("php://input"));
    $array = json_decode($json);
    return (array)json_decode($array);
}

function throwError(int $code,$title, $message = "", array $option = [])
{
	header("HTTP/1.1 $code $title : $message");
	//http_response_code($code);
	$result = ["code" => $code, "message" => $title,"debug"=>$option != [] ? $message . $option[0] : $message];
    //echo writeBody(null,$code,$title,$option != [] ? $message . $option[0] : $message);
	echo json_encode($result, JSON_UNESCAPED_UNICODE);
}

function errorPage(){
	if (isset($_SESSION["id"])) :
		require "src/View/404.php";
	else :
		header("location:login");
	endif;
}

function writeBody($data, int $code = 200, string $message = "", string $debug="") : false|string
{
    switch ($code)
    {
        case 200:
            $message = "SUCCESS";
            break;
        case 500:
            $message = "Internal Error";
            break;
        case 403:
            $message = "Access denied";
            break;
    }

    $result = ["data" => $data, "status" => ["code" => $code, "message" => $message,"debug"=>$debug]];
    return json_encode($result, JSON_UNESCAPED_UNICODE);
}

function getURL()
{
    return explode("v1/", $_SERVER['REDIRECT_URL'])[1];
}

function generateUniqueIdentifier($length = 10) : string
{
	$uuid = Uuid::uuid4()->toString();
	return substr(str_replace('-', '', $uuid), 0, $length);
}


/**
 * @throws ReflectionException
 */
function registerController(App $app, string $controller) : void
{
	$class = new ReflectionClass($controller);

	$attributes = $class->getAttributes(Route::class);
	$prefix = "/api/";
	if ($controller == PageController::class) $prefix = "";
	if (!empty($attributes)) {
		$prefix = $prefix . $attributes[0]->newInstance()->getPath();
	}

	foreach ($class->getMethods() as $method) {
		$routesAttribute = $method->getAttributes(Route::class);
		if (empty($routesAttribute)) {
			continue;
		}

		foreach ($routesAttribute as $route)
		{
			/** @var Route $r */
			$r = $route->newInstance();
			$httpMethod = $r->getMethod();
			if ($_SERVER["REQUEST_URI"] == $r->getPath()){
				if ($r->getGuard() == "LOGGED" && !isset($_SESSION["id"])) header("location:login");
				if ($r->getGuard() == "NONE" && isset($_SESSION["id"])) header("location:home");
			}

			$app->$httpMethod($prefix . $r->getPath(), function (Request $request, Response $response, array $args) use ($method, $controller) {
				$body = (array) json_decode($request->getBody()->getContents());
				$params = [];
				foreach ($method->getParameters() as $param) {
					$params[] = match ($param->getName()) {
						"request" => $request,
						"response" => $response,
						default => $body[$param->getName()] ?? $args[$param->getName()] ?? null,
					};
				}

				$responseController = call_user_func_array([new $controller(), $method->getName()], $params);
				if (is_string($responseController)) {
					$response->getBody()->write($responseController);
					//return $response;
				}
				//$response->getBody()->write(writeBody(null));
				return $response;
			});
		}
	}
}