/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*aqui comprobamos el arroba del inicio de sesion*/
function comprobarArroba(e) {
	var caracterTecla;
	var codigoTecla;

	codigoTecla = e.which;

	caracterTecla = String.fromCharCode(codigoTecla);
	if (caracterTecla == "@") {
		if (document.encuesta.correo.value.indexOf('@') >= 0) {
			return false;
		} else {
			return true;
		}
	}
}
