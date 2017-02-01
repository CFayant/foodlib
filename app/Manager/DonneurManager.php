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


	public function updateByUserId(array $data, $id, $stripTags = true)
	{
		if (!is_numeric($id)){
			return false;
		}

		$sql = "UPDATE " . $this->table . " SET ";
		foreach($data as $key => $value){
			$sql .= "$key = :$key, ";
		}
		$sql = substr($sql, 0, -2);
		$sql .= " WHERE wuser_id = :id";

		$sth = $this->dbh->prepare($sql);
		foreach($data as $key => $value){
			$value = ($stripTags) ? strip_tags($value) : $value;
			$sth->bindValue(":".$key, $value);
		}
		$sth->bindValue(":id", $id);

		if (!$sth->execute()){
			return false;
		}
		return $this->find($id);
	}

}
