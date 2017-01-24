<?php

namespace Controller;

use \W\Controller\Controller;
use \GUMP;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('page/home');
	}

	public function inscription()
	{
		$erreurs = [];
		$gump = new GUMP();

		if(isset($_POST['inscrire'])){

			$_POST = $gump->sanitize($_POST);

			$gump->validation_rules(array(
		    'username'    => 'required|alpha_numeric|max_len,100|min_len,6',
		    'first_name'    => 'required|alpha_numeric|max_len,100|min_len,6',
		    'last_name'    => 'required|alpha_numeric|max_len,100|min_len,6',
		    'adress'    => 'alpha_numeric|max_len,100|min_len,6',
		    'password'    => 'required|max_len,100|min_len,6',
		    'email'       => 'required|valid_email',
	      'phone'    => 'alpha_numeric|exact_len,10',
	      'access'    => 'alpha_numeric|max_len,600|min_len,6',
	      'access_time'    => 'alpha_numeric|max_len,100|min_len,6',
		    'comment'    => 'alpha_numeric|max_len,500|min_len,6',
		    'passwordConfirm'    => 'required|max_len,100|min_len,6'

			));


			$gump->filter_rules(array(
		    'username' => 'trim|sanitize_string',
		    'password' => 'trim',
		    'email'    => 'trim|sanitize_email'
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

		$this->show('page/inscription');
	}



}
