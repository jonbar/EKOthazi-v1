function colorNocturno(){
	alert('Entra');
		var fichas = document.getElementsByName('ficha');
		var color = 'black';

		for (var i = 0; i < fichas.length; i++){
			fichas[i].style.backgroundColor = color;
			fichas[i].style.color = 'white';
		}
	}