function colorNocturno(){
		var body = document.getElementById('body');
		var fichas = document.getElementsByName('ficha');
		var divBotones =  document.getElementById('divBotones');
		var divBotonAdmin =  document.getElementById('divBotonAdmin');
		var divBotonUser =  document.getElementById('divBotonUser');

		body.style.backgroundColor = 'gray';
		divBotones.style.backgroundColor = 'gray';
		divBotonAdmin.style.backgroundColor = 'gray';
		divBotonUser.style.backgroundColor = 'gray';
		
		for (var i = 0; i < fichas.length; i++){
			fichas[i].style.backgroundColor = 'black';
			fichas[i].style.color = 'white';
		}
	}
function colorNormal(){
	var body = document.getElementById('body');
	var fichas = document.getElementsByName('ficha');
	var divBotones =  document.getElementById('divBotones');
	var divBotonAdmin =  document.getElementById('divBotonAdmin');
	var divBotonUser =  document.getElementById('divBotonUser');
	
	body.style.backgroundColor = 'white';
	divBotones.style.backgroundColor = 'white';
	divBotonAdmin.style.backgroundColor = 'white';
	divBotonUser.style.backgroundColor = 'white';
	
	for (var j = 0; j < fichas.length; j++){
		fichas[i].style.backgroundColor = 'white';
		fichas[i].style.color = 'black';
	}
}