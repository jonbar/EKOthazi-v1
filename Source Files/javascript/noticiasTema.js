function colorNocturno(){
		var body = document.getElementById('body');
		var fichas = document.getElementsByName('ficha');
		var divBotones =  document.getElementById('divBotones');

		for (var i = 0; i < fichas.length; i++){
			body.style.backgroundColor = 'gray';
			divBotones.style.backgroundColor = 'gray';
			fichas[i].style.backgroundColor = 'black';
			fichas[i].style.color = 'white';
		}
	}
function colorNormal(){
	var body = document.getElementById('body');
	var fichas = document.getElementsByName('ficha');
	var divBotones =  document.getElementById('divBotones');
	
	for (var i = 0; i < fichas.length; i++){
		body.style.backgroundColor = 'white';
		divBotones.style.backgroundColor = 'white';
		fichas[i].style.backgroundColor = 'white';
		fichas[i].style.color = 'black';
	}
}