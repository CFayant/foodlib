<?php

namespace Controller;

use \W\Controller\Controller;

class ConnexionController extends Controller
{

	/* Page d'accueil par défaut */
	public function home()
	{
		$this->show('page/home');
	}

	public function cgu()
	{
	$this->show('page/cgu');
	}

}