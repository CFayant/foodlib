<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;

class ConnexionController extends Controller {

	// public function displayLogin() {

		
	// }

	public function login() {




		// if(isset($_POST['connexion'])) {

		// 	$auth = new AuthentificationManager();
		// 	$userManager = new UserManager();

		// 	if($auth->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])) {

		// 		$user = $userManager->getUserByUsernameOrEmail($_POST['myform']['username']);
		// 		$auth->logUserIn($user);

		// 		$this->redirectToRoute('home');
		// 	}


		// }
	$this->show('page/login');
	}

	public function logout() {

		$auth = new AuthentificationManager();
		$auth->logUserOut();
		$this->redirectToRoute('home');
	}

}