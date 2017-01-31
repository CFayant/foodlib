<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;

class ConnexionController extends Controller {

	public function login() {
		$erreurs= [];
		if(isset($_POST['connect'])) {
			$auth = new AuthentificationManager();
			$userManager = new UserManager();

			if($auth->isValidLoginInfo($_POST['username'], $_POST['password'])) {
				$user = $userManager->getUserByUsernameOrEmail($_POST['username']);
				$auth->logUserIn($user);
				$this->redirectToRoute('home');
			}else{
				$erreurs[]= 'Veuillez entrer les bonnes informations';
			}

		}

		$this->show('page/login', ['erreurs' => $erreurs]);

	}

	public function logout() {

		$auth = new AuthentificationManager();
		$auth->logUserOut();
		$this->redirectToRoute('home');
	}

}
