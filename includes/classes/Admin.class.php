<?php

require_once("AdminBD.class.php");

class Admin extends AdminBD {

	function Admin($id_admin="", $nombre="", $rut="", $mail="", $username="", $tipo="", $pass="") {
		$this->id_admin = $id_admin;
		$this->nombre = $nombre;
		$this->rut = $rut;
		$this->mail = $mail;
		$this->username = $username;
		$this->tipo = $tipo;
		$this->pass = $pass;
	}
	
	function setId($id_admin) {
		$this->id_admin = $id_admin;
	}
	S
	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setRut($rut) {
		$this->rut = $rut;
	}
	
	function setMail($mail) {
		$this->mail = $mail;
	}
	
	function setUsername($username) {
		$this->username = $username;
	}
	
	function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	
	function setPass($pass) {
		$this->pass = $pass;
	}
	
	function getId() {
		return $this->id_admin;
	}
	
	function getNombre() {
		return $this->nombre;
	}

	function getRut() {
		return $this->rut;
	}
	
	function getMail() {
		return $this->mail;
	}
	
	function getUsername() {
		return $this->username;
	}
	
	function getTipo() {
		return $this->tipo;
	}
	
	function getPass() {
		return $this->pass;
	}
}

?>