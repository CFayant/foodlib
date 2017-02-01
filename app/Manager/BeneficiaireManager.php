<?php

namespace Manager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class BeneficiaireManager extends \W\Manager\Manager
{

	public function findDonneesBeneficiaire($id)
	{
		$sql = "SELECT wusers.username FROM wusers WHERE wusers.id = :id";

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue('id', $_SESSION['user']['id']);
		$sth->execute();
		return $sth->fetch();
	}
		
}
