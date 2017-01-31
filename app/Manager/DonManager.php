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
WHERE dons.type_id = typeDates.id AND dons.donneur_id = donneurs.id AND donneurs.wuser_id = wusers.id AND dons.borne_id = bornes.id
";

		$dons = $this->dbh->prepare($sql);
		$dons->execute();

		return $dons->fetchAll();

		// var_dump($dons);
	}

	// public function findAll($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	// {
	// 	$datas = parent::findAll();
	// 	$final_datas = [];
	// 	foreach ($datas as $key => $value) {

	// 		// Récupération de la donnée "type de date"
	// 		// provenant de la table type_date
	// 		$type_date_manager = new TypeDateManager();
	//     	$type_date_manager->setTable('type_date');

	// 		$type = $type_date_manager->find($value['type_id']);
	// 		$value['type'] = $type;

	// 		// $final_datas[] = $value;


	// 		// Récupération de la donnée "borne"
	// 		// provenant de la table bornes
	// 		$borne_manager = new BorneManager();
	//     	$borne_manager->setTable('bornes');

	// 		$borne = $borne_manager->find($value['borne_id']);
	// 		$value['borne'] = $borne;


	// 		// Récupération des données provenant de la table donneurs
	// 		$donneur_manager = new DonneurManager();
	//     	$donneur_manager->setTable('donneurs');

	// 		$donneur = $donneur_manager->find($value['donneur_id']);
	// 		$value['donneur'] = $donneur;

	// 		$final_datas[] = $value;

	//     }

	// 	return $final_datas;

		// foreach ($datas as $key => $value) {

	 //    }

		// return $final_datas;

	// }

	// public function getTypeDate(){
	// 	$type_date_manager = new TypeDateManager();
	//     $type_date_manager->setTable('type_date');
	// 	$type_date = $type_date_manager->find($this->id);
	// 	var_dump($type_date);
	// 	exit;
	// }
	// private $id;
	// protected $type_id;

	// protected $type_date;

	/* Constructor */
	// public function __construct($data = array())
	// {
	// // 	foreach ($data as $key => $value) {
	// // 		$setter = $this->_setter($key); // setId, setName,...etc
	// // 		if (method_exists($this, $setter)) {
	// // 			if( $setter == 'setRoom' )
	// // 			{
	// // 				$this->setRoomId( $value );
	// // 				$room_manager = new RoomManager();
	// // 				$value = $room_manager->find($value);
	// // 			}

	// // 			$this->$setter($value);
	// // 		}
	// // 	}
	// // }
	// // private function _setter($key) {
	// // 	if( $key == 'room_id' ) {
	// // 		return "setRoom";
	// // 	} else {
	// // 		return Utils::getCamelCase('set' . ucfirst($key));
	// // 	}
	// }

	/* Getters */
	// public function getId() {
	// 	return $this->id;
	// }
	// public function getTypeId() {
	// 	return $this->type_id;
	// }
	// public function getTypeDate() {
	// 	if( $this->type_date instanceof TypeDate ) {
	// 		return $this->type_date;
	// 	} else {
	// 		$type_date_manager = new TypeDateManager;
	// 		$type_date = $type_date_manager->find($this->type_id);
	// 		return $type_date;
	// 	}
	// }
	// public function getArrivedDate() {
	// 	return $this->arrived_date;
	// }
	// public function getLeftDate() {
	// 	return $this->left_date;
	// }
	// public function getPrice() {
	// 	return $this->price;
	// }
	// public function getState() {
	// 	return $this->state;
	// }
	// public function getCreated() {
	// 	return $this->created;
	// }
	// public function getUpdated() {
	// 	return $this->updated;
	// }

	/* Setters */
	// public function setId($id) {
	// 	$this->id = $id;

	// 	return $this;
	// }
	// public function setRoomId($room_id) {
	// 	$this->room_id = $room_id;

	// 	$room = $this->getRoom();

	// 	$this->setRoom($room);

	// 	return $this;
	// }
	// public function setRoom(Room $room) {
	// 	$this->room = $room;

	// 	return $this;
	// }
	// public function setArrivedDate($arrived_date) {
	// 	$this->arrived_date = $arrived_date;

	// 	return $this;
	// }
	// public function setLeftDate($left_date) {
	// 		$this->left_date = $left_date;

	// 	return $this;
	// }
	// public function setPrice($price) {
	// 	$this->price = $price;

	// 	return $this;
	// }
	// public function setState($state) {
	// 	$this->state = $state;

	// 	return $this;
	// }
	// public function setCreated($created) {
	// 	$this->created = $created;

	// 	return $this;
	// }
	// public function setUpdated($updated) {
	// 	$this->updated = $updated;

	// 	return $this;
	// }


}
