<?php 
	require_once('../models/cliente_model.php');

	if ($_POST["nombre"]=="admin" && $_POST["correo"]=="admin@gmail.com") {
		session_start();
		$_SESSION["nombre"]="admin";
		$_SESSION["correo"]="admin@gmail.com";
		$url="../../index.html";
		header("Location:". $url);
	}else{
		$datos = new clienteModel();
		$usuarios=null;
		$usuarios=$datos->search($_POST["correo"]);

		if ($usuarios!=null) {
			session_start();
			foreach ($usuarios as $usuario) {
				if ($usuario["nombre"]==$_POST["nombre"] && $usuario["correo"]==$_POST["correo"]){
					$_SESSION["id"]=$usuario["id"];
					$_SESSION["nombre"]=$_POST["nombre"];
					$_SESSION["correo"]=$_POST["correo"];
					$url="../../index.html";
					header("Location:". $url);
				}
			}
		}else{
			$url="iniciarSesion.php";
			header("Location:". $url);
		}
	}

?>