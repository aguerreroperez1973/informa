<?php 
		$usuario_id = $_POST['usuario_id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $rut = $_POST['rut'];
		$fecha_ingreso = $_POST['fecha_ingreso'];
        $fecha_egreso = $_POST['fecha_egreso'];

       echo "id=$usuario_id nombre= $nombre , apellido=$apellido;  fecha1= $fecha_ingreso; fecha2= $fecha_egreso ; email= $email; rut= $rut ";
			require_once "./M_conexion.php";
					$con = new Conexion();
                    $newuser = $con->updateUsuario($usuario_id, $nombre, $apellido, $email, $rut, $fecha_ingreso, $fecha_egreso);

								if($newuser=="true"){
							  						$message1 = 'userupdate';  
													require_once "./V_main1.php";
												} else{
													$message1 = 'usernoupdate'; 
													require_once "./V_main1.php";
													}	
?>