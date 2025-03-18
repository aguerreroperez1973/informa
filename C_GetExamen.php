<?php 
		if(isset($_GET['$exa_id'])){ $exa_id=1; echo "id vacio";}
		else {
			echo "id lleno";
		//$exa_id = $examen['exa_id'];
		//$exa_id = 1;
			require_once "./M_conexion.php";
					$con = new Conexion();
                    $test = $con->GetExamen($exa_id);
					require_once "./V_main1.php"; 	
				}	
?>
