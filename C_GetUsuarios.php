<?php 
		require_once "./M_conexion.php";
	   			$con = new Conexion();	
				$item = $con->getUsuarios();
		require_once "./V_main.php";
?>