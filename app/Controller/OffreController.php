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

class OffreController extends Controller
{

  private $data;

  public function creationDon()
  {

    $this->data = new BorneManager();

    $form = [];

    // $this->data_2 = new TypeDateManager();
    // $type_date_manager->setTable('type_date');
    // $liste_type_date = $type_date_manager->findAll();

    // $bornes_manager = new BorneManager();
    // $bornes = $bornes_manager->findAll();

    if(isset($_POST['donner'])) {

      $gump = new GUMP();

      $_POST['myform'] = $gump->sanitize($_POST['myform']); // You don't have to sanitize, but it's safest to do so.

      $gump->validation_rules(array(
          'titre'               => 'required|alpha_numeric|max_len,500|min_len,6',
          'borne_id'            => 'required',
          'date_consommation'   => 'required|date',
          'type_id'             => 'required'
      ));

      $gump->filter_rules(array(
        'titre'    => 'trim|sanitize_string'
      ));

      $validated_data = $gump->run( array_merge( $_POST['myform'], ['donneur_id' => 1] ) ); // TODO : $_SESSION['user']['id']

      if($validated_data === false) {

        $erreurs = $gump->get_errors_array();
        $form = $_POST['myform'];
      }

        $dons_manager = new DonManager();
        $dons_manager->insert(array_merge($_POST['myform']));
    }

    $this->show('page/creation_don');

  }

  public function listeOffres()
  {
    $donneurs_manager = new DonneurManager();
    $donneurs_manager->setTable('donneurs');
    $donneurs = $donneurs_manager->findAll();

    $dons_manager = new DonManager();
    $dons_manager->setTable('dons');
    $dons = $dons_manager->findAll();

    $type_date_manager = new TypeDateManager();
    $type_date_manager->setTable('type_date');
    $type_dates = $type_date_manager->findAll();

    $photos_manager = new PhotoManager();
    $photos_manager->setTable('photos');
    $photos = $photos_manager->findAll();



    $this->show('page/listeOffres', ['donneurs' => $donneurs, 'dons' => $dons, 'type_dates' => $type_dates, 'photos' => $photos]);
  }


  public function detailOffre()
  {
    $don_manager = new DonManager();
    $don = $don_manager->findAll();


    $this->show('page/detail_offre', ['don' => $don]);
  }


}
