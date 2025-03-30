<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informa Incotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <script>
  </script>
  <body>
    <div>
        <div class="container">
          <div class="row">
<!-- NAVBAR a link -------------------------------------------------------------------------------------------------------------------->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <div class="container-fluid">
                    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarTogglerDemo01">
                      <div><a class="navbar-brand" href="www.incotel.cl">INCOTEL</a></div>
                      <div><a class="navbar-brand" data-bs-toggle="offcanvas" href="#newuser" title="Nuevo empleado"> <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi-10x bi-person-add " viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                      </svg>
                      </a>
                      <a class="navbar-brand" href="#logout" title="Salir"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg></a> </div>
                    </div>
                  </div>
                </nav>
          </div>
        </div>

<!-- INICIO GALERIA DE TARJETAS -------------------------------------------------------------------------------------------------------------------->
         <div class="container">
            <div class="row">
            
<!------- INI OFFCAMVAS/FORMULARIO nuevo empleado =========================================================================================================-->
             <form class="from" action="./C_NuevoUsuario.php" method="POST">
<!-- mensajes del proceso de ingreso del usuario -->
                                              <?php
                                                    if( $message1 == "noingresado" ){
                                                      echo '
                                                    <div class="offcanvas offcanvas-end show" data-bs-backdrop="static" tabindex="-1" id="offcanvas" aria-labelledby="staticBackdropLabel">
                                                        <div class="offcanvas-header">
                                                          <h5 class="offcanvas-title" id="offcanvasLabel">Datos del empleado</h5>
                                                          <a class="btn btn-close" href="./V_main1.php" role="button"></a>
                                                        </div>
                                                        <div class="offcanvas-body">
                                                              <div class="alert alert-danger m-2"> <center> <span> Error: El usuario NO fué ingresado !!! </span></center></div>
                                                              <div> <center> <a class="btn btn-primary" href="./V_main1.php" role="button">Close</a></center></div>         
                                                        </div>
                                                      </div>
                                                      ';  }
                                                        else { if( $message1 == "ingresado" ){ echo '
                                                          <div class="offcanvas offcanvas-end show" data-bs-backdrop="static" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                                                              <div class="offcanvas-header">
                                                                <h5 class="offcanvas-title" id="offcanvasLabel">Datos del empleado</h5>
                                                                <a class="btn btn-close" href="./V_main1.php" role="button"></a>
                                                              </div>
                                                              <div class="offcanvas-body">
                                                                    <div class="alert alert-success m-2"> <center> <span> El usuario fué ingresado con Exito </span></center> </div>
                                                                    <div> <center> <a class="btn btn-primary" href="./V_main1.php" role="button">Close</a></center></div>
                                                              </div>
                                                          </div>
                                                        ';  } };
                                              ?>
<!-- FIN mensajes del proceso de ingreso del usuario -->

<!------- CONTINUACION OFFCAMVAS/FORMULARIO NUEVO/MODIFICACION EMPLEADO =========================================================================================================-->
                                    <div class='offcanvas offcanvas-end' data-bs-backdrop='static' tabindex='-1' id='newuser' aria-labelledby='offcanvasLabel'>

                                                <div class='offcanvas-header'>
                                                <h5 class="offcanvas-title" id="offcanvasLabel">Datos del empleado</h5>
                                                  <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                </div>
                                                  <div class='offcanvas-body'>
                                                <div class='form-group'>
                                                  <label for='nombre' class='control-label col-xs-1'> Nombre </label>
                                                  <input name='nombre' id='nombre' type='text' class='form-control' value="<?php echo "$nombre" ?>" required></input>
                                                </div>
                                                <div class='form-group' >
                                                  <label for='apellido' class='control-label col-xs-1'>Apellido</label>
                                                  <input name='apellido' id='apellido' type='text' class='form-control' required></input>
                                                </div>
                                                <div class='form-group' >
                                                  <label for='email' class='control-label col-xs-1'>E-mail</label>
                                                  <input name='email' id='email' type='email' class='form-control' required></input>
                                                </div>
                                                <div class='form-group'>
                                                  <label for='rut' class='control-label col-xs-1'> RUT </label>
                                                <input name='rut' id='rut' type='text' class='form-control' required></input>
                                                </div>
                                                <div class='form-group'>
                                                  <label for='fecha_ingreso' class='control-label col-xs-3'>Fecha Ingreso</label>
                                                    <input name='fecha_ingreso' id='fecha_ingreso' type='date'  class='form-control' name='trip-start' value='2025-01-01' min='2024-01-01' max='2030-12-31'></input>
                                                </div>
                                                <br>
                                                <div class='form-group'>
                                                  <center><button type='submit' name='insert' class='btn btn-primary'> Ingresar 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16"><path d="M11 2H9v3h2z"/>
                                                      <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 
                                                      0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 
                                                      13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                                    </svg> </span></button> </center>
                                                </div>
                                              </div>
                                    </div>
                              </form>
<!------- FIN offcanvas nuevo empleado =========================================================================================================-->

<?php   
//////////// INI ACTUALIZAR FECHAS POR EXAMEN Y USUARIO ////////////////////////////
                          if(isset($_POST['update'])) {
                            require_once("./C_UpdateFecha.php");
                              if( $message == 'update' ){ 
                                echo "<div class='offcanvas offcanvas-end show' data-bs-backdrop='static' tabindex='-1' id='modal_ok' aria-labelledby='staticBackdropLabel' >
                                                <div class='offcanvas-header'>
                                                <h5> </h5>
                                                  <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                </div>  
                                              <div class='offcanvas-body'
                                                  <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                   <div class='alert alert-success'><center> <span> Las fechas fueron actualizadas con exito!! </span></center></div>
                                                  <div class='form-group'>
                                                              <label for='fecha_in' class='control-label col-xs-3'>Fecha Emisión</label>
                                                                <input name='fecha_emision' id='fecha_emision' type='date'  class='form-control' 
                                                                      name='trip-start' value='0000-00-00' min='2020-01-01' max='2030-12-31' disabled ></input>
                                                            </div>
                                                                  <br>
                                                            <div class='form-group'>
                                                                <label for='fecha_in' class='control-label col-xs-3'>Fecha Vencimiento</label>
                                                                <input name='fecha_vencimi' id='fecha_emision' type='date'  class='form-control' 
                                                                           name='trip-start' value='0000-00-00' min='2020-01-01' max='2030-12-31' disabled></input>
                                                                      </div>
                                                          </div>
                                                  </div>";
                                ;}
                              else { echo "<div class='offcanvas offcanvas-end show' data-bs-backdrop='static' tabindex='-1' id='modal_notok' aria-labelledby='staticBackdropLabel'>
                                                <div class='offcanvas-header'>
                                                <h5> </h5>
                                                  <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                </div>  
                                              <div class='offcanvas-body'
                                                  <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                   <div class='alert alert-success'><center> <span> Error: No fué posible actualizar las fechas!! </span></center></div>
                                                  <div class='form-group'>
                                                              <label for='fecha_in' class='control-label col-xs-3'>Fecha Emisión</label>
                                                                <input name='fecha_emision' id='fecha_emision' type='date'  class='form-control' 
                                                                      name='trip-start' value='0000-00-00' min='2020-01-01' max='2030-12-31' disabled ></input>
                                                            </div>
                                                                  <br>
                                                            <div class='form-group'>
                                                                <label for='fecha_in' class='control-label col-xs-3'>Fecha Vencimiento</label>
                                                                <input name='fecha_vencimi' id='fecha_emision' type='date'  class='form-control' 
                                                                           name='trip-start' value='0000-00-00' min='2020-01-01' max='2030-12-31' disabled></input>
                                                            </div>
                                                          </div>
                                                  </div>"; }  }
//////////// FIN ACTUALIZAR FECHAS POR EXAMEN Y USUARIO ////////////////////////////


//<!------- INI tarjeta empleado ========================================================================================================-->
                          require_once "./C_GetUsuarios.php"; //OBTENER DATOS DEL USUARIO
                                                    
                           foreach($user as $usuario)
                           {
                            
                            echo "<div class='card m-2 p-0 flex' style='width: 11.1rem;'>";
                            echo "<div class='card-body p-2'>" ;       
                            echo "<h6 class='card-title'><a style='text-decoration-line: none' data-bs-toggle='offcanvas' href='#updateuser-$usuario[usuario_id]'><h5>$usuario[nombre] $usuario[apellido]</h5></a></h6>";
                            
  //<!------- INI OFFCAMVAS/FORMULARIO MODIFICAR EMPLEADO =========================================================================================================--> 
                            echo "
                            <div class='offcanvas offcanvas-end' data-bs-backdrop='static' tabindex='-1' id='updateuser-$usuario[usuario_id]' aria-labelledby='offcanvasLabel' aria-labelledby='staticBackdropLabel'>
                              <div class='offcanvas-header'>
                                <h5 class='offcanvas-title' id='offcanvasLabel'>Datos del empleado</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                              </div>
                              <div class='offcanvas-body'>
                                    <form class='role' action='./C_UpdateUsuario.php' method='POST'> ";

                                    
                                                  if( $message1 == 'userupdate' ){
                                                       echo" <div class='offcanvas offcanvas-end show' data-bs-backdrop='static' tabindex='-1' id='offcanvas' aria-labelledby='staticBackdropLabel'>
                                                        <div class='offcanvas-header'>
                                                          <h5 class='offcanvas-title' id='offcanvasLabel'>Datos del empleado</h5>
                                                          <a class='btn btn-close' href='./V_main1.php' role='button'></a>
                                                        </div>
                                                        <div class='offcanvas-body'>
                                                              <div class='alert alert-danger m-2'> <center> <span> Error: El usuario NO fué ingresado !!! </span></center></div>
                                                              <div> <center> <a class='btn btn-primary' href='./V_main1.php' role='button'>Close</a></center></div>         
                                                        </div>
                                                      </div>";
                                                      }
                                                        else { if( $message1 == 'usernoupdate' ){
                                                          echo "<div class='offcanvas offcanvas-end show' data-bs-backdrop='static' tabindex='-1' id='offcanvas' aria-labelledby='offcanvasLabel'>
                                                              <div class='offcanvas-header'>
                                                                <h5 class='offcanvas-title' id='offcanvasLabel'>Datos del empleado</h5>
                                                                <a class='btn btn-close' href='./V_main1.php' role='button'></a>
                                                              </div>
                                                              <div class='offcanvas-body'>
                                                                    <div class='alert alert-success m-2'> <center> <span> El usuario fué ingresado con Exito </span></center> </div>
                                                                    <div> <center> <a class='btn btn-primary' href='./V_main1.php' role='button'>Close</a></center></div>
                                                              </div>
                                                          </div> "; } };


                                                        
                                   echo"
                                   <input id='usuario_id' name='usuario_id' type='hidden' value='$usuario[usuario_id]' />
                                   <div class='form-group'>
                                        <label for='nombre' class='control-label col-xs-1'> Nombre </label>
                                        <input name='nombre' id='nombre' type='text' class='form-control' value='$usuario[nombre]' required></input>
                                      </div>
                                      <div class='form-group' >
                                        <label for='apellido' class='control-label col-xs-1'>Apellido</label>
                                        <input name='apellido' id='apellido' type='text' class='form-control' value='$usuario[apellido]' required></input>
                                      </div>
                                      <div class='form-group'>
                                        <label for='email' class='control-label col-xs-1'> E-mail </label>
                                      <input name='email' id='email' type='email' class='form-control' value='$usuario[email]' required></input>
                                      </div>
                                      <div class='form-group'>
                                        <label for='rut' class='control-label col-xs-1'> RUT </label>
                                      <input name='rut' id='rut' type='text' class='form-control' value='$usuario[rut]' required></input>
                                      </div>
                                      <div class='form-group'>
                                        <label for='fecha_ingreso' class='control-label col-xs-3'>Fecha Ingreso</label>
                                          <input name='fecha_ingreso' id='fecha_ingreso' type='date'  class='form-control' name='trip-start' value='$usuario[fecha_ingreso]' min='2024-01-01' max='2030-12-31'></input>
                                      </div>
                                    
                                      <div class='form-group'>
                                        <label for='fecha_egreso' class='control-label col-xs-2'>Fecha Egreso</label>
                                          <input name='fecha_egreso' id='fecha_egreso' type='date'  class='form-control' name='trip-start' value='$usuario[fecha_egreso]' min='2024-01-01' max='2030-12-31'></input>
                                      </div>
                                     <br>
                                      <div class='form-group'>
                                        <center><button type='submit' name='updateuser' class='btn btn-primary'>Save</span></button> </center>
                                      </div>
                                  </div>
                                </div>
                                  ";
//<!------- FIN OFFCAMVAS/FORMULARIO MODIFICAR EMPLEADO =========================================================================================================-->
                                require_once "./C_ExamenesUsuarios.php"; //OBTENER DATO EXAMENES POR USUARIO
                                  foreach ($item as $examen) {
                                    if($usuario['usuario_id'] == $examen['usuario_id'])
                                      { 
                                        if($examen['vigente'] == true){ $bgcolor='alert alert-success'; } else { $bgcolor='alert alert-danger'; } //OBTENER vigencia para color de fondo de la tarjeta
                                        echo "<div class='card $bgcolor m-1 pt-0 pb-1' style='width: 9.5rem;  alert-primary'>
                                                <div class='card-body p-0' >
                                                  <p class='card-title m-0' ><strong> <a data-bs-toggle='offcanvas' href='#modal-$examen[exa_id]-$examen[nombre_exa]-$examen[fecha_emision]-$examen[fecha_vencimi]' >$examen[nombre_exa]:</strong></a></p>
                                                  <p class='card-text' style='font-size: 9px'><strong>Emision:</strong> $examen[fecha_emision] <br> <strong> Vence: </strong> $examen[fecha_vencimi]</p>
                                                </div>
                                              </div>
                                        <!------- MODAL PARA ACTUALIZAR FECHAS DEL EXAMEN ------------------------------------------------------------------------------------>
                                          <div class='offcanvas offcanvas-end' data-bs-backdrop='static' tabindex='-1' id='modal-$examen[exa_id]-$examen[nombre_exa]-$examen[fecha_emision]-$examen[fecha_vencimi]' aria-labelledby='staticBackdropLabel'>
                                                <div class='offcanvas-header'>
                                                  <h5> $usuario[nombre] $usuario[apellido] </h5>
                                                  <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                </div>  
                                              <div class='offcanvas-body'>
                                               <form class='role' method='POST'>
                                                    <div>
                                                      <div> <h6> Nombre del Examen: $examen[nombre_exa] </h6> </div>
                                                          <input id='prodId' name='exa_id' type='hidden' value='$examen[exa_id]' />
                                                            <div class='form-group'>
                                                              <label for='fecha_in' class='control-label col-xs-3'>Fecha Emisión</label>
                                                                <input name='fecha_emision' id='fecha_emision' type='date'  class='form-control' 
                                                                      name='trip-start' value='$examen[fecha_emision]' min='2020-01-01' max='2030-12-31'></input>
                                                            </div>
                                                                  <br>
                                                            <div class='form-group'>
                                                                <label for='fecha_in' class='control-label col-xs-3'>Fecha Vencimiento</label>
                                                                <input name='fecha_vencimi' id='fecha_emision' type='date'  class='form-control' 
                                                                           name='trip-start' value='$examen[fecha_vencimi]' min='2020-01-01' max='2030-12-31'></input>
                                                                      </div><br>
                                                          <div class='form-group'>
                                                            <center><button type='submit' name='update' class='btn btn-primary'> Actualizar </button> </center>              
                                                          </div>
                                                    </div>
                                                  </form>
                                              </div>
                                          </div>";
  //<!------- FINAL MODAL PARA ACTUALIZAR FECHAS DEL EXAMEN ---------------------------------------------------------------------------------> 
                                      }
                                  }        
                            echo "</div>"  ;      
                            echo "</div> "; 
                           }
  ?>      
  <!------- FIN tarjetas empleados =========================================================================================================-->
            </div>
  <div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>