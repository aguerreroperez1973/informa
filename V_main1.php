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
  <body>
    <div>
        <div class="container">
          <div class="row">
<!-- NAVBAR a link -------------------------------------------------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" 
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarTogglerDemo01">
      <div><a class="navbar-brand" href="#">INCOTEL</a></div>
      <div><a class="navbar-brand" href="#">Usuarios</a>
      <a class="navbar-brand" href="#">Salir</a> </div>
      
    </div>
  </div>
</nav>
          </div>
        </div>
<!-- galeria de TARJETAS -------------------------------------------------------------------------------------------------------------------->
         <div class="container">
            <div class="row">
                          <?php 
//////////// INI ACTUALIZAR FECHAS POR EXAMEN Y USUARIO ////////////////////////////
                          if(isset($_POST['update'])) {
                            require_once("./C_UpdateFecha.php");
                              if( $message == 'update' ){ echo "
                                
                                              <div class='offcanvas offcanvas-end show' tabindex='-1' id='modal-$exa_id-$nombre_exa-$fecha_emision-$fecha_vencimi'>
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
                                                                      name='trip-start' value='$fecha_emision' min='2020-01-01' max='2030-12-31' disabled ></input>
                                                            </div>
                                                                  <br>
                                                            <div class='form-group'>
                                                                <label for='fecha_in' class='control-label col-xs-3'>Fecha Vencimiento</label>
                                                                <input name='fecha_vencimi' id='fecha_emision' type='date'  class='form-control' 
                                                                           name='trip-start' value='$fecha_vencimi' min='2020-01-01' max='2030-12-31' disabled></input>
                                                                      </div>
                                                          </div>
                                                  </div>";
                                ;}
                              else { echo "<div class='offcanvas offcanvas-end show' tabindex='-1' id='modal-$exa_id-$nombre_exa-$fecha_emision-$fecha_vencimi'>
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
                                                                      name='trip-start' value='$fecha_emision' min='2020-01-01' max='2030-12-31' disabled ></input>
                                                            </div>
                                                                  <br>
                                                            <div class='form-group'>
                                                                <label for='fecha_in' class='control-label col-xs-3'>Fecha Vencimiento</label>
                                                                <input name='fecha_vencimi' id='fecha_emision' type='date'  class='form-control' 
                                                                           name='trip-start' value='$fecha_vencimi' min='2020-01-01' max='2030-12-31' disabled></input>
                                                                      </div>
                                                          </div>
                                                  </div>";}
                          }
//////////// FIN ACTUALIZAR FECHAS POR EXAMEN Y USUARIO ////////////////////////////

//<!------- INI tarjeta empleado ========================================================================================================-->
                          require_once "./C_GetUsuarios.php"; //OBTENER DATOS DEL USUARIO
                                                    
                           foreach($user as $usuario)
                           {
                            echo "<div class='card m-2 p-0 flex' style='width: 11.1rem;'>";
                            echo "<div class='card-body p-2'>" ;       
                            echo "<h6 class='card-title'>$usuario[nombre] $usuario[apellido]</h6>";
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
                                          <div class='offcanvas offcanvas-end' tabindex='-1' id='modal-$examen[exa_id]-$examen[nombre_exa]-$examen[fecha_emision]-$examen[fecha_vencimi]'>
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
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>