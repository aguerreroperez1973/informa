<?php 
		require_once "./M_conexion.php";
	   			$con = new Conexion();	
				$user = $con->getUsuarios();
		require_once "./V_main1.php";
?>