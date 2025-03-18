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
<!-- NAVBAR a link -------------------------------------------------------------------------------------------------------------------->
                <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark" >
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">INCOTEL</a>
                  </div>
                </nav>
            </div>
        </div>
<!-- galeria de TARJETAS -------------------------------------------------------------------------------------------------------------------->
         <div class="container">
            <div class="row">

<!------- INI tarjeta empleado ========================================================================================================-->
                          <?php require_once "./C_GetUsuarios.php"; //OBTENER DATOS DEL USUARIO
                           $show='';
                           foreach($user as $usuario)
                           {
                            echo "<div class='card m-2 p-0 flex' style='width: 11.1rem;'>";
                            echo "<div class='card-body p-2'>" ;       
                            echo "<h6 class='card-title'>$usuario[nombre] $usuario[apellido]</h6>";
                                require_once "./C_ExamenesUsuarios.php"; //OBTENER DATO EXAMENES POR USUARIO
                                  foreach ($item as $examenes) {
                                    if($usuario['usuario_id'] == $examenes['usuario_id'])
                                      {
                                        if($examenes['vigente'] == true){ $bgcolor='alert alert-success'; } else { $bgcolor='alert alert-danger'; } //OBTENER vigencia para color de fondo de la tarjeta
                                        echo "<div class='card $bgcolor m-1 pt-0 pb-1' style='width: 9.5rem;  alert-primary'>
                                                <div class='card-body p-0' >
                                                  <p class='card-title m-0' ><strong> <a data-bs-toggle='offcanvas' href='#modal-$examenes[exa_id]' >$examenes[nombre_exa]:</strong></a></p>
                                                  <p class='card-text' style='font-size: 9px'><strong>Emision:</strong> $examenes[fecha_emision] <br> <strong> Vence: </strong> $examenes[fecha_vencimi]</p>
                                                </div>
                                              </div>
                                            ";
                                      }
                                     }   
                                                            //require_once "./C_GetExamen.php";
                                                           // foreach ($test as $exa){
                                                            echo " <div class='offcanvas offcanvas-end' id='modal-$examenes[exa_id]'>
                                                                    <div class='offcanvas-header'>
                                                                      <h5> $usuario[nombre] $usuario[apellido] </h5>
                                                                      <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                                    </div>  
                                                                        <div class='offcanvas-body'> 
                                                                            <form class='role' method='POST'>
                                                                              <div>
                                                                              <div> <h6> nombre examen: $exa[nombre_exa] <-> id:</h6> </div>
                                                                                <input id='prodId' name='exa_id' type='hidden' value='$examenes[exa_id]' />
                                                                                  <div class='form-group'>
                                                                                    <label for='fecha_in' class='control-label col-xs-3'>Fecha Emisión</label>
                                                                                    <input name='fecha_emision' id='fecha_emision' type='date'  class='form-control' name='trip-start' value='$exa[fecha_emision]' min='2024-01-01' max='2030-12-31'></input>
                                                                                  </div>
                                                                                  <br>
                                                                                  <div class='form-group'>
                                                                                    <label for='fecha_in' class='control-label col-xs-3'>Fecha Vencimiento</label>
                                                                                    <input name='fecha_vencimi' id='fecha_emision' type='date'  class='form-control' name='trip-start' value='$exa[fecha_vencimi]' min='2024-01-01' max='2030-12-31'></input>
                                                                                  </div>
                                                                                  <br>
                                                                                  <div class='form-group'>
                                                                                    <center><button type='submit' name='update' class='btn btn-primary'> Actualizar </button> </center>
                                                                                  </div>
                                                                              </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>";
                                                          //  }     
                            echo "</div>";      
                            echo "</div> "; 

//<!------- MODAL PARA ACTUALIZAR FECHAS DEL EXAMEN ------------------------------------------------------------------------------------>

// $exa_id = $examen['exa_id'];
// $nombre_exa = $examen['nombre_exa'];
// $fecha_in = $examen['fecha_emision'];
// $fecha_out = $examen['fecha_vencimi'];
// $show='show';

//////////// ACTUALIZAR FECHAS POR EXAMEN Y USUARIO ////////////////////////////
if(isset($_POST['update'])) {
  require_once("./C_UpdateFecha.php");
 
  if( $message == "notupdate" ){ echo '<div class="alert alert-danger"> <h4> <center> <span> Error: producto no ingresado! </span></center> </h4></div>';}
      else { echo '<div class="alert alert-success"> <h4> <center> <span> Exito!! actualizado </span></center> </h4></div> ';   } }
                            
//////////// FIN ACTUALIZAR FECHAS POR EXAMEN Y USUARIO ////////////////////////////
                           }
                           ?>      
  <!------- FIN tarjetas empleados =========================================================================================================-->


            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>