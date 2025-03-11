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
        <!-- INI galeria de card -->
         <div class="container">
            <div class="row">

            <?php require_once "./C_GetUsuarios.php"; 
                           foreach($user as $usuario){
                            echo "
                            <div class='card m-2 flex' style='width: 11rem;'><!-- INI tarjeta empleado -->
                            <div class='card-body p-2'>
                              <h6 class='card-title'>$usuario[nombre]</h6>
                               <p class='card-text'>example text</p>
                              <a href='#' class='card-link'>Card link</a>
                              <a href='#' class='card-link'>Another link</a>
                            </div>
                            </div><!-- FIN tarjeta empleado -->
                            ";
                           }
                           ?>
                          
                             
          </div>
        <!-- FIN galeria de card -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>