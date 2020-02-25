<?php
  $mensaje="Mensaje de Contacto";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['correo'];
  $mensaje="\nTeléfono".$_POST['telefono'];
  $mensaje.= "\nProducto: ". $_POST['producto'];
  $mensaje.= "\nMensaje: \n".$_POST['cotizacion'];
  $destino= "numecopiadoras@prodigy.net.mx";
  $remitente = $_POST['correo'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  @mail($destino,$asunto,$mensaje,"FROM: $remitente");
  echo " <h2>   </h2>";
  echo "<script type=\"text/javascript\">
   var delay= 10000;
   setTimeout( alert(\"www.ricohzonanorte.com\"), delay);
   	history.go(-2);
   
   </script>"; 
   
?>           

    
    
    
