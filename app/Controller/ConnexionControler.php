<?php 

namespace Controller;

use \W\Controller\Controller;
use \Manager\UtilisateurManager;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;
use \Manager\EventManager;

class ConnexionController extends Controller {

	/**
	 * Page de connexion
	 */
	public function login() {

		if ( isset($_POST['connecter']) ) {

			$auth_manager = new AuthentificationManager();
			$util_manager = new UtilisateurManager();

			$erreurs = [];

			// Validation et Filtrage

			if ($auth_manager->isValidLoginInfo($_POST['username'], $_POST['password']) == 0 ) {

				$erreurs[] = "pseudo ou mot de passe erroné";
			} 

			if (empty($_POST['username']) || empty($_POST['password'])) {
				
				$erreurs[] = "Tous les champs sont requis";
			}

			$this->redirectToRoute('home');
		}

	}

	public function logout() {

		$logout_user = new AuthentificationManager();
		$logout_user->logUserOut();
		$this->redirectToRoute('home');
	}

}