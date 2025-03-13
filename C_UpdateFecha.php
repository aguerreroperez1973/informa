<?php 
		$fecha_in = $_POST['fecha_emision'];
		$fecha_out = $_POST['fecha_vencimi'];
		$exa_id = $_POST['exa_id'];
		
    //echo " 1= $fecha_in, 2=$fecha_out, 3=$exa_id ";
			require_once "./M_conexion.php";
					$con = new Conexion();
                    $item = $con->updateFecha($fecha_in, $fecha_out, $exa_id);
								if($item=="true"){
							  						//header("Location: ./V_main1.php?message=update");
													$message = 'update';  
													require_once "./V_main1.php";

												} else{
														//header("Location: ./V_main1.php?message=noupdate");
													$message = 'notupdate'; 
													require_once "./V_main1.php";
													} 
					$con = null;			
?>