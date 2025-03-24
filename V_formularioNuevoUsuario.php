<?php echo "<div class='offcanvas offcanvas-end' data-bs-backdrop='static' tabindex='-1' id='newuser' aria-labelledby='offcanvasLabel'> 
                                                <div class='offcanvas-header'>
                                                <h5 class='offcanvas-title' id='offcanvasLabel'>Datos del empleado</h5>
                                                  <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                                                </div>
                                                  <div class='offcanvas-body'>
                                                <div class='form-group'>
                                                  <label for='nombre' class='control-label col-xs-1'> Nombre </label>
                                                  <input name='nombre' id='nombre' type='text' class='form-control' required></input>
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
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-floppy' viewBox='0 0 16 16'><path d='M11 2H9v3h2z'/>
                                                      <path d='M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 
                                                      0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 
                                                      13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z'/>
                                                    </svg> </span></button> </center>
                                                </div>
                                              </div>
                                    </div>";
                                    require_once "./V_main1.php"
?>
                                    