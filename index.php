<?php
session_start();
require 'vendor/autoload.php';
require_once "src/controller.php";
require_once "src/appController.php";

use App\Controller\UserController;
use App\Controller\PageController;

use Slim\Exception\HttpMethodNotAllowedException;
use Slim\Exception\HttpNotFoundException;
use Slim\Factory\AppFactory;

//header("Access-Control-Allow-Origin: *");
//if (isset($_SERVER['HTTP_ORIGIN']))
//{
//	header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
//	header('Access-Control-Allow-Credentials: true');
//	header('Access-Control-Max-Age: 86400');
//}
//header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, OPTIONS");
//header("Access-Control-Allow-Headers: *");
//header('Content-Type: application/json');
//if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//	exit(0);
//}
//header('Content-Type: multipart/form-data');

$app = AppFactory::create();
//Swagger::generateDocs();

//var_dump(password_encrypt("12345678"));

try
{
    registerController($app, UserController::class);
	registerController($app, PageController::class);
    $app->run();
}
catch (HttpNotFoundException $e){
    //throwError(404,"Not Found", $e->getMessage());
	errorPage();
}
catch (HttpMethodNotAllowedException $e){
    throwError(405,$e->getTitle(), $e->getMessage(), [", Provided " . $e->getRequest()->getMethod() . " method"]);
}
catch (PDOException $e){
    throwError(500,"SQL server error", $e->getMessage());
}
catch (TypeError|Exception $e){
    throwError(406,"Internal Error", $e->getMessage());
}
