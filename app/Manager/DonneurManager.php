<?php

namespace Manager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class DonneurManager extends \W\Manager\Manager
{

	public function findDonneurByUserId($id)
	{
		$sql = "SELECT * FROM donneurs WHERE wuser_id = :id";

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue('id', $id);
		$sth->execute();
		return $sth->fetch();
	}

	// public function findDataDonneur($id)
	// {
	// 	$sql = "SELECT donneurs.id, dons.date_consommation, dons.libelle_date, wusers.username FROM donneurs, dons, wusers WHERE donneurs.wuser_id = :id AND donneurs.id = dons.donneur_id ";

	// 	$sth = $this->dbh->prepare($sql);
	// 	$sth->bindValue('id', $id);
	// 	$sth->execute();
	// 	return $sth->fetchAll();
	// }
		
}
