<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TypeDateManager;
use \Manager\BorneManager;
use \Manager\DonManager;
use \GUMP;

class DefaultController extends Controller
{



	/* Page d'accueil par défaut */
	public function home()
	{
		$this->show('page/home');
	}

	public function inscription()
	{
		$this->show('page/inscription');

	}

	public function inscription_b()
	{
		$erreurs = [];
		$gump = new GUMP();

		if(isset($_POST['inscrire_b'])){
			$_POST = $gump->sanitize($_POST);
			$gump->validation_rules(array(
				'username'    => 'required|alpha_numeric|max_len,100|min_len,6',
				'password'    => 'required|max_len,100|min_len,6',
				'passwordConfirm'    => 'required|max_len,100|min_len,6'

				));


			$gump->filter_rules(array(
				'username' => 'trim|sanitize_string',
				'password' => 'trim',
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

$this->show('page/inscription_b', ['erreurs' => $erreurs]);

}

public function creationDon()
{
	$erreurs = [];
	$gump = new GUMP();

	$type_date_manager = new TypeDateManager();
	$type_date_manager->setTable('type_date');
	$liste_type_date = $type_date_manager->findAll();

	$bornes_manager = new BorneManager();
	$bornes = $bornes_manager->findAll();

	$dons_manager = new DonManager();

	if(isset($_POST['donner'])) {
		$uploads_dir = '/var/www/public/assets/uploads';
		foreach ($_FILES['myform']["error"] as $key => $error) {
		    if ($error == UPLOAD_ERR_OK) {
		        $tmp_name = $_FILES["myform"]["tmp_name"][$key];
		        $name = $_FILES["myform"]["name"][$key];
		        move_uploaded_file($tmp_name, "$uploads_dir/$name");
		    }
		}
		$data = array_merge($_POST['myform'], ['donneur_id' => 1, 'image' => $name]); // TODO : $_SESSION['user']['id']
		// print_r($data);
		// die();

		// $_POST = $gump->sanitize($_POST);

		// $gump->validation_rules(array(
		// 	'dons'                => 'required|alpha_numeric|max_len,500|min_len,6',
		// 	'acces'               => 'required|alpha_numeric|max_len,500|min_len,6',
		// 	'numero'              => 'required|numeric|exact_len,10',
		// 	'date_consommation'   => 'required|date'

  //       //'image'   => 'required_file|extension,png;jpg'
		// 	));

		// $gump->filter_rules(array(
		// 	'dons'    => 'trim|sanitize_string',
		// 	'acces'   => 'trim|sanitize_string',
		// 	'numero'  => 'trim|sanitize_numbers'
		// 	));

		// $validated_data = $gump->run($_POST);

		// if($validated_data === false)

		// {
		// 	$erreurs = $gump->get_errors_array();
		// }
		// else
		// {
  //       print_r($validated_data); // validation successful
  //   	}


		$dons_manager->insert($data);

		// $this->redirectToRoute('profil_d');

	}

	$this->show('page/creation_don', ['erreurs' => $erreurs, 'liste_type_date' => $liste_type_date, 'bornes' => $bornes]);

}

public function listeOffres()
{
$this->show('page/listeOffres');
}

public function cgu()
{
$this->show('page/cgu');
}

		public function inscription_d()
		{
			$erreurs = [];
			$gump = new GUMP();

			if(isset($_POST['inscrire_d'])){
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

			$this->show('page/inscription_d', ['erreurs' => $erreurs]);
		}

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

		public function detailOffre()
		{
			$this->show('page/detail_offre');
		}

	}


