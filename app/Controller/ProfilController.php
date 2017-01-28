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

  public function profil_b()
  {
    $this->show('page/profil_b');
  }


  public function profil_d()
  {
    $this->show('page/profil_d');
  }


  public function edition_p()
  {
    $this->show('page/edition_p');
  }


}
