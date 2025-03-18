<?php 
		/*$nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $rut = $_POST['rut'];
		$fecha_ingreso = $_POST['fecha_ingreso'];

       // echo " nombre= $nombre , apellido=$apellido;  fecha= $fecha_ingreso; email= $email; rut= $rut ";
			require_once "./M_conexion.php";
					$con = new Conexion();
                    $newuser = $con->nuevoUsuario($nombre, $apellido, $email, $rut, $fecha_ingreso);*/

                    $newuser='true';
								if($newuser=="true"){
							  						$message = 'ingresado';  
													require_once "./V_main1.php";
                                                    //header("Location: ./V_main1.php?message=ingresado");
												} else{
													$message = 'noingresado'; 
													require_once "./V_main1.php";
													}
					//$con = null;			
?>