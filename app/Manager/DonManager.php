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

	public function findDonneesDon()
	{
		$sql = "SELECT DISTINCT dons.id, dons.titre, dons.image, dons.date_consommation, typeDates.libelle_date, donneurs.denomination_sociale, donneurs.adresse_donneur, donneurs.cp_donneur,
			donneurs.acces, donneurs.horaires, donneurs.telephone, wusers.username, bornes.adresse_borne, bornes.cp_borne FROM dons, typeDates, donneurs, wusers, bornes
			WHERE dons.type_id = typeDates.id AND dons.donneur_id = donneurs.id AND donneurs.wuser_id = wusers.id AND dons.borne_id = bornes.id dons.disponible = 1";

		$dons = $this->dbh->prepare($sql);
		$dons->execute();

		return $dons->fetchAll();
	}

}
