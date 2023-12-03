<?php

namespace App\Model\Service;

use App\Model\Data\TontineData;
use App\Model\Interfaces\TontineInterface;

class TontineService implements TontineInterface
{
	private static TontineData $tontineData;

	public function __construct()
	{
		self::$tontineData = new TontineData();
	}
}