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
			
			///////////////////LISTAR TODOS LOS USUARIOS CON SUS EXAMENES ////////////////////////////////////////////////////
						public function getExamenesUsuarios(){

							$return = [];
							$i = 0;
			
							$query = $this->con->query('SELECT * FROM examen');
			
							while ($row = $query->fetch_assoc()){
								$return[$i] = $row;
								$i++;
							}
			
							return $return;
						} // fin getExamenesUsuarios

					} //fin classConexion	

?>