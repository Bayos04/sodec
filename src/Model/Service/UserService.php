<?php

namespace App\Model\Service;

use Exception;
use App\Config\ArrayMap;
use Sljpro\Config\Messages;
use App\Model\Data\UserData;
use App\Model\Config\Message;
use App\Model\Interfaces\UserInterface;
use App\Model\Config\DataBase;
use \PDO;
use function extract;
use function var_dump;
use function throwError;
use function password_encrypt;
use function generateUniqueIdentifier;

class UserService implements UserInterface
{
	private static UserData $userData;

    public function __construct()
    {
		self::$userData = new UserData();
    }

	/**
	 * @throws Exception
	 */
	public function create(array $user = [])
    {
		if (!empty(self::$userData->findByEmail($user["email"])))
			throw new Exception("Adrese déjà utilisée");

		if (self::$userData->findByPhone($user['phone']))
			throw new Exception("Numéro de téléphone déjà utilisée");

		$user['user_name'] = generateUniqueIdentifier();
		$user['password'] = password_encrypt($user['password']);
        return self::$userData->save($user);
    }


	/**
	 * @throws Exception
	 */
	public function activate(string $email) : ?bool
	{
		$user = self::$userData->findByEmail($email);
		if (!$user)
			throw new Exception(Message::INVALID_DATA);

		if ($user['status'] == "DELETED")
			throw new Exception(Message::DELETED_ACCOUNT);

		$ok = self::$userData->updateStatus($user["identifier"], "ACTIVE");
		if (!$ok)
			throw new Exception(Message::SOMETHING_WRONG);
    }

	/**
	 * @throws Exception
	 */
	public function login(string $ident, string $password)
    {
		$user = self::$userData->findByEmailAndPassword($ident, $password);
		if (!$user)
			throw new Exception(Message::ERR_LOGIN);

		if ($user["status"] == "DELETED")
			throw new Exception(Message::DELETED_ACCOUNT);

		if ($user["status"] == "LOCKED")
			throw new Exception(Message::ACCOUNT_SUSPENDED);

		return $user;
    }

	/**
	 * @throws Exception
	 */
	public function update(array $user)
    {
        $user = self::$userData->findByIdentifier($user["identifier"]);
		if (!$user)
			throw new Exception(Message::INVALID_USER_DATA);

		self::$userData->update($user);
    }

	/**
	 * @throws Exception
	 */
	public function delete(string $identifier)
    {
		$user = self::$userData->findByIdentifier($identifier);
		if (!$user)
			throw new Exception(Message::INVALID_USER_DATA);

		self::$userData->updateStatus($identifier,$user["status"]);
    }

    public function retrieveAll() : bool|array
	{
        return self::$userData->findAll();
    }

	/**
	 * @throws Exception
	 */
	public function retrieveSingle(string $identifier) : mixed
	{
		$this->userExist($identifier);
		$con = DataBase::connect();
		$query = $con->prepare("SELECT * FROM user WHERE identifier = ? AND status != 'DELETED'");
		$ok = $query->execute(array($identifier));
		return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function retrieveByRole(int $role)
    {
        $con = DataBase::connect();
        // TODO: Implement retrieveByRole() method.
    }

    public function lock(string $identifier)
    {
        $con = DataBase::connect();
        $req = $con->prepare("UPDATE user SET status = 'LOCKED' WHERE identifier = ?");
        $req->execute(array($identifier));
        if ($req == true) {
            return true;
        } else {
            return ['error' => false, 'message' => Message::INTERNAL_ERROR];
        }
    }

    public function unlock(string $identifier)
    {
        $con = DataBase::connect();
        $req = $con->prepare("UPDATE user SET status = 'ACTIVE' WHERE identifier = ?");
        return $req->execute(array($identifier));
    }

    public function editProfile(array $file)
    {
        $con = DataBase::connect();
        // TODO: Implement editProfile() method.
    }

    public function editPassword(string $password, string $newPassword)
    {
        $con = DataBase::connect();
        // TODO: Implement editPassword() method.
    }

    public function setPreferences() : void
	{
        $con = DataBase::connect();
        // TODO: Implement setPreferences() method.
    }

	/**
	 * @throws Exception
	 */
	public function userExist(string $identifier): bool
    {
        $con = DataBase::connect();
        $req = $con->prepare("SELECT * FROM user WHERE identifier = ? AND status != 'DELETED'");
        $ok = $req->execute(array($identifier));
		if ($req->rowCount() == 1){
			return true;
		}elseif ($req->rowCount() > 1){
			throw new Exception(Message::ACCOUNT_MESS);
		}
		else{
			throw new Exception(Message::INVALID_USER_INFO);
		}
    }

	public function editEmail(string $email, string $password, string $newEmail)
	{
		// TODO: Implement editEmail() method.
	}

	public function enableTFA(string $email, string $password)
	{
		// TODO: Implement enableTFA() method.
	}

	public function disableTFA(string $email, string $password)
	{
		// TODO: Implement disableTFA() method.
	}
}
