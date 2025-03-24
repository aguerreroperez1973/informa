<?php 
		$nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $rut = $_POST['rut'];
		$fecha_ingreso = $_POST['fecha_ingreso'];

       // echo " nombre= $nombre , apellido=$apellido;  fecha= $fecha_ingreso; email= $email; rut= $rut ";
			require_once "./M_conexion.php";
					$con = new Conexion();
                    $newuser = $con->nuevoUsuario($nombre, $apellido, $email, $rut, $fecha_ingreso);

								if($newuser=="true"){
							  						$message1 = 'ingresado';  
													require_once "./V_main1.php";
                                                   //header("Location: ./V_main1.php");
												   header("Location: ./V_main1.php?message1=ingresado");
												} else{
													$message1 = 'noingresado'; 
													require_once "./V_main1.php";
													//header("Location: ./V_main1.php#message");
													}	
?>