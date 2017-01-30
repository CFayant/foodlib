<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TypeDateManager;
use \Manager\BorneManager;
use \Manager\DonneurManager;
use \Manager\DonManager;
use \W\Manager\UserManager;
// use \Manager\PhotoManager;
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
    $data_dons = new DonManager();
    $dons = $data_dons->findDonsDisponibles();

    $this->show('page/listeOffres', ['dons' => $dons]);
  }


  public function detailOffre()
  {
    $data_dons = new DonManager();
    $dons = $data_dons->findDonneesDon();

    // $this->show('page/detail_offre', [$_GET['dons'] => $dons['id']]);
    $this->show('page/detail_offre', ['dons'=> $dons]);
    // if( isset($_POST['creer'] ) ) {
    // poster($_POST['titre'], $_POST['contenu']);

    // return $this->redirectToRoute('detailOffre');
    // redirectToRoute('detailOffre', array $params = array());

    // return $this->redirectToRoute('blog_show', array('slug' => 'my-page'));
  }


}
