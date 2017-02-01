<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TypeDateManager;
use \Manager\BorneManager;
use \Manager\DonneurManager;
use \Manager\DonManager;
use \Manager\BeneficiaireManager;
use \Manager\DetailTitreManager;
use \Manager\PhotoManager;
use \GUMP;

class ProfilController extends Controller
{

  public function profil()
  {
    $data_beneficiaires = new BeneficiaireManager();
    $wuser = $data_beneficiaires->findDonneesBeneficiaire($_SESSION['user']['id']);

    $data_dons = new DonManager();
    $dons = $data_dons->findDonsByBeneficiaireId($_SESSION['user']['id']);

    $don_donneur = $data_dons->findDonsByDonneurId($_SESSION['user']['id']);
    

    $this->show('page/profil', ['wuser' => $wuser, 'dons' => $dons, 'don_donneur' => $don_donneur]);
  }

  public function edition_p()
  {
    $this->show('page/edition_p');
  }


}
