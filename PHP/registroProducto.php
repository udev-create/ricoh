<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Producto</title>
	<link rel="stylesheet" href="../controllers/css/bootstrap.min.css">
	<link rel="stylesheet" href="../controllers/css/estilos.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="../controllers/imagenes_inicio/logo_ricoh.png" rel="shortcut icon" type="image/png" />
	<link href="imagenes_inicio/logo_ricoh.png" rel="shortcut icon" type="image/png" />
	<link href="../controllers/css/slider.css" rel="stylesheet" type="text/css" />
	<link href="../controllers/css/inicio_style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">body{
		    background-image: url("../img/imagenes_inicio/fondo.jpg");
		    background-repeat:no-repeat;
			background-position:center center;
			background-attachment:fixed;
			-o-background-size: 100% 100%, auto;
			-moz-background-size: 100% 100%, auto;
			-webkit-background-size: 100% 100%, auto;
			background-size: 100% 100%, auto;
    	}	
	</style>
<script src="../controllers/js/validarProducto.js"></script>
</head>
<body>

	<script src="../controllers/js/jquery.js"></script>
	<script src="../controllers/js/bootstrap.min.js"></script>

	<header id="encabezado">
		<img id="img_completa" src="../img/imagenes_inicio/titulo_multi.png" />
	</header>

	<nav>
		<ul>
			<li><a href="../../index.html">INICIO</a></li>
			<li>|</li>
			<li><a href="Refacciones.html">REFACCIONES</a></li>
			<li>|</li>
			<li><a href="Multifuncionales.html">MULTIFUNCIONALES</a></li>
			<li>|</li>
			<li><a href="Consumibles.html">CONSUMIBLES</a></li>
			<li>|</li>
			<li><a href="Promociones.html">PROMOCIONES</a></li>
			<li>|</li>
			<li><a href="Articulo.html">ART&Iacute;CULOS</a></li>
			<li>|</li>
			<li><a href="Contacto.html">CONT&Aacute;CTOS</a></li>
			<li>|</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					REGISTROS <span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="registroCliente.php">CLIENTES</a></li>
					<li><a href="registroProducto.php">PRODUCTOS</a></li>
					<li><a href="registroOrden.php">ORDENES</a></li>
				</ul>
			</li>
			<li><a href="iniciarSesion.php">INICIAR SESI&Oacute;N</a></li>
		</ul>
	</nav>
<br>
<br>
<br>
<div align="center">
	<h1>PRODUCTO</h1>
</div>
<br>
<br>
<br>
	<section class="main container">
		<div class="container">
			<form action="../controllers/producto_controllers.php" class="myForm" method="POST" onsubmit="return validacion();">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							<input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="modelo">Modelo:</label>
							<input class="form-control" name="modelo" id="modelo" type="text" placeholder="Modelo">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="cantidad">Cantidad:</label>
							<input class="form-control" name="cantidad" id="cantidad" type="text" placeholder="Cantidad">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="precio">Precio:</label>
							<input class="form-control" name="precio" id="precio" type="text" placeholder="Precio">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="promocion" class="control-label">Promoción:</label>
							<select class="form-control" name="promocion" id="promocion">
								<option value="ninguno">Ninguno</option>
								<option value="descuento">Descuento</option>
								<option value="cupones">Cupones</option>
							</select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group" align="right">
							<?php 
								if (isset($_SESSION["correo"]) && $_SESSION["correo"]=="admin@gmail.com") {
									echo '<button type="submit" class="btn btn-primary">Agregar</button>';
								}else{
									echo '<button type="submit" class="btn btn-primary" disabled="true">Agregar</button>';
								}
							?>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

	<div id="logo_facebook">
		<a href="https://www.facebook.com/RicohZonaNorte/">
			<img src="../img/imagenes_inicio/icono FB.png" title="Visita nuestra página de Facebook" />
		</a>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>

<p><img id="img_completa" src="../img/imagenes_inicio/barra abajo contacto.jpg" /></p>

</body>
</html>