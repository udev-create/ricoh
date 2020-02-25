function validacion () {
    var nombre, correo, telefono, telefonoi;
    nombre = document.getElementById("nombre").value;
	correo = document.getElementById("correo").value;
	telefono = document.getElementById("telefono").value;
	telefonoi =parseInt(telefono);
    
    
	if (nombre=="" || correo=="" || telefono=="") {
		alert("Favor de llenar todos los campos");
		return false;
	}else{                       
       document.getElementById('light').style.display='block';
    }
    if (nombre.length>45) {
		alert("El campo nombre sobre pasa el limite de caracteres");
		return false;
	} if (correo.length>45) {
		alert("El campo correo sobre pasa el limite de caracteres");
		return false;
	}if (isNaN(telefonoi)) {
		alert("El campo telefono no es un numero");
		return false;
	}if (telefono.length!=10) {
		alert("El campo telefono debe tener 10 digitos");
		return false;
	}
   
}