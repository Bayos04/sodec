<?php

namespace App\Controller;


use App\Attribute\Route;

class PageController
{

	#[Route("/login")]
	public function loginPage(){
		require "src/View/login.php";
	}

	#[Route("/forgot-password")]
	public function forgotPasswordPage(){
		require "src/View/forgot-password.php";
	}

	#[Route("/home", guard: "LOGGED")]
	public function homePage(){
		require "src/View/main/home.php";
	}

	#[Route("/profile",guard: "LOGGED")]
	public function profilePage(){
		require "src/View/main/home.php";
	}

	#[Route("/agents", guard: "LOGGED")]
	public function usersPage(){
		require "src/View/main/users.php";
	}

	#[Route("/tontines", guard: "LOGGED")]
	public function tontinesPage(){
		require "src/View/main/tontines.php";
	}

	#[Route("/clients", guard: "LOGGED")]
	public function clientsPage(){
		require "src/View/main/clients.php";
	}

	#[Route("/collections", guard: "LOGGED")]
	public function collectionsPage(){
		require "src/View/main/collections.php";
	}

	#[Route("/areas", guard: "LOGGED")]
	public function areasPage(){
		require "src/View/main/areas.php";
	}

	#[Route("/history", guard: "LOGGED")]
	public function historyPage(){
		require "src/View/main/areas.php";
	}
}