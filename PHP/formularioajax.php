<html>
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <link rel="stylesheet" type="text/css" href="../css/style_formulario.css"> 
    </head>
    <body>
        	<section id="openmodal" class="modalDialog">
	<section class="modal">    
<a href="#" onclick="borrar();" class="close" id="closed"> X </a>   

<?php

echo '
    <form action="../PHP/formulario.php" method="POST" id="myForm" >
    <div class="lights" id="light">    
      <img src="../imagenes_form/gracias.png">
    </div>
    <h1 class="myForm_title">COTIZACIÓN</h1>
    <label>Nombre:&nbsp;&nbsp;</label><input size="60" type="text" name="nombre"><br><br>
    <label>*Correo:&nbsp;&nbsp;&nbsp;</label><input size="60" type="text" name="correo"><br><br>           
    <label>Teléfono:&nbsp;&nbsp;</label><input size="60" type="text" name="telefono"><br><br>
    <label>Producto:&nbsp;</label><input size="60" id="nombre_producto" type="text" name="producto"><br><br>
    <label>Cotización:&nbsp;&nbsp;</label><textarea name="cotizacion" id="producto" ></textarea><br><br>
    <input type="submit" onclick="crear();" value="COTIZAR" class="boton_cotizar">
        </form> 
      '; 

 		
?>
        </section></section>
             </body>
</html>