<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('page/home');
	}

	public function inscription()
	{
		$this->show('page/inscription');
	}

	public function profil_b()
	{
		$this->show('page/profil_b');
	}

}