
<?php 
//session_start();
//if (!$_SESSION['user']) {header('Location:V_login.php');}
//$usuario=$_SESSION['user'];
//$message='null';
//if ($message!='null'){ $message='';}
//$carga='null';
//if ($carga!='null'){ $carga='';}
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
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div class="container"> 
          <div class="row"> 
             <div class="col-md-12" style="background-color: #3C3E40;">
                  <font style="font-family: sans-serif; color: #ffffff; font-weight: bold;" size="5">INFORMA</font>
                                    <!-- <form class="navbar-form navbar-right" action="find.php" method="POST">
                                          <div class="form-group">
                                            <input type="text" name="dato" class="form-control" placeholder="Search" required>
                                          </div>
                                          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" title="Search"></span></button>
                                          <a class="btn btn-default" href="../Controllers/C_reportProduct.php" role="button"><span class="glyphicon glyphicon-print" title="Print annual report"></span></a>
                                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-circle-arrow-up" title="Upload file"></button>
                                          <a class="btn btn-default" href="insert.php" role="button"><span class="glyphicon glyphicon-plus-sign" title="New"></span></a>
                                          <a class="btn btn-default" href="logout.php" role="button"><span class="glyphicon glyphicon-log-out" title="Exit"></span></a>
                                    </form> -->
              </div>
          </div>
      </div>
    <div class="container">
      
  <!-- modal subir archivo-->
                                           <div class="modal fullscreen-modal fade" id="myModal1"  role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><span>SUBIR ARCHIVO</span></h4>
                                                  </div>
                                                      <div class="modal-body">
                                                            <div class="form-group">
                                                                         <form action="../Controllers/C_uploadFile.php" method="POST" enctype="multipart/form-data">
                                                                              <!-- MAX_FILE_SIZE debe preceder el campo de entrada de archivo -->
                                                                              <center><input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                                                                               Subir archivo separado por comas *.csv : 
                                                                               <input type="file" name="userfile"  /></center>
                                                                </div>
                                                      </div>
                                                                <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" >Upload File</span></button>
                                                                        </form>
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                              </div>
                                            </div>
                                          </div> 
<!-- modal subir archivo-->

<?php
             
//<!-- mensajes de ingreso nuevo proveedor -->

 if(isset($_GET['message'])){ $message=$_GET['message']; } //else { header('Location:start.php'); }
        if( $message == "existe") { echo '<div class="alert alert-danger"> <h4> <center> <span> Error: El Proveedor ya existe !!</span></center> </h4></div>'; } 

                  else  {  if( $message == "noingresado" ){echo '<div class="alert alert-danger"> <a class="close" data-dismiss="modal" aria-label="Close" href="start.php"><span aria-hidden="true">&times;</span></a>
                                                                    <h4> <center> <span> Error: Proveedor no ingresado! </span></center> </h4></div>';}

                              else { if( $message == "ingresado" ){ echo '<div class="alert alert-success"> <a class="close" aria-label="Close" href="start.php"><span aria-hidden="true">&times;</span></a>
                                                                          <h4> <center> <span> El proveedor fue ingresado con Exito </span></center> </h4> </div>';}
                                    }
                          }
//<!-- FIN mensajes de ingreso nuevo proveedor -->
?>

<!-- listado de empleados y examenes. -->
<div class="row"><center>
    <div class="container">    
                    <div class="row">
                      <div class="col-xs-13 ">
                        <h4>&nbspListado Empleados y Examenes Médicos <?php echo"$marca";?> :</h4> 
                          <!--<ul class="nav nav-tabs">
                              <li role="presentation" class="<?php echo "$uno"; ?>"><a href="list.php?marca=<?php echo"$marca";?>">TODOS</a></li>
                              <li role="presentation" class="<?php echo "$dos"; ?>"><a href="list.php?marca=<?php echo"$marca";?>&estado=En_stock">EN STOCK</a></li>
                              <li role="presentation" class="<?php echo "$tres"; ?>"><a href="list.php?marca=<?php echo"$marca";?>&estado=otros">OTROS</a></li>
                          </ul>-->
                      </div>

                        <!-- INI tarjetas empleados -->
                          <div class="card m-2 flex" style="width: 18rem;">
                              <div class="card-body">
                              <h5 class="card-title">Alberto Guerrero</h5>
                             <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"> Bateria Basica: <p style="">Emision: 03-11-2020 <br> Vence: 10-10-2024</p></li>
                              <li class="list-group-item"> Ex.Altura Física: <p>Emision: 03-11-2020 <br> Vence: 10-10-2024</p></li>
                              <li class="list-group-item"> Ex.Altura Geografica: <p>Emision: 03-11-2020 <br> Vence: 10-10-2024</p></li>
                              <li class="list-group-item"> Curso Cero Daño: <p>Emision: 03-11-2020 <br> Vence: 10-10-2024</p></li>
                              <li class="list-group-item"> VIII PAR: <p>Emision: 03-11-2020 <br> Vence: 10-10-2024</p></li>
                              <li class="list-group-item"> Psicosensometrico: <p>Emision: 03-11-2020 <br> Vence: 10-10-2024</p></li>
                            </ul>
                            <div class="card-body">
                              <a href="#" class="card-link">Card link</a>
                              <a href="#" class="card-link">Another link</a>
                            </div>
                          </div>
                        <!-- FIN tarjetas empleados -->

                                         
                    <div class="card m-2 flex" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                      </ul>
                      <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>

                    <div class="card m-2 flex" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                      </ul>
                      <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>

                    </div>
    </div>


<!-- boton para ingresar nuevo proveedor -->
                                  <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Nuevo Proveedor">New</button></center>
<!-- Modal formulario ingreso proveedor -->
                                          <div class="modal fullscreen-modal fade" id="myModal"  role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><span>NUEVO PROVEEDOR</span></h4>
                                                  </div>
                                                      <div class="modal-body">
                                                          <form class="role" action="../Controllers/C_insertProvider.php" method="POST">
                                                                <div class="form-group">
                                                                      <label for="proveedor" class="control-label col-xs-6">Nombre del Proveedor</label>
                                                                      <input name="proveedor" name="proveedor" id="proveedor" type="text" class="form-control" required>
                                                                </div>
                                                      </div>
                                                                <div class="modal-footer">
                                                                  <button type="submit" name="insert" class="btn btn-primary" >Save <span class="glyphicon glyphicon-floppy-disk"></span></button>
                                                          </form>
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                              </div>
                                            </div>
                                          </div>

<div>
 
<!-- MODAL RESULTADO DE LA CARGA DE DATOS -->
<?php  
    
    //<!-- mensajes carga masiva -->
       if(isset($_GET['carga'])){ $carga=$_GET['carga']; }
       echo '<hr>';
          if( $carga == '0' ){ echo '<div class="alert alert-danger"> <a class="close" aria-label="Close" href="start.php"><span aria-hidden="true">&times;</span></a>
                                      <h4><center><span> Error: El archivo no se cargó! </span></center> </h4></div>'; 
                      }
                        else { 
                                if( $carga == '1' ) {  echo '<div class="alert alert-success"> <a class="close" aria-label="Close" href="start.php"><span aria-hidden="true">&times;</span></a>
                                                               <h4><center>Archivo cargado con exito</centre></h4></div>';
                                                    }  
                             }
    //<!-- FIN mensajes carga masiva -->

    // leer archivo de log y presentarlo         
        if( $carga == '1' ){
                            //<!-- evitar boton volver atras -->
                                            echo '  <script type="text/javascript">
                                                              function preventBack() { window.history.forward(); }
                                                              setTimeout("preventBack()", 0);
                                                              window.onunload = function () { null };
                                                          </script>';
                            //<!-- FIN evitar boton volver atras -->
                                            $file = fopen("/home/ingreso/log.txt", "r") or exit("No es posible leer el archivo!");
                                              echo ' <h4>RESULTADO DE LA CARGA: </h4>';
                                              while(!feof($file)) { echo "<li>".fgets($file).""; }
                                                  fclose($file); 
                                                  $carga == '0';
                          }
    // FIN leer archivo de log y presentarlo  
?>    
</div>                                
          </div>

       <br>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </body>
</html>