function validacion(){
    var nombre, correo, telefono, telefonoi, producto, cotizacion;
    nombre = document.getElementById("nombre").value;
	correo = document.getElementById("correo").value;
	telefono = document.getElementById("telefono").value;
	telefonoi =parseInt(telefono);
	producto = document.getElementById("producto").value;
	cotizacion = document.getElementById("cotizacion").value;
    
    
	if (nombre=="" || correo=="" || telefono=="" || producto==""||cotizacion=="") {
		alert("Favor de llenar todos los campos");
		return false;
	}if (nombre.length>45) {
		alert("El campo nombre sobre pasa el limite de caracteres");
		return false;
	}if (correo.length>45) {
		alert("El campo correo sobre pasa el limite de caracteres");
		return false;
	}if (isNaN(telefonoi)) {
		alert("El campo telefono no es un numero");
		return false;
	}if (telefono.length!=10) {
		alert("El campo telefono debe tener 10 digitos");
		return false;
	}if (producto.length>45) {
		alert("El campo producto sobre pasa el limite de caracteres");
		return false;
	}if (cotizacion.length>45) {
		alert("El campo cotizacion sobre pasa el limite de caracteres");
		return false;
	}
}