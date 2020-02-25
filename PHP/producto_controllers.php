<?php 

	session_start();

	require_once('producto_model.php');
	$producto = new productoModel();

	if($_POST['promocion']=="descuento"){
		$promocion=2;
	}elseif($_POST['promocion']=="cupones"){
		$promocion=3;
	}else{
		$promocion=1;
	}

	$datos['nombre']=$_POST['nombre'];
	$datos['modelo']=$_POST['modelo'];
	$datos['cantidad']=$_POST['cantidad'];
	$datos['precio']=$_POST['precio'];
	$datos['promocion']=$promocion;

	$producto->insert($datos);

	$producto->close();

	$_SESSION["transaction"]="Su operacion fue creado exitosamente";
	$url="../index.html";
	header("Location:". $url);
?>