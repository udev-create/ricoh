<?php 
	session_start();
	$_SESSION["id"] = array();
	$_SESSION["nombre"] = array();
	$_SESSION["correo"] = array();
	session_destroy();
	$url="../index.html";
	header("Location:". $url);
?>