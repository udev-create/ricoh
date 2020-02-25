<?php 

require('conection.php');

class productoModel extends clsDatos{
	
	function __construct(){
		parent::__construct();
	}
	public function all(){
		$sql= "SELECT id, nombre, categoria, lugaryfecha, img, descripcion, idu FROM clientes ORDER BY id DESC";
		$query=$this->query($sql);
		return $query;
	}

	public function search($nombre){
		$sql= "SELECT * FROM clientes WHERE nombre=$nombre";
		$query=$this->query($sql);
		return $query;
	}

	public function insert($datos){
		$nombre=$datos['nombre'];
		$modelo=$datos['modelo'];
		$cantidad=$datos['cantidad'];
		$precio=$datos['precio'];
		$promocion=$datos['promocion'];

		$sql="INSERT INTO productos (nombre, modelo, cantidad, precio, id_promocion) VALUES ('". $nombre ."','". $modelo ."',". $cantidad .",". $precio .",". $promocion .")";

		$transaccion=$this->run($sql);
		return $transaccion;
	}
	
	public function update($datos, $id){
		$nombre=$datos['nombre'];
		$categoria=$datos['categoria'];
		$lugaryfecha=$datos['lugaryfecha'];
		$descripcion=$datos['descripcion'];
		$img=$datos['img'];


		$sql='UPDATE clientes SET nombre = "'. utf8_decode($nombre) .'", categoria = "'. utf8_decode($categoria) .'", lugaryfecha = "'. utf8_decode($lugaryfecha) .'", img = "'. utf8_decode($img) .'", descripcion = "'. utf8_decode($descripcion) .'" WHERE eventos.id ='. $id;

		$transaccion=$this->run($sql);
		return $transaccion;
	}

	public function delete($id){
		$sql= 'DELETE FROM eventos WHERE id ='.$id;
		$transaccion=$this->run($sql);
		return $transaccion;
	}

}

?>