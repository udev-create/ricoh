<?php 

require('conection.php');

class clienteModel extends clsDatos{
	
	function __construct(){
		parent::__construct();
	}

	public function search($correo){
		$sql= "SELECT * FROM clientes WHERE correo='".$correo."'";
		$query=$this->query($sql);
		return $query;
	}

	public function insert($datos){
		$nombre=$datos['nombre'];
		$direccion=$datos['direccion'];
		$correo=$datos['correo'];
		$telefono=$datos['telefono'];

		$sql="INSERT INTO clientes (nombre, direccion, correo, telefono) VALUES ('". $nombre ."','". $direccion ."','". $correo ."',". $telefono . ")";

		$transaccion=$this->run($sql);
		return $transaccion;
	}

}

?>