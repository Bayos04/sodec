<?php

namespace App\Config;

use Reflection;
use ReflectionClass;
use ReflectionException;
use App\Model\Enum\UserStatus;
use function ucfirst;
use function gettype;
use function var_dump;
use function in_array;
use function enum_exists;
use function property_exists;

class ArrayMap
{
	/**
	 * @throws ReflectionException
	 */
	public static function arrayToClass(array $array, string $class){
		$refClass = new ReflectionClass(new $class());
		$attributes = $refClass->getProperties();
		$endClass = new $class();
		//var_dump($attributes);

		//var_dump(UserStatus::CREATED);
		foreach ($array as $key => $value){
			foreach ($attributes as $attribute){
				$name = $attribute->getName();
				if ($name == $key){
					var_dump($name." ".$key." => ".$value);
					$setter = 'set'.ucfirst($name);
					var_dump(enum_exists($attribute->getType()->getName()));
					if (enum_exists($attribute->getType()->getName())){
						$enum = Mapper::stringToEnum($value,UserStatus::class);
					}
					//var_dump(gettype($attribute->getType()->getName()) /*->getName()*/);
//					enum_exists();
					$endClass->$setter($value);
				}else{
					continue;
				}
			}
			/*if (property_exists(new $class(), $key) && in_array()){
				var_dump();
			}*/
		}
		return $endClass;
	}

	public static function classToArray(){}
}