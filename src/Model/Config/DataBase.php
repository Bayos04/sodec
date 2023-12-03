<?php

namespace App\Model\Config;

use \PDO;

class DataBase
{

    public static function connect() : PDO
	{
        $database = Config::DATABASE;
        return new PDO("mysql:host=localhost;dbname="
            . $database['database'] . ";charset=utf8", $database['user'], $database['password']);
    }
}
