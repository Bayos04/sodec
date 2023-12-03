<?php


namespace App\Model\Config;


class Message
{
    const INVALID_USER_DATA = "Données de l'utilisateur incorrectes";
    const INVALID_USER_INFO = "Identifiants de connexion incorrects";
    const ACCOUNT_MESS = "Une erreur est survenu, votre compte est inaccessible veuillez contacter les administrateurs";
    const ACCOUNT_CREATION_ERR = "Une erreur est survenu lors de la création de votre compte, veuillez réessayer";
    const ACCOUNT_SUSPENDED = "Votre compte a été suspendu, contactez les admistrateur pour en savoir plus";
    const INTERNAL_ERROR = "Une erreur interne est survenu, veuillez réessayer";
    const UNKNOWN_USER = "Utilisateur séléctionné inconnu";
    const PRODUCT_CREATION_ERR = "Une erreur est survenue lors de la création de votre article";
	const INVALID_DATA = "Données saisies incorrectes";
	const DELETED_ACCOUNT = "Le compte recherhé a été supprimé";
	const SOMETHING_WRONG = "L'execution de votre requête à mené à une erreur. Veuillez réessayer";

	const ERR_LOGIN = "Email ou mot de passe incorrect";
}
