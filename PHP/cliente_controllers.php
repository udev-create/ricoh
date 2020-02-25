<?php 

	session_start();

	require_once('cliente_model.php');
	$cliente = new clienteModel();

		$datos['nombre']=$_POST['nombre'];
		$datos['direccion']=$_POST['direccion'];
		$datos['correo']=$_POST['correo'];
		$datos['telefono']=$_POST['telefono'];

		$cliente->insert($datos);
		
	$cliente->close();

	$_SESSION["transaction"]="Su operacion fue creado exitosamente";
	$url="../index.html";
	header("Location:". $url);
?>