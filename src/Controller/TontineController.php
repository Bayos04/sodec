<?php

namespace App\Controller;

use App\Attribute\Route;
use App\Model\Service\TontineService;
use App\Model\Interfaces\TontineInterface;

#[Route("/tontine")]
class TontineController implements TontineInterface
{
	private static TontineService $tontineService;

	public function __construct()
	{
		self::$tontineService = new TontineService();
	}
}