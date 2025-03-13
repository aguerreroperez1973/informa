<?php 
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (empty($username) || empty($password)) {
			echo '<div class="alert alert-danger">username o contraseña sin completar</div>';
			} else{ 
				require "./M_conexion.php";
					$con = new Conexion();	
						$user = $con->loginUser($username,$password);		
						if($user=="true"){
											session_start();
											//echo "$username";
											//$_SESSION[user] = $username;
											header("Location: ./V_loginTrue.php");
						} else{
							header("Location: ./V_login.php?error=login");
						}
					}
	}
?>