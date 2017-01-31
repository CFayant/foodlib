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

class ProfilController extends Controller
{

  public function profil()
  {
    $this->show('page/profil');
  }

  public function edition_p()
  {
    $this->show('page/edition_p');
  }


}
