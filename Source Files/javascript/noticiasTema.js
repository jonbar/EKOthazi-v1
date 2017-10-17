function colorNocturno(){
	alert('Entra');
		var body = document.getElementById('body');
		var fichas = document.getElementsByName('ficha');
		var color = 'black';

		for (var i = 0; i < fichas.length; i++){
			body.style.backgroundColor = 'gray';
			fichas[i].style.backgroundColor = color;
			fichas[i].style.color = 'white';
		}
	}