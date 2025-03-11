<?php
                                              require_once "./C_ExamenesUsuarios.php";
                                                foreach ($item as $examen)
                                                  { echo " 
                                                          <div class='card mb-1 p-0 ' style='width: 9.5rem;'><!-- INI SUB-tarjeta -->
                                                            <div class='card-body' style='font-size: 11px'>
                                                              <p class='card-title' ><strong> <a href='#' class='card-link'>$examen[nombre_exa]:</strong></a></p>
                                                              <p class='card-text' style='font-size: 10px'>Emision: $examen[fecha_emision] <br> Vence: $examen[fecha_vencimi]</p>
                                                            </div>
                                                          </div>
                                                        "; } ?><!-- FIN SUB-tarjeta -->