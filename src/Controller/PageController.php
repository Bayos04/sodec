<?php

namespace App\Controller;


use App\Attribute\Route;

class PageController
{
	#[Route("home", guard: "LOGGED")]
	public function homePage(){
		require "src/View/main/home.php";
	}

	#[Route("login")]
	public function loginPage(){
		require "src/View/login.php";
	}

	#[Route("profile",guard: "LOGGED")]
	public function profilePage(){
		require "src/View/main/home.php";
	}

	#[Route("forgot-password")]
	public function forgotPasswordPage(){
		require "src/View/main/home.php";
	}

	#[Route("users", guard: "LOGGED")]
	public function usersPage(){
		require "src/View/main/home.php";
	}

	#[Route("tontines", guard: "LOGGED")]
	public function tontinesPage(){
		require "src/View/main/home.php";
	}

	#[Route("clients", guard: "LOGGED")]
	public function clientsPage(){
		require "src/View/main/home.php";
	}

//	#[Route("users", guard: "LOGGED")]
//	public function singleTontinesPage(){
//		require "src/View/main/home.php";
//	}

	#[Route("collections", guard: "LOGGED")]
	public function collectionsPage(){
		require "src/View/main/home.php";
	}

	#[Route("tours", guard: "LOGGED")]
	public function tourssPage(){
		require "src/View/main/home.php";
	}
}