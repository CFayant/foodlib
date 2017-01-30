<?php

namespace Manager;

use Manager\TypeDateManager;
use Manager\DonneurManager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class DonManager extends \W\Manager\Manager
{

	public function findAll($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	{

		$datas = parent::findAll();
		$final_datas = [];
		foreach ($datas as $key => $value) {

			// Récupération de la donnée "type de date"
			// provenant de la table type_date
			$type_date_manager = new TypeDateManager();
	    	$type_date_manager->setTable('type_date');

			$type = $type_date_manager->find($value['type_id']);
			$value['type'] = $type;


			// Récupération de la donnée "borne"
			// provenant de la table bornes
			$borne_manager = new BorneManager();
	    	$borne_manager->setTable('bornes');

			$borne = $borne_manager->find($value['borne_id']);
			$value['borne'] = $borne;


			// Récupération des données provenant de la table donneurs
			$donneur_manager = new DonneurManager();
	    	$donneur_manager->setTable('donneurs');

			$donneur = $donneur_manager->find($value['donneur_id']);
			$value['donneur'] = $donneur;


			$final_datas[] = $value;

	  }
		return $final_datas;
	}

}
