<?php  

	class clsDatos{
		protected $conexion;

		public function __construct(){
			$servername="localhost";
			$username="ricohzon_admin";
			$password="Idsjcef87#";
			$dbname="ricohzon_bd_richoznorte";

			$this->conexion = new mysqli($servername, $username, $password, $dbname);

			if ($this->conexion->connect_error) {
				die("Conexión Fallida". $this->conexion->connect_error);
			}

		}

		public function query($sql){
		$this->resultado = $this->conexion->query($sql);
			if($this->resultado->num_rows > 0 && $this->resultado->num_rows == 1){
				$rows=$this->resultado->fetch_all(MYSQLI_ASSOC);
				$this->resultado->free();
				return $rows;
			}else if($this->resultado->num_rows > 0 && $this->resultado->num_rows > 1){
				$rows=$this->resultado->fetch_all(MYSQLI_ASSOC);
				$this->resultado->free();
			return $rows;
			}else{
				return false;
			}
		}

		public function run($sql){
			$this->conexion->begin_transaction();
			$transaccion=$this->conexion->query($sql);

			if ($transaccion == TRUE){
				$this->conexion->commit();
				return true;
			}else{
				$this->conexion->rollback();
				return $this->conexion->error;
			}
		}

		public function consulta($sql){
			$resultado = $this->conexion->query($sql);
			return $resultado;
		}

		public function ejecutar($sql){
			$this->conexion->query($sql);
		}

		public function close(){
			$this->conexion->close(); 
		}
	}

?>