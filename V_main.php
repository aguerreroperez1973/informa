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
                            <div class="card m-2 flex" style="width: 11rem;">
                                <div class="card-body p-2">
                                    <h6 class="card-title">Alberto Guerrero</h6>
                                </div>

                                    <!-- INI SUB-tarjeta -->
                                        <?php
                                              require_once "./C_ExamenesUsuarios.php";
                                                foreach ($item as $examen)
                                                  { echo "
                                                          <div class='card mb-1 p-0 ' style='width: 9.5rem;'>
                                                            <div class='card-body' style='font-size: 11px'>
                                                              <p class='card-title' ><strong> <a href='#' class='card-link'>$examen[nombre_exa]:</strong></a></p>
                                                              <p class='card-text' style='font-size: 10px'>Emision: $examen[fecha_emision] <br> Vence: $examen[fecha_vencimi]</p>
                                                            </div>
                                                          </div>
                                                          "; } ?>
                                    <!-- FIN SUB-tarjeta -->

                              </div>
                  <!-- FIN tarjetas empleados -->

            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>