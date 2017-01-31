<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TypeDateManager;
use \Manager\BorneManager;
use \Manager\DonneurManager;
use \Manager\DonManager;
use \W\Manager\UserManager;

class OffreController extends Controller
{

  public function listeOffres()
  {
    $data_dons = new DonManager();
    $dons = $data_dons->findDonsDisponibles();

    $this->show('page/listeOffres', ['dons' => $dons]);
  }


  public function detailOffre()
  {
    $data_dons = new DonManager();
    $dons = $data_dons->findDonneesDon();

    $this->show('page/detail_offre', ['dons'=> $dons]);
  }


}
