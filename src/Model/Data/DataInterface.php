<?php

namespace App\Model\Data;

interface DataInterface
{
	public function save(array $object);

	public function findAll();

	public function findById(int $id);

	public function count();

	public function update(array $object);
}