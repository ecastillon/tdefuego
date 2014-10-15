<?php

require_once("BaseDatos.class.php");

class AdminBD extends BaseDatos {

	function AdminBD() {
	}

	function save() {
		$sql = "INSERT INTO admin (nombre, rut, mail, username, tipo, pass) VALUES ('".$this->nombre."', '".$this->rut."', '".$this->mail."', '".$this->username."', '".$this->tipo."', '".$this->pass."')";
		if(!this->insertbd($sql))
			return false;
		return true;
	}

	function delete() {
		$sql = "DELETE FROM admin WHERE id_admin = ".$this->id_admin;
		return $this->deletebd($sql);
	}

	function update() {
		$sql = "UPDATE admin SET nombres = '".$this->nombre."', '".$this->rut."', '".$this->mail."', '".$this->username."', '".$this->tipo."', '".$this->pass."' WHERE id_admin = ".$this->id_admin;
		return $this->updatebd($sql);
	}

	function getAdmins() {
		$sql = "SELECT * FROM admin";
		$admins = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$admins[] = new Admin($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $admins;
	}

	function getAdmin($id_admin="") {
		$sql = "SELECT * FROM admin WHERE id_admin = ".$id_admin.";";
		$this->connectClass();
		$index = $this->query($sql);
		$admin = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$admin = new Admin($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $admin;
	}
}

?>