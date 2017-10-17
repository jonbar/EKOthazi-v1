function colorNocturno(){
		var body = document.getElementById('body');
		var fichas = document.getElementsByName('ficha');
		var divBotones =  document.getElementById('divBotones');
		var divBotonAdmin =  document.getElementById('divBotonAdmin');
		var divBotonUser =  document.getElementById('divBotonUser');
		for (var i = 0; i < fichas.length; i++){
			fichas[i].style.backgroundColor = 'black';
			fichas[i].style.color = 'white';
		}
		body.style.backgroundColor = 'gray';
		divBotones.style.backgroundColor = 'gray';
		divBotonAdmin.style.backgroundColor = 'gray';
		divBotonUser.style.backgroundColor = 'gray';
		
		
	}
function colorNormal(){
	var body = document.getElementById('body');
	var fichasNormal = document.getElementsByName('ficha');
	var divBotones =  document.getElementById('divBotones');
	var divBotonAdmin =  document.getElementById('divBotonAdmin');
	var divBotonUser =  document.getElementById('divBotonUser');
	
	body.style.backgroundColor = 'white';
	divBotones.style.backgroundColor = 'white';
	divBotonAdmin.style.backgroundColor = 'white';
	divBotonUser.style.backgroundColor = 'white';
	
	for (var j = 0; j < fichasNormal.length; j++){
		fichasNormal[i].style.backgroundColor = 'white';
		fichasNormal[i].style.color = 'black';
	}
}