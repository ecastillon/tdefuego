<?php
 
class BaseDatos
{

	function BaseDatos() {
	}

	function connectClass() {
		global $strings,$oConn,$databaseType;
		$oConn= @mysql_connect(MYSERVER, MYLOGIN, MYPASSWORD) or die($strings["error_server"]);
		mysql_select_db(MYDATABASE, $oConn) or die($strings["error_server"]);
	}

	function query($sql) {
		global $oConn;
		$this->sql = $sql;
		mysql_query("SET NAMES 'utf8'",$oConn);
		$this->result = @mysql_query($sql,$oConn);
		return $this->result;
	}
	
	function fetch() {
		global $row;
		if (!$this->result) {
			echo "Un Error ha ocurrido.\n";
			echo "<font color=red><b>".mysql_error($row)."</b></font><br><br><br>";
			echo "<font color=red><b>La consulta es: \"".$this->sql."\"</b></font><br>";
			exit;
		}
		$row=@mysql_fetch_array($this->result);
		return $row;
	}

	function close() {
		global $oConn;
		@mysql_free_result($this->result);
		@mysql_close($oConn);
	}

	function insertbd($query) {
		global $oConn, $row, $sql;
		$this->connectClass();
		$sql = $query;
		$result = $this->query($sql);
		$this->close();
		
		if ($result) {
			return true;
		} else {
			global $msg; 
			$msg = $sql;
			return false;
		}
	}

	function updatebd($sqlquery) {
		global $oConn, $row;
		$this->connectClass();
		$sql = $sqlquery;
		$result = $this->query($sql);
		$this->close();
		
		if($result) {
			return true;
		} else {
			return false;
		}
	}	

	function deletebd($sqlquery) {
		return $this->insertbd($sqlquery);
	}

}

?>