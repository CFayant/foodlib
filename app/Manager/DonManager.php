<?php

namespace Manager;

use Manager\TypeDateManager;
use \W\Manager\Manager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class DonManager extends \W\Manager\Manager
{

	public function findDonsDisponibles()
	{
		$sql = "SELECT dons.id, titre, image, date_consommation, libelle_date, cp_donneur FROM dons
						INNER JOIN typeDates ON dons.type_id = typeDates.id
						INNER JOIN donneurs ON dons.donneur_id = donneurs.id
						WHERE dons.disponible = 1
						ORDER BY dons.date_consommation ASC";

		$dons = $this->dbh->prepare($sql);
		$dons->execute();

		return $dons->fetchAll();
	}


	public function testLieuRetrait($id)
	{
		$sql = "SELECT dons.id, dons.adresse_retrait FROM dons
			WHERE dons.disponible = 1 and dons.id = :id";
		$retrait = $this->dbh->prepare($sql);
		$retrait->bindValue('id', $id);
		$retrait->execute();

		return $retrait->fetch();
	}


	public function findDonneesDon($id)
	{
		$test = new DonManager();
    $t = $test->testLieuRetrait($id);

		// testLieuRetrait
		if ($t['adresse_retrait'] == 1) {
			$sql = "SELECT DISTINCT dons.id, dons.titre, dons.image, dons.date_consommation, dons.adresse_retrait, typeDates.libelle_date, wusers.username, bornes.adresse_borne, bornes.cp_borne FROM dons, typeDates, donneurs, wusers, bornes
		WHERE dons.type_id = typeDates.id AND dons.donneur_id = donneurs.id AND donneurs.wuser_id = wusers.id AND dons.borne_id = bornes.id AND dons.disponible = 1 and dons.id = :id";
		} else {
			$sql = "SELECT DISTINCT dons.id, dons.titre, dons.image, dons.date_consommation, dons.adresse_retrait, typeDates.libelle_date, donneurs.denomination_sociale, donneurs.adresse_donneur, donneurs.cp_donneur,
		donneurs.acces, donneurs.horaires, donneurs.telephone, wusers.username FROM dons, typeDates, donneurs, wusers
		WHERE dons.type_id = typeDates.id AND dons.donneur_id = donneurs.id AND donneurs.wuser_id = wusers.id AND dons.disponible = 1 and dons.id = :id";
		};


		$dons = $this->dbh->prepare($sql);
		$dons->bindValue('id', $id);
		$dons->execute();

		return $dons->fetch();
	}


	public function findDonsByBeneficiaireId($id)
	{
		$sql = "SELECT DISTINCT * FROM dons WHERE dons.beneficiaire_id = :id";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue('id', $id);
		$sth->execute();

		return $sth->fetchAll();
	}


	public function findDonsByDonneurId($id)
	{
		$sql = "SELECT DISTINCT * FROM dons WHERE dons.donneur_id = :id";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue('id', $id);
		$sth->execute();

		return $sth->fetchAll();
	}



}
