<?php

require_once("BaseDatos.class.php");

class ClienteBD extends BaseDatos {

	function ClienteBD() {
	}

	function save() {
		$sql = "INSERT INTO cliente (nombres, apellidos, rut, mail, fecha_nacimiento, pass) VALUES ('".$this->nombres."', '".$this->apellidos."', '".$this->rut."', '".$this->mail."', '".$this->fecha_nacimiento."', '".$this->pass."')";
		if(!this->insertbd($sql))
			return false;
		return true;
	}

	function delete() {
		$sql = "DELETE FROM cliente WHERE id_cliente = ".$this->id_cliente;
		return $this->deletebd($sql);
	}

	function update() {
		$sql = "UPDATE cliente SET nombres = '".$this->nombres."', apellidos = '".$this->apellidos."', rut = '".$this->rut."', mail = '".$this->mail."', fecha_nacimiento = '".$this->fecha_nacimiento."', pass = '".$this->pass."' WHERE id_cliente = ".$this->id_cliente;
		return $this->updatebd($sql);
	}

	function getClientes() {
		$sql = "SELECT * FROM cliente";
		$clientes = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$clientes[] = new Cliente($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $clientes;
	}

	function getCliente($id_cliente="") {
		$sql = "SELECT * FROM cliente WHERE id_cliente = ".$id_cliente.";";
		$this->connectClass();
		$index = $this->query($sql);
		$cliente = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$cliente = new Cliente($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $cliente;
	}
}

?>