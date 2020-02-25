<?php 

	session_start();

	require_once('../models/cotizar_model.php');
	$cotizar = new cotizarModel();

	$datos['nombre']=$_POST['nombre'];
	$datos['correo']=$_POST['correo'];
	$datos['telefono']=$_POST['telefono'];
	$datos['producto']=$_POST['producto'];
	$datos['cotizacion']=$_POST['cotizacion'];

	$ban1=false;
	$ban2=false;

	$var=$correo->buscarCliente($datos['correo']);

	foreach ($vr as $v) {
		if ($v["correo"]==$datos['correo']){
			$datos['correo']=$v["id_cliente"];
			$ban1=true;
			break;
		}
	}

	$var=$cotizacion->buscarProducto($datos['cotizacion']);

	foreach ($var as $v) {
		if ($v["nombre"]==$datos['cotizacion']){
			$datos['cotizacion']=$v["id_producto"];
			$ban2=true;
			break;
		}
	}

	if($ban1){
		if ($ban2) {
			$cotizar->insert($datos);
			$url="../index.html";
			header("Location:". $url);
		}else{
			echo '<script>alert("Producto no encontrado en la Base de Datos");</script>';
		}
	}else{
		echo '<script>alert("Correo no encontrado en la Base de Datos");</script>';
	}
		
	$cotizar->close();
?>