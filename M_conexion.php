<?php 

	class Conexion{

					private $con;

						public function __construct()
						{
								$this->con = new mysqli('localhost', 'root', 'Warrior1973&', 'examenes_db');
								//if ($this->con->connect_error) { die("Connection failed: " . $conn->connect_error);
						}

						///////////////////LOGIN USUARIOS ////////////////////////////////////////////////////
						
						public function loginUser($username, $password){

							$result = $this->con->query("SELECT * FROM usuario WHERE username = '$username' AND password = '$password'");

							$numRows = $result->num_rows;
								if ($numRows == 1){ return true; } 
									return false;		
						}//fin loginUSer
			
						///////////////////OBTENER LOS USUARIOS PARA LISTAR EXAMENES ////////////////////////////////////////////////////
						public function getUsuarios(){

							$return = [];
							$i = 0;

							//$query = $this->con->query('SELECT nombre, apellido, usuario_id FROM usuario');
							$query = $this->con->query('SELECT * FROM usuario');

							while ($row = $query->fetch_assoc()){
								$return[$i] = $row;
								$i++;
							}

							return $return;
						} // fin getExamenesUsuarios

						///////////////////LISTAR TODOS LOS USUARIOS CON SUS EXAMENES ////////////////////////////////////////////////////
						public function getExamenesUsuarios(){

										$return = [];
										$i = 0;
						
										$query = $this->con->query('SELECT exa_id, nombre_exa, fecha_emision, fecha_vencimi, usuario_id, vigente FROM examen');
										
										while ($row = $query->fetch_assoc()){
											$return[$i] = $row;
											$i++;
										}
										return $return;
						} // fin getExamenesUsuarios


						/////////////////// ACTUALIZAR FECHAS DE EXAMENES /////////////////////////////////////////////////////////////////////	
						
						public function updateFecha($fecha_in, $fecha_out, $exa_id){

								$update = $this->con->query("UPDATE examen SET fecha_emision='$fecha_in', fecha_vencimi='$fecha_out', vigente=1 WHERE exa_id='$exa_id'") or die($this->con->error.__LINE__);
									
									if ($update === TRUE){return true;} 
									else {return error; }
												
						}//fin updateFecha

						/////////////////// OBTENER DATOS DE UN EXAMEN ////////////////////////////////////////////////////
						
						public function GetExamen($exa_id){

							$result = $this->con->query("SELECT nombre_exa, fecha_emision, fecha_vencimi FROM examen WHERE exa_id = '$exa_id'");

							$numRows = $result->num_rows;
								if ($numRows == 1){ return true; } 
									return false;		
						}//fin 
						
						/////////////////// INGRESAR NUEVO USUARIO /////////////////////////////////////////////////////////////////////	
						
						public function nuevoUsuario($nombre, $apellido, $email, $rut, $fecha_ingreso){

							//$insert = $this->con->query("INSERT into usuario (nombre, apellido, rut, activo, fecha_ingreso, admin, email) VALUES ('$nombre', '$apellido','$rut', '1', '$fecha_ingreso', '0', '$email')") or die($this->con->error.__LINE__);
								$insert = false;
								if ($insert === TRUE){return true;} 
								else {return false; }
											
					}//fin updateFecha

					///////////////////  ACTUALIZAR DATOS DEL EMPLEADOS /////////////////////////////////////////////////////////////////////	
						
					public function updateUsuario($usuario_id, $nombre, $apellido, $email, $rut, $fecha_ingreso, $fecha_egreso){

						$update = $this->con->query("UPDATE usuario SET nombre='$nombre', apellido='$apellido', email='$email', rut='$rut', fecha_ingreso='$fecha_ingreso', fecha_egreso='$fecha_egreso' WHERE usuario_id='$usuario_id'") or die($this->con->error.__LINE__);
							$insert = false;
							if ($insert === TRUE){return true;} 
							else {return false; }
										
				}//fin updateFecha

					} //fin classConexion	

?>