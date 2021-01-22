<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $bd="millennium";
		private $password="";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd)

			or die("error al conectar BD");
			return $conexion;
		}

	}



	
 ?>