<!DOCTYPE html>
<html>
<head>
	<title>Sesion</title>
	<link rel="stylesheet" href="../controllers/css/bootstrap.min.css">
	<link rel="stylesheet" href="../controllers/css/estilos.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="../controllers/imagenes_inicio/logo_ricoh.png" rel="shortcut icon" type="image/png" />
	<link href="imagenes_inicio/logo_ricoh.png" rel="shortcut icon" type="image/png" />
	<link href="../controllers/css/slider.css" rel="stylesheet" type="text/css" />
	<link href="../controllers/css/inicio_style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">body{
		    background-image:url("../img/imagenes_inicio/fondo.jpg");
		    background-repeat:no-repeat;
			background-position:center center;
			background-attachment:fixed;
			-o-background-size: 100% 100%, auto;
			-moz-background-size: 100% 100%, auto;
			-webkit-background-size: 100% 100%, auto;
			background-size: 100% 100%, auto;
    	}	
	</style>
<script src="../controllers/js/validarSesion.js"></script>
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
		</ul>
	</nav>
<br>
<br>
<br>
<div align="center">
	<h1>CERRAR SESION</h1>
</div>
<br>
<br>
<br>
	<section class="main container">
		<div class="container">
		<form action="partials/sesionCerrar.php" class="myForm" method="POST" onsubmit="return validacion();">
				<div class="row">
					<div class="col-xs-4"></div>
					<div class="col-xs-4">
						<div class="form-group" align="center">
							<button type="submit" class="btn btn-primary">Cerrar</button>
						</div>
					</div>
					<div class="col-xs-4"></div>
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