<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>RICOH Zona Norte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="imagenes_inicio/logo_ricoh.png" rel="shortcut icon" type="image/png" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" />
	<link href="css/inicio_style.css" rel="stylesheet" type="text/css" />
	<link href="css/contacto.css" rel="stylesheet" type="text/css" />
	<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />-->
	<style type="text/css">body{
            background-image:url("imagenes_inicio/fondo.jpg");
        background-repeat:no-repeat;
	background-position:center center;
	background-attachment:fixed;
	-o-background-size: 100% 100%, auto;
	-moz-background-size: 100% 100%, auto;
	-webkit-background-size: 100% 100%, auto;
	background-size: 100% 100%, auto;
        }
	</style>
	<!-- Facebook Pixel Code --><script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '987663391320747');
fbq('track', 'PageView');
</script><noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=987663391320747&ev=PageView&noscript=1"
/></noscript><!-- DO NOT MODIFY --><!-- End Facebook Pixel Code -->
<script src="js/validarProducto.js"></script>
</head>
<body>
   

<script type="text/javascript">
var google_tag_params = {
ecomm_prodid: 'REPLACE_WITH_VALUE',
ecomm_pagetype: 'REPLACE_WITH_VALUE',
ecomm_totalvalue: 'REPLACE_WITH_VALUE',
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 876815081;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/876815081/?guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84713250-1', 'auto');
  ga('send', 'pageview');

</script>
<header id="encabezado"><img id="img_completa" src="imagenes_inicio/titulo_multi.png" /></header>

<nav>
	<ul>
	   <li> </li>
	   <li> </li>
	   <li> </li>
	    <li> </li>
	   <li> </li>
		<li><a href="index.html">INICIO    </a></li>
		<li><a href="Refacciones.html">REFACCIONES   </a></li>
		<li><a href="Multifuncionales.html">MULTIFUNCIONALES   </a></li>
		<li><a href="Consumibles.html">CONSUMIBLES   </a></li>
		<li><a href="Promociones.html">PROMOCIONES   </a></li>
		<li><a href="Articulo.html">ART&Iacute;CULOS   </a></li>
		<li><a href="Contacto.html">CONT&Aacute;CTOS   </a></li>
		<li><a href="registroCliente.php">CLIENTES    </a></li>
		<li><a href="registroProducto.php">PRODUCTOS   </a></li>
		<li><a href="registroOrden.php">ORDENES    </a></li>
		<li><a href="iniciarSesion.php">INICIAR SESI&Oacute;N   </a></li>
	</ul>
<!--  Div <ul><img src="imagenes_inicio/barra de busqueda.png" > </ul> -->
</nav>

<div id="logo_facebook"><a href="https://www.facebook.com/RicohZonaNorte/"><img src="imagenes_inicio/icono FB.png" title="Visita nuestra pagina de Facebook" /></a></div>




<div class="submenu" align='center'>
    <ul>
        <li>
		<br />
		<br />
		<form action="PHP/producto_controllers.php" class="myForm" method="POST" onsubmit="return validacion();">
		<br />
        <h1>REGISTRO DE PRODUCTO</h1>
        <br />
		<table id="formulario">
			<tbody>
				<tr>
					<td><label>Nombre:</label></td>
					<td><input name="nombre" id="nombre" type="text" placeholder="Nombre"></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><label>Modelo:</label></td>
					<td><input name="modelo" id="modelo" type="text" placeholder="Modelo"></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><label>Cantidad:</label></td>
					<td><input name="cantidad" id="cantidad" type="text" placeholder="Cantidad"></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><label>Precio:</label></td>
					<td><input name="precio" id="precio" type="text" placeholder="Precio"></td>							
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><label>Promoci&oacute;n:</label></td>
					<td>
						<select class="form-control" name="promocion" id="promocion">
							<option value="ninguno">Ninguno</option>
							<option value="descuento">Descuento</option>
							<option value="cupones">Cupones</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</tbody>
		</table>
		<br />
		<?php 
			if (isset($_SESSION["correo"]) && $_SESSION["correo"]=="admin@gmail.com") {
				echo '<input onclick="crear();" type="submit" value="COTIZAR" />';
			}else{
                echo'<script>alert("Solo el administrador puede realizar esta operacion");</script>';
				echo '<input onclick="crear();" disabled="true" type="submit" value="COTIZAR" />';
			}
		?>
		
		<br />
		<br />
		</form>
		</li>
	</ul>
	</div>




<div class="sub_menu">
<ul>
	<li><a href="Promociones.html"><img src="imagenes_contacto/promocion_contacto.png" title="PromociÃ³n" /></a></li>
	<li><a href="Multifuncionales.html"><img src="imagenes_contacto/banner_copiadoras.png" title="Impresoras y multifuncionales" /></a></li>
</ul>
</div>

<p><img id="img_completa" src="imagenes_inicio/barra abajo contacto.jpg" /></p>
</body>
</html>