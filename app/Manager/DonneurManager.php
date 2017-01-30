<?php

namespace Manager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class DonneurManager extends \W\Manager\Manager
{

	public function findDons()
	{
		$sql = "SELECT * FROM " . $dons;
		$dons = $this->dbh->prepare($sql);
		$dons->bindValue(":id", $id);
		$dons->execute();

		return $dons->fetch();
	}

	// public function findAll($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	// {

	// 	$datas = parent::findAll();
	// 	$final_datas = [];
	// 	foreach ($datas as $key => $value) {

	// 		$value['wuser'] = $wuser;

	// 		$final_datas[] = $value;

	// 		// var_dump($final_datas); exit;
	
	//     }

	// 	return $final_datas;
 //    }

 //    public function findAll($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	// {

	// 	$datas = parent::findAll();
	// 	$final_datas = [];
	// 	foreach ($datas as $key => $value) {

	// 		$value['wuser'] = $wuser;

	// 		$final_datas[] = $value;

	// 		// var_dump($final_datas); exit;
	
	//     }

	// 	return $final_datas;
 //    }


}