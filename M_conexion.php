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
			
							$query = $this->con->query('SELECT nombre_exa, fecha_emision, fecha_vencimi, usuario_id, vigente FROM examen');
							/*$query = $this->con->query('SELECT usuario.nombre, usuario.apellido, 
														usuario.usuario_id as userid, examen.usuario_id as userexaid, 
														examen.nombre_exa, examen.fecha_emision, examen.fecha_vencimi 
														FROM examen
														inner JOIN usuario ON usuario.usuario_id = examen.usuario_id');*/
							while ($row = $query->fetch_assoc()){
								$return[$i] = $row;
								$i++;
							}
							return $return;
						} // fin getExamenesUsuarios

					} //fin classConexion	

?>