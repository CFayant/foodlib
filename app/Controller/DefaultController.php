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

        $gump = new GUMP();

        $_POST = $gump->sanitize($_POST);

        $gump->validation_rules(array(
          'dons'    => 'required|alpha_numeric|max_len,500|min_len,6',
          'acces'   => 'required|alpha_numeric|max_len,500|min_len,6',
          'numero'  => 'required|numeric|max_len,10|min_len,10',
          'image'   => 'required_file|extension,png;jpg'
        ));

        $gump->filter_rules(array(
          'dons'    => 'trim|sanitize_string',
          'acces'   => 'trim|sanitize_string',
          'numero'  => 'trim|sanitize_numbers'
        ));

        $validated_data = $gump->run($_POST);

        if($validated_data === false) {
          // echo $gump->get_readable_errors(true);
        }
        else {
            print_r($validated_data); // validation successful
        }

        $this->show('page/creation_don');
    }

    public function detailOffre()
    {
        $this->show('page/detail_offre');
    }

}
