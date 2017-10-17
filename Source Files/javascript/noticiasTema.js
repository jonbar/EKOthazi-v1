function colorNocturno(){
		var body = document.getElementById('body');
		var fichas = document.getElementsByName('ficha');
		var divBotones =  document.getElementById('divBotones');
		var divBotonAdmin =  document.getElementById('divBotonAdmin');
		var divBotonUser =  document.getElementById('divBotonUser');

		for (var i = 0; i < fichas.length; i++){
			fichas[i].style.backgroundColor = 'black';
			body.style.backgroundColor = 'gray';
			divBotones.style.backgroundColor = 'gray';
			divBotonAdmin.style.backgroundColor = 'gray';
			divBotonUser.style.backgroundColor = 'gray';
			
			fichas[i].style.color = 'white';
		}
	}
function colorNormal(){
	var body = document.getElementById('body');
	var fichas = document.getElementsByName('ficha');
	var divBotones =  document.getElementById('divBotones');
	var divBotonAdmin =  document.getElementById('divBotonAdmin');
	var divBotonUser =  document.getElementById('divBotonUser');
	
	for (var i = 0; i < fichas.length; i++){
		body.style.backgroundColor = 'white';
		divBotones.style.backgroundColor = 'white';
		divBotonAdmin.style.backgroundColor = 'white';
		divBotonUser.style.backgroundColor = 'white';
		fichas[i].style.backgroundColor = 'white';
		fichas[i].style.color = 'black';
	}
}