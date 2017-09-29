/**
 * 
 */
<script>
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

    function validarPassword() {
        var clave1 = document.getElementById('clave1');
        var clave2 = document.getElementById('clave2');

        if ((clave1.value == "") || (clave1.value != clave2.value)) {
            alert('Las claves no coinciden');
            return false;
        } else {
            return true;
        }
    }

    function enviar() {

        if (validarEmail() && validarPassword()) {
            return true;
        } else {
            return false;
        }
    }

    function teclaPulsada(e) {
        var keychar;
        var teclanum;

        teclanum = e.which;
        keychar = String.fromCharCode(teclanum);

        //alert("teclanum en codigo ASCII"+teclanum);
        //alert("tecla que se pulsa"+keychar);

        if (keychar < "0" || keychar > "9") {
            return false;
        } else {
            return true;
        }
    }
    function comprobarArroba(e) {
    var caracterTecla;
    var codigoTecla;
    
        codigoTecla = e.which;
   
        caracterTecla = String.fromCharCode(codigoTecla);
    if (caracterTecla == "@"){
        if(document.encuesta.correo.value.indexOf('@')>= 0){
            return false;
        }else{
            return true;
        }
    }
}

</script>