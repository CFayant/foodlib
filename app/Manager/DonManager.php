<?php

namespace Manager;

use Manager\TypeDateManager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class DonManager extends \W\Manager\Manager
{

	public function findAll($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	{

		// $datas = parent::findAll();
		// $final_datas = [];
		// foreach ($datas as $key => $value) {
		// 	$type_date_manager = new TypeDateManager();
	 //    	$type_date_manager->setTable('type_date');

		// 	$type = $type_date_manager->find($value['type_id']);
		// 	$value['type'] = $type;

		// 	$final_datas[] = $value;
	 //    }    

		// return $final_datas;

		$datas = parent::findAll();
		$final_datas = [];
		foreach ($datas as $key => $value) {

			// Récupération de la donnée "type de date" provenant de la
			// table type_date
			$type_date_manager = new TypeDateManager();
	    	$type_date_manager->setTable('type_date');

			$type = $type_date_manager->find($value['type_id']);
			$value['type'] = $type;

			// $final_datas[] = $value;

			// Récupération des données "type de date" provenant de la
			// table type_date
			$donneur_manager = new DonneurManager();
	    	$donneur_manager->setTable('donneurs');

			$donneur = $donneur_manager->find($value['donneur_id']);
			$value['donneur'] = $donneur;

			$final_datas[] = $value;

	    }

		return $final_datas;

		// foreach ($datas as $key => $value) {

	 //    }

		// return $final_datas;


		
	}

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