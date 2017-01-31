<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;

class ConnexionController extends Controller {

	public function login() {

		if(isset($_POST['connect'])) {

			$auth = new AuthentificationManager();
			$userManager = new UserManager();

			if($auth->isValidLoginInfo($_POST['username'], $_POST['password'])) {
				$userManager->getUserByUsernameOrEmail($_POST['username']);
				$auth->logUserIn($userManager);
				$this->redirectToRoute('home');
			}

		}

	$this->show('page/login');

	}

// 	public function logout() {

// 		$auth = new AuthentificationManager();
// 		$auth->logUserOut();
// 		$this->redirectToRoute('home');
// 	}

}
