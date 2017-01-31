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

}
