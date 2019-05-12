


function aumentarContador(estilo,litros,precio){

		$('#id_contador').val();
		var suma = parseInt($('#id_contador').val()) + parseInt(precio);
		$('#id_contador').val(suma);
}

function disminuirContador(estilo,litros,precio){

	if ($('#id_contador').val() > 0) {
		$('#id_contador').val();
		var suma = parseInt($('#id_contador').val()) - parseInt(precio);
		$('#id_contador').val(suma);
	}
}


function mostrarEstilos(){


}