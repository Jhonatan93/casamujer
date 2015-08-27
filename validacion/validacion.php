<?php
	require('../conexion/conexion.php');
	session_start();
	if(isset($_POST['Entrar'])){
		$conn = new ConexionBD;
		$link = $conn->conectarBD(); 
		$user = $_POST['usuario'];
		$pass = $_POST['contrasenia'];
		
	$query="call sp_validarLogin('$user','$pass')";
	
		$result = mysqli_query($link, $query);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_array($result);
			if($row[0] == "N"){
				header("Location: ../login.php?errn=1");
			}else if($row[0] == "B"){
				header("Location: ../login.php?errb=1");
			}else if($row[0] == "I"){
				header("Location: ../login.php?erri=1");
			}
			else{
				$_SESSION['Administrador'] = $row[0] . $row[1];
				header("Location: ../index.php");
			}
		}
		else{
			header("Location: ../login.php?");
		}
		mysqli_close($link);
	}
	
?>