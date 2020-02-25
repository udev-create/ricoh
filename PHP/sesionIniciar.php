<?php 
	session_start();
	if (isset($_SESSION["correo"])) {
		$url="../cerrarSesion.php";
		header("Location:". $url);
	}
?>