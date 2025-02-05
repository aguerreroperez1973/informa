<?php 
//session_start();
//if ($_SESSION[usuario]) {
//	header('Location: inicio.php');
//}
?>
<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>INFORMACION EXAMENES</title>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>	
		      <div class="container"> 
		          <div class="row"> 
		             <div class="col-md-12" style="background-color: #3C3E40;">
		                  <font style="font-family: sans-serif; color: #ffffff; font-weight: bold;" size="5">INFORMA</font>
		             </div>
		          </div>
		      </div>
		<br>
		<br>
		      <div class="container">
			        	<div class="row text-center">
						  <div class="col-md-6 col-md-offset-3">
						  		<form class="role" action="./C_loginUser.php" method="POST">

										<?php
											if(isset($_GET["error"])) {
																		echo '<div class="alert alert-danger"> usuario o contraseña incorrectos!</div>';
																		}
										?>
					                      <div class="form-group form-group-lg form-group-center">
						                      <label for="username">Nombre de usuario</label>
						                      <input  class="form-control" name="username" id="username" type="text" required ></input>
					                      </div>
					                      <div class="form-group form-group-lg">
						                      <label for="passwd">Contraseña</label>
						                      <input class="form-control" name="password" id="passwd" type="password" required></input>
			                    		  </div>
			                    		  <br>
			                    		  <div><button type="submit" name="login" class="btn btn-default btn-lg col-xs-12"><span>LOGIN</span></button></div>
			                    		  
					                 </form>
						  </div>
						</div>
		      </div>
  </body>
</html>
