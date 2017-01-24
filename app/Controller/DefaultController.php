<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/*Page d'accueil par défaut */
	public function home()
	{
		$this->show('page/home');
	}

  public function listeOffres()
  {
    $this->show('page/listeOffres');
  }

  public function cgu()
  {
    $this->show('page/cgu');
  }


}
