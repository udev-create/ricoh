<?php 

	session_start();

	require_once('orden_model.php');
	$orden = new ordenModel();

	$datos['correo']=$_POST['correo'];
	$datos['producto']=$_POST['producto'];
	$datos['acquisition']=$_POST['acquisition'];
	$datos['cantidad']=$_POST['cantidad'];
	$datos['precio']=$_POST['precio'];
	$datos['total']=$datos['precio']*$datos['cantidad'];

	$ban1=false;
	$ban2=false;
		
	$ordenes=$orden->buscarCliente($datos['correo']);

	foreach ($ordenes as $ordene) {
		if ($ordene["correo"]==$datos['correo']){
			$datos['correo']=$ordene["id_cliente"];
			$ban1=true;
			break;
		}
	}

	$ordenes=$orden->buscarProducto($datos['producto']);

	foreach ($ordenes as $ordene) {
		if ($ordene["nombre"]==$datos['producto']){
			$datos['producto']=$ordene["id_producto"];
			$ban2=true;
			break;
		}
	}

	if($ban1){
		if ($ban2) {
			$orden->insert($datos);
			$url="../index.html";
			header("Location:". $url);
		}else{
			echo '<script>alert("Producto no encontrado en la Base de Datos");</script>';
		}
	}else{
		echo '<script>alert("Correo no encontrado en la Base de Datos");</script>';
	}
	/*$url="../view/registroOrden.html";
	header("Location:". $url);*/
		
	$orden->close();

?>