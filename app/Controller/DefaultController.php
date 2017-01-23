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

		$gump = new GUMP();

		$_POST = $gump->sanitize($_POST);

		$gump->validation_rules(array(
	    'username'    => 'required|alpha_numeric|max_len,100|min_len,6',
	    'first_name'    => 'required|alpha_numeric|max_len,100|min_len,6',
	    'last_name'    => 'required|alpha_numeric|max_len,100|min_len,6',
	    'adress'    => 'required|alpha_numeric|max_len,100|min_len,6',
	    'password'    => 'required|max_len,100|min_len,6',
	    'email'       => 'required|valid_email',
	    'phone'    => 'required|alpha_numeric|max_len,10|min_len,10',
	    'password2'    => 'required|max_len,100|min_len,6',
	    'passwordConfirm'    => 'required|max_len,100|min_len,6'
	    
		));

		$gump->filter_rules(array(
	    'username' => 'trim|sanitize_string',
	    'password' => 'trim',
	    'email'    => 'trim|sanitize_email',
	    'gender'   => 'trim',
	    'bio'      => 'noise_words'
		));

		$validated_data = $gump->run($_POST);

		if($validated_data === false) {
		    echo $gump->get_readable_errors(true);
		} else {
		    print_r($validated_data); // validation successful
		}

		$this->show('page/inscription');
	}

	

}