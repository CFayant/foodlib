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


	public function findDataDonneur($id)
	{
		$sql = "SELECT * FROM donneurs, dons, wusers WHERE wusers.id = :id";

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue('id', $id);
		$sth->execute();
		return $sth->fetch();
	}


	public function updateByUserId($id)
	{
		$sql = "UPDATE donneurs SET adresse_donneur = :adresse WHERE wusers_id = :id";


		$sth = $this->dbh->prepare($sql);
		$sth->bindValue('adresse', $POST['adresse_donneur']);
		$sth->execute();
		return $this->find($id);

	}
}
