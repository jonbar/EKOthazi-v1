//**parte de inicio de sesion**/
function enviar() {

	if (validarEmail() && comprobarArroba()) {
		return true;
	} else {
		return false;
	}
}
function validarEmail() {
	var email = document.encuesta.correo.value;
	if (/\w+@\w+.\w+/.test(email)) {
		// alert("La dirección de email " + email + " es correcta.");
		return true;
	} else {
		alert("La dirección de email es incorrecta.");
		return false;
	}
}


function Enviar() {

    if (Correo() && Clave()){
        return true;
    }else {
        return false;
    }
}

function Clave(){
    var clav1=document.getElementById('clave1');
    var clav2=document.getElementById('clave2');

    if ((clav1.value=="")||(clav1.value!=clav2.value)){
        alert('Claves incorrectas');
        return false;
    }else {
        return true;
    }
}

function Correo() {
      var miCorreo=document.encuesta.correo.value;
      if (/\w+@\w+.\w+/.test(miCorreo)){
           return true;
      } else {
       alert("La dirección de email es incorrecta.");
       return false;
     }
}
function teclaCP(e){
	var keychar;
	var teclanum;
	var codigoPostal = document.getElementById('codPostal').value;
	var longitud = codigoPostal.length;
	
	if(longitud => 5){
		return false;
	}
	
	teclanum = e.which;
	keychar = String.fromCharCode(teclanum);
	
	if (keychar < '0' || keychar > '9'){
		return false;
	}else{
		return true;
	}
}
function comprobarArroba(e) {
    var caracterTecla;
    var codigoTecla;

    if (window.event){ //IE8 and earlier
        codigoTecla = e.keyCode;
    }else if (e.which){ // IE9/Firefox/Chrome/Opera/Safari
        codigoTecla = e.which;
        }
    
    caracterTecla = String.fromCharCode(codigoTecla);

    if (caracterTecla == "@") {              //Solo una @
        if (document.encuesta.correo.value.indexOf('@') >= 0) {
            return false;
        }else{
        	return true;
        }
    } 
 }
function alerta(){
	alert('hola');
}
function colorNocturno(){
	alert('dfsd');
	var fichas = document.getElementsByName('ficha');
	var color = 'black';
	for (var i = 0; i < fichas.length; i++){
		f[i].style.background-color = color;
	}
}