<?php

namespace Controller;

use \W\Controller\Controller;
use \GUMP;

class DefaultController extends Controller
{

  /* Page d'accueil par défaut */
  public function home()
  {
   $this->show('page/home');
  }

  public function creationDon()
  {
    $erreurs = [];
    $gump = new GUMP();

    if(isset($_POST['donner'])) {

      $_POST = $gump->sanitize($_POST);

      $gump->validation_rules(array(
        'dons'                => 'required|alpha_numeric|max_len,500|min_len,6',
        'acces'               => 'required|alpha_numeric|max_len,500|min_len,6',
        'numero'              => 'required|numeric|exact_len,10',
        'date_consommation'   => 'required|date',

        //'image'   => 'required_file|extension,png;jpg'
        ));

      $gump->filter_rules(array(
        'dons'    => 'trim|sanitize_string',
        'acces'   => 'trim|sanitize_string',
        'numero'  => 'trim|sanitize_numbers'
        ));

      $validated_data = $gump->run($_POST);

      if($validated_data === false)
      {
        $erreurs = $gump->get_errors_array();
      }
      else
      {
        print_r($validated_data); // validation successful
      }

    }

    $this->show('page/creation_don', ['erreurs' => $erreurs]);
  }

  public function detailOffre()
  {
    $this->show('page/detail_offre');
  }

}




