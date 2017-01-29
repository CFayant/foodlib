<?php

namespace Manager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class DonneurManager extends \W\Manager\Manager
{

	public function findAll($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	{

		$datas = parent::findAll();
		$final_datas = [];
		foreach ($datas as $key => $value) {

			$wuser_manager = new WUsersManager();
			$wuser_manager->setTable('wusers');
			$wuser = $wuser_manager->find($value['wuser_id']);
			$value['wuser'] = $wuser;

			$final_datas[] = $value;

			// var_dump($final_datas); exit;
	
	    }

		return $final_datas;
    }


}