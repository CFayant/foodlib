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

    $liste_borne_manager = new BorneManager();
    $liste_borne_manager->setTable('dons');
    $liste_borne = $liste_borne_manager->findAll();


    $form = [];

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

      $this->show('page/creation_don', ['liste_borne' => $liste_borne]);
    }

  public function listeOffres()
  {

    $dons_manager = new DonManager();
    $dons_manager->setTable('dons');
    $dons = $dons_manager->findAll();

    $this->show('page/listeOffres', ['dons' => $dons]);

  }


  public function detailOffre()
  {
    $dons_manager = new DonManager();
    $dons_manager->setTable('dons');
    $dons = $dons_manager->findAll() ;

    $this->show('page/detail_offre', ['dons' => $dons]);

  }

}
