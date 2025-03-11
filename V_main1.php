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

                <!-- INI tarjeta empleado -->
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
                                        if($examen['vigente'] == true){ $bgcolor='alert alert-success'; } else { $bgcolor='alert alert-danger'; }
                                        echo "<div class='card $bgcolor m-1 pt-0 pb-1' style='width: 9.5rem;  alert-primary'>
                                                <div class='card-body p-0' >
                                                  <p class='card-title m-0' ><strong> <a href='#' class='card-link'>$examen[nombre_exa]:</strong></a></p>
                                                  <p class='card-text' style='font-size: 9px'><strong>Emision:</strong> $examen[fecha_emision] <br> <strong> Vence: </strong> $examen[fecha_vencimi]</p>
                                                </div>
                                            </div>";
                                      }
                                  }        
                            echo "</div>"  ;      
                            echo "</div> ";
                           }
                           ?>      
                  <!-- FIN tarjetas empleados -->
            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>