<?php

namespace App\Config;

class Mapper
{
	/**
	 * @throws \ReflectionException
	 */
	public static function map(object $T, string $D)
	{
		$keys = new \ReflectionClass($T);
		$props = $keys->getProperties();
		$newClass = new $D();
		foreach ($props as $key => $value){
			if (property_exists($newClass, $value->getName())){
				$getter = 'get'.ucfirst($value->getName());
				$setter = 'set'.ucfirst($value->getName());
				$newClass->$setter($T->$getter());
			}
			continue;
		}
		return $newClass;
	}

	/**
	 * @throws \ReflectionException
	 */
	public static function mapAll(array $T, string $D) : array
	{
		$classes = [];
		foreach ($T as $class){
			$class = self::map($class, $D());
			array_unshift($classes,$class);
		}
		return $classes;
	}

	public static function enumToString(string $enumName){
		$enum = new $enumName();
		return $enum->toString();
	}

	public static function stringToEnum(string $string, $enum){
		$enum = new $enum();
		return $enum->fromString($string);
	}
}