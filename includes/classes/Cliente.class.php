<?php

require_once("ClienteBD.class.php");

class Cliente extends ClienteBD {

	function Cliente($id_cliente="", $nombres="", $apellidos="", $rut="", $mail="", $fecha_nacimiento="", $pass="") {
		$this->id_cliente = $id_cliente;
		$this->nombres = $nombres;
		$this->apellidos = $apellidos;
		$this->rut = $rut;
		$this->mail = $mail;
		$this->fecha_nacimiento = $fecha_nacimiento;
		$this->pass = $pass;
	}
	
	function setId($id_cliente) {
		$this->id_cliente = $id_cliente;
	}
	S
	function setNombres($nombres) {
		$this->nombres = $nombres;
	}

	function setApellidos($apellidos) {
		$this->apellidos = $apellidos;
	}
	
	function setRut($rut) {
		$this->rut = $rut;
	}
	
	function setMail($mail) {
		$this->mail = $mail;
	}
	
	function setFechaNacimiento($fecha_nacimiento) {
		$this->fecha_nacimiento = $fecha_nacimiento;
	}
	
	function setPass($pass) {
		$this->pass = $pass;
	}
	
	function getId() {
		return $this->id_cliente;
	}
	
	function getNombres() {
		return $this->nombres;
	}

	function getApellidos() {
		return $this->apellidos;
	}
	
	function getRut() {
		return $this->rut;
	}
	
	function getMail() {
		return $this->mail;
	}
	
	function getFechaNacimiento() {
		return $this->fecha_nacimiento;
	}
	
	function getPass() {
		return $this->pass;
	}
}

?>