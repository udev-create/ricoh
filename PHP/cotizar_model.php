<?php 

require('conection.php');

class cotizarModel extends clsDatos{
	
	function __construct(){
		parent::__construct();
	}

	public function insert($datos){
		$nombre=$datos['nombre'];
		$correo=$datos['correo'];
		$telefono=$datos['telefono'];
		$producto=$datos['producto'];
		$cotizacion=$datos['cotizacion'];

		$sql="INSERT INTO cotizaciones () VALUES ('". $nombre ."',". $telefono . ")";

		$transaccion=$this->run($sql);
		return $transaccion;
	}

	public function buscarCliente($correo){
		$sql= "SELECT * FROM clientes";
		$query=$this->query($sql);a
		return $query;		
	}

	public function buscarProducto($nombre){
		$sql= "SELECT * FROM productos";
		$query=$this->query($sql);
		return $query;		
	}


}

?>