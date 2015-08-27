<?php
	error_reporting(E_ERROR);
	class ConexionBD
	{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $bd = "casamujer";
		function conectarBD(){
			$mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->bd);
			mysqli_query("SET NAMES 'UTF8'");
			return $mysqli;
		}
	}
?>