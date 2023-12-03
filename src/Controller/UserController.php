<?php

namespace App\Controller;

use App\Model\Interfaces\UserInterface;
use App\Attribute\Route;
use App\Model\Service\UserService;
use Exception;
use Slim\Psr7\Request;
use function password_encrypt;

#[Route("/user")]
class UserController implements UserInterface
{
	private static UserService $userService;

	public function __construct()
	{
		self::$userService = new UserService();
	}

    #[Route("/retrieve-all", "GET")]
    public function retrieveAll() : bool|string
	{
        return writeBody(self::$userService->retrieveAll());
    }

	/**
	 * @param array $user
	 * @throws Exception
	 */
	#[Route("/create", "POST")]
    public function create(array $user = null)
    {
        return writeBody(self::$userService->create(getBody()));
    }

	/**
	 * @param string $ident
	 * @param string $password
	 * @throws Exception
	 */
	#[Route(path: "/login", method: "POST")]
    public function login(string $ident, string $password) : false|string
	{
        return writeBody(self::$userService->login(getTextInput($ident), getTextInput($password)));
    }

    #[Route("/activate/{email}", "PUT")]
    public function activate(string $email)
    {
		return writeBody(self::$userService->activate($email));
    }

    #[Route("/update", "PATCH")]
    public function update(array $user = null)
    {
		return writeBody(self::$userService->update(getBody()));
    }

    #[Route("/delete/{identifier}", "PUT")]
    public function delete(string $identifier)
    {
		return writeBody(self::$userService->activate($identifier));
    }

	/**
	 * @throws Exception
	 */
	#[Route("/retrieve/{name}", "GET")]
    public function retrieveSingle(string $name) : false|string
	{
		return writeBody(self::$userService->retrieveSingle($name));
    }

    #[Route("/role/{role}", "GET")]
    public function retrieveByRole(int $role)
    {
    }

    #[Route("/lock/{userName}", "PUT")]
    public function lock(string $name)
    {
    }

    #[Route("/unlock/{userName}", "PUT")]
    public function unlock(string $name)
    {
    }

    #[Route("/edit", "PATCH")]
    public function editProfile(array $file)
    {
    }

    #[Route("/edit-password", "PUT")]
    public function editPassword(string $password, string $newPassword)
    {
    }

    #[Route("/preferences", "PATCH")]
    public function setPreferences()
    {
    }

	#[Route("/edit-email", "PUT")]
	public function editEmail(string $email, string $password, string $newEmail)
	{
		// TODO: Implement editEmail() method.
	}

	#[Route("/enable-twa", "PUT")]
	public function enableTFA(string $email, string $password)
	{
		// TODO: Implement enableTFA() method.
	}

	#[Route("/disable-twa", "PUT")]
	public function disableTFA(string $email, string $password)
	{
		// TODO: Implement disableTFA() method.
	}
}
