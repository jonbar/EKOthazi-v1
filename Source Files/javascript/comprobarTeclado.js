/**
 * 
 */
// controlar teclado
function teclaPulsada(e) {
	var keychar;
	var teclanum;

	teclanum = e.which;
	keychar = String.fromCharCode(teclanum);

	// caracter pulsado
	if (keychar < "0" || keychar > "9") {
		return false;
	} else {
		return true;
	}
}
