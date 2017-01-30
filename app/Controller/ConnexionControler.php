<?php 

namespace Controller;

use \W\Controller\Controller;
use \Manager\UtilisateurManager;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;
use \Manager\EventManager;

class UserController extends Controller {

	/**
	 * Page de connexion
	 */
	public function login() {

		if ( isset($_POST['login']) ) {
			$auth_manager = new AuthentificationManager();
			$util_manager = new UtilisateurManager();

			$erreurs = [];

			// Validation et Filtrage

			if ( $auth_manager->isValidLoginInfo($_POST['form_login']['email'], $_POST['form_login']['password']) == 0 ) {

				$erreurs[] = "Mauvais email ou mot de passe.";
			} 

			if (empty($_POST['form_login']['email']) ||
				empty($_POST['form_login']['password'])) {
				
				$erreurs[] = "Tous les champs sont requis";
			}
		}

	}

}