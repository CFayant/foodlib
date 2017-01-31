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

	public function findDonneesDon($id)
	{
	$sql = "SELECT DISTINCT dons.id, dons.titre, dons.image, dons.date_consommation, typeDates.libelle_date, donneurs.denomination_sociale, donneurs.adresse_donneur, donneurs.cp_donneur,
	donneurs.acces, donneurs.horaires, donneurs.telephone, wusers.username, bornes.adresse_borne, bornes.cp_borne FROM dons, typeDates, donneurs, wusers, bornes
	WHERE dons.type_id = typeDates.id AND dons.donneur_id = donneurs.id AND donneurs.wuser_id = wusers.id AND dons.borne_id = bornes.id AND dons.disponible = 1 and dons.id = :id";

		$dons = $this->dbh->prepare($sql);
		$dons->bindValue('id', $id);
		$dons->execute();

		return $dons->fetch();
	}
}
