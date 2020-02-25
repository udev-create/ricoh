<?php 

require('conection.php');

class ordenModel extends clsDatos{
	
	function __construct(){
		parent::__construct();
	}

	public function insert($datos){
		
		$correo=$datos['correo'];
		$producto=$datos['producto'];
		$acquisition=$datos['acquisition'];
		$cantidad=$datos['cantidad'];
		$precio=$datos['precio'];
		$total=$datos['total'];

		$sql="INSERT INTO orden_compra (id_cliente, id_producto, fecha_adquirido, cantidad, precio_unitario, total) VALUES (". $correo .",". $producto .",'". $acquisition ."',". $cantidad . ",". $precio . ",". $total . ")";

		$transaccion=$this->run($sql);
		return $transaccion;
	}

	public function buscarCliente($correo){
		$sql= "SELECT * FROM clientes";
		$query=$this->query($sql);
		return $query;		
	}

	public function buscarProducto($nombre){
		$sql= "SELECT * FROM productos";
		$query=$this->query($sql);
		return $query;		
	}

}

?>