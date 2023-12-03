<?php

namespace App\Model\Data;

use PDO;
use App\Model\Config\DataBase;
use function extract;
use function password_encrypt;

class UserData implements DataInterface
{
	private static PDO $con;

	public function __construct()
	{
		self::$con = DataBase::connect();
	}

	public function save(array $user)
	{
		extract($user);
		$query = self::$con->prepare("INSERT INTO user(identifier, last_name, first_name, pseudo, phone, email, birth, gender, password, role, status, double_auth) VALUE (?,?,?,?,?,?,?,?,?,?,?,?)");
		return $query->execute(array($identifier, $last_name, $first_name, $pseudo, $phone, $email, $birth, $gender, $password, $role, "CREATED", "NO"));
	}

	public function findAll() : false|array
	{
		$result = self::$con->query("SELECT * FROM user ORDER BY id DESC");
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function findByEmail(string $email)
	{
		$query = self::$con->prepare("SELECT * FROM user WHERE email = ?");
		$query->execute(array($email));
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function findByIdentifier(string $identifier)
	{
		$query = self::$con->prepare("SELECT * FROM user WHERE identifier = ?");
		$query->execute(array($identifier));
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function findByPhone(string $phone)
	{
		$query = self::$con->prepare("SELECT * FROM user WHERE phone = ?");
		$query->execute(array($phone));
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function findByEmailAndPassword(string $email, string $password)
	{
		$query = self::$con->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
		$query->execute(array($email, password_encrypt($password)));
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function updateStatus(string $identifier, string $status) : bool
	{
		$query = self::$con->prepare("UPDATE user SET status = ? WHERE identifier = ?");
		return $query->execute(array($status, $identifier));
	}

	public function findByRole(int $role)
	{
		$query = self::$con->prepare("SELECT * FROM user WHERE role = ?");
		$query->execute(array($role));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function updatePassword(string $identifier,string $password){
		$query = self::$con->prepare("UPDATE user SET password = ? WHERE identifier = ?");
		$query->execute(array($password, $identifier));
	}

	public function findById(int $id)
	{
		// TODO: Implement findById() method.
	}

	public function count()
	{
		// TODO: Implement count() method.
	}

	public function update(array $user)
	{
		extract($user);
		$query = self::$con->prepare("UPDATE user SET last_name = ?, first_name = ?, pseudo = ?, phone = ?, birth = ?, gender = ?, city = ?, neighborhood = ? WHERE identifier = ?");
		return $query->execute(array($last_name, $first_name, $pseudo, $phone, $birth, $city, $neighborhood, $identifier));
	}
}