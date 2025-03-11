<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informa Incotel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div>
        <div class="container">
          <div class="row">
          <!-- NAVBAR a link -->
                <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark" >
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">INCOTEL</a>
                  </div>
                </nav>
            </div>
        </div>
        <!-- galeria de card -->
         <div class="container">
            <div class="row">

                <!-- INI tarjeta empleado ========================================================================================================-->
                          <?php require_once "./C_GetUsuarios.php"; //OBTENER DATOS DEL USUARIO
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
                                                  <p class='card-title m-0' ><strong> <a data-bs-toggle='offcanvas' href='#offcanvasExample' data-exa='$examen[nombre_exa]'  >$examen[nombre_exa]:</strong></a></p>
                                                  <p class='card-text' style='font-size: 9px'><strong>Emision:</strong> $examen[fecha_emision] <br> <strong> Vence: </strong> $examen[fecha_vencimi]</p>
                                                </div>
                                            </div>

                                            <div class='offcanvas offcanvas-end' tabindex='-1' id='offcanvasExample' aria-labelledby='offcanvasRightLabel'>
                                              <div class='offcanvas-header'>
                                                <h5 id='offcanvasRightLabel'>$usuario[nombre] $usuario[apellido]</h5>
                                                <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                              </div>
                                              <div class='offcanvas-body'>
                                                  <form class='role' action='../Controllers/C_insertProduct.php' method='POST'>
                                                    <div>
                                                        <div class='form-group'>
                                                          <label for='fecha_in' class='control-label col-xs-3'>Fecha Emisión</label>
                                                          <input name='fecha_emision' id='fecha_emision' type='date'  class='form-control' name='trip-start' value='2022-01-01' min='2020-01-01' max='2030-12-31'></input>
                                                        </div>
                                                        <div class='form-group'>
                                                          <label for='fecha_in' class='control-label col-xs-3'>Fecha Vencimiento</label>
                                                          <input name='fecha_emision' id='fecha_emision' type='date'  class='form-control' name='trip-start' value='2022-01-01' min='2020-01-01' max='2030-12-31'></input>
                                                        </div>
                                                        <div class='form-group'>
                                                          <center><button type='submit' name='insert' class='btn btn-default btn-lg btn-block'>Save <span class='glyphicon glyphicon-floppy-disk'></span></button> </center>
                                                         </div>



                                                    </div>
                                                  </form>
                                              </div>
                                            </div>
                                            ";
                                      }
                                  }        
                            echo "</div>"  ;      
                            echo "</div> ";

                                 

                           }
                           ?>      
                  <!-- FIN tarjetas empleados =========================================================================================================-->
                  
                  <!-- INI desplegar datos de examen seleccionado =====================================================================================-->
                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                        <div class="form-group">
                         <label for="modelo" class="control-label col-xs-1">Item/Modelo</label>
                        <input name="modelo" id="modelo" type="text" class="form-control" value="<?php echo "$modelo"; ?>" disabled>
                      </div>
                        </div>
                      </div>
                  <!-- FIN desplegar datos de examen seleccionado =====================================================================================-->
            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>