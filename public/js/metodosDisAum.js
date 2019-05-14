


function aumentarContador(estilo,litros,precio){

//-------------------contador precio------------------------
		$('#id_contador').val();
		var suma = parseInt($('#id_contador').val()) + parseInt(precio);
		$('#id_contador').val(suma);

//-------------------contador litros------------------------

		$('#id_contador_litros').val();
		var suma_litros = parseInt($('#id_contador_litros').val()) + parseInt(litros);
		$('#id_contador_litros').val(suma_litros);

//-------------------contador individual--------------------
		switch(estilo){
			case 'IPA':
				var suma_id_individual = parseInt($('#id_contador1').val()) + 1;
				$('#id_contador1').val(suma_id_individual);
			break;
			case 'Belgian Dubbel':
				var suma_id_individual = parseInt($('#id_contador2').val()) + 1;
				$('#id_contador2').val(suma_id_individual);
			break;
			case 'Irish Red Ale':
				var suma_id_individual = parseInt($('#id_contador3').val()) + 1;
				$('#id_contador3').val(suma_id_individual);
			break;
			case 'Cream Stout':
				var suma_id_individual = parseInt($('#id_contador4').val()) + 1;
				$('#id_contador4').val(suma_id_individual);
			break;
			case 'IPA Cuyana':
				var suma_id_individual = parseInt($('#id_contador5').val()) + 1;
				$('#id_contador5').val(suma_id_individual);
			break;
			case 'IPA Diablo':
				var suma_id_individual = parseInt($('#id_contador6').val()) + 1;
				$('#id_contador6').val(suma_id_individual);
			break;
			case 'Porter':
				var suma_id_individual = parseInt($('#id_contador7').val()) + 1;
				$('#id_contador7').val(suma_id_individual);
			break;
			case 'Wee Heavy':
				var suma_id_individual = parseInt($('#id_contador8').val()) + 1;
				$('#id_contador8').val(suma_id_individual);
			break;
		}
}

function disminuirContador(estilo,litros,precio){

//-------------------contador precio------------------------
	if ($('#id_contador').val() > 0) {
		$('#id_contador').val();
		var resta = parseInt($('#id_contador').val()) - parseInt(precio);
		$('#id_contador').val(resta);

//-------------------contador litros------------------------

		$('#id_contador_litros').val();
		var resta_litros = parseInt($('#id_contador_litros').val()) - parseInt(litros);
		$('#id_contador_litros').val(resta_litros);

//-------------------contador individual--------------------
		switch(estilo){
			case 'IPA':
				var suma_id_individual = parseInt($('#id_contador1').val()) - 1;
				$('#id_contador1').val(suma_id_individual);
			break;
			case 'Belgian Dubbel':
				var suma_id_individual = parseInt($('#id_contador2').val()) - 1;
				$('#id_contador2').val(suma_id_individual);
			break;
			case 'Irish Red Ale':
				var suma_id_individual = parseInt($('#id_contador3').val()) - 1;
				$('#id_contador3').val(suma_id_individual);
			break;
			case 'Cream Stout':
				var suma_id_individual = parseInt($('#id_contador4').val()) - 1;
				$('#id_contador4').val(suma_id_individual);
			break;
			case 'IPA Cuyana':
				var suma_id_individual = parseInt($('#id_contador5').val()) - 1;
				$('#id_contador5').val(suma_id_individual);
			break;
			case 'IPA Diablo':
				var suma_id_individual = parseInt($('#id_contador6').val()) - 1;
				$('#id_contador6').val(suma_id_individual);
			break;
			case 'Porter':
				var suma_id_individual = parseInt($('#id_contador7').val()) - 1;
				$('#id_contador7').val(suma_id_individual);
			break;
			case 'Wee Heavy':
				var suma_id_individual = parseInt($('#id_contador8').val()) - 1;
				$('#id_contador8').val(suma_id_individual);
			break;
		}
	}
}


function mostrarEstilos(){

	var arrayEstilos = []; //estilos enviados a bbdd
	
	$('#id_contador1').val();
	for (var i = 0; i < parseInt($('#id_contador1').val()); i++) {
		arrayEstilos.push('IPA');
	}
	$('#id_contador2').val();
	for (var i = 0; i < parseInt($('#id_contador2').val()); i++) {
		arrayEstilos.push('Belgian Dubbel');
	}
	$('#id_contador3').val();
	for (var i = 0; i < parseInt($('#id_contador3').val()); i++) {
		arrayEstilos.push('Irish Red Ale');
	}
	$('#id_contador4').val();
	for (var i = 0; i < parseInt($('#id_contador4').val()); i++) {
		arrayEstilos.push('Cream Stout');
	}
	$('#id_contador5').val();
	for (var i = 0; i < parseInt($('#id_contador5').val()); i++) {
		arrayEstilos.push('IPA Cuyana');
	}
	$('#id_contador6').val();
	for (var i = 0; i < parseInt($('#id_contador6').val()); i++) {
		arrayEstilos.push('IPA Diablo');
	}
	$('#id_contador7').val();
	for (var i = 0; i < parseInt($('#id_contador7').val()); i++) {
		arrayEstilos.push('Porter');
	}
	$('#id_contador8').val();
	for (var i = 0; i < parseInt($('#id_contador8').val()); i++) {
		arrayEstilos.push('Wee Heavy');
	}

	$('#id_estilos').val(arrayEstilos);
}

function imprimirUltimoPedido(nombreTag){

	var contenido= document.getElementById(nombreTag).innerHTML;

	var contenidoOriginal= document.body.innerHTML;

	document.body.innerHTML = contenido;

	window.print();

	document.body.innerHTML = contenidoOriginal;
}