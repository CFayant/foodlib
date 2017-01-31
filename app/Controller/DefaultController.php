<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TypeDateManager;
use \Manager\BorneManager;
use \Manager\DonneurManager;
use \Manager\DonManager;
use \Manager\DetailTitreManager;
use \Manager\PhotoManager;
use \GUMP;

class DefaultController extends Controller {

	/* Page d'accueil par défaut */
	public function home() {

		$this->show('page/home');
	}

	public function cgu() {

	$this->show('page/cgu');
	}

}


