$(document).ready(function(){

	function validarTelefono (telefono) {
		var expTelefono = /^([0-9]{8,20})$/;

		if(expTelefono.test(telefono)) {
			return true;
		}
		else {
			return false;
		}
	}

	function validarProvincia (provincia) {
		var expProvincia = /^([a-zA-Z\sñáéíóú]{5,25})$/;

		if(expProvincia.test(provincia)) {
			return true;
		}
		else {
			return false;
		}
	}

	function validarLocalidad (localidad) {
		var expLocalidad = /^([a-zA-Z\s()ñáéíóú]{3,120})$/;

		if(expLocalidad.test(localidad)) {
			return true;
		}
		else {
			return false;
		}
	}

	$("#cambiarInformacion").submit(function () {
		var telefono = $("#telefono").val();
		telefono = Number(telefono);

		var provincia = $("#provincia").val();
		var localidad = $("#localidad").val();
		var bien = 0;

		if(validarTelefono(telefono)) {
			$("#errorTelefono").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorTelefono").attr("class", "error");
			$("#errorTelefono").text("El telefono ingresado es invalido, asegurese de ingresar un numero de al menos 8 digitos.");
			bien = 0;
		}

		if(validarProvincia(provincia)) {
			$("#errorProvincia").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorProvincia").attr("class", "error");
			$("#errorProvincia").text("La provincia ingresada no es correcta, asegurese de ingresar una provincia Argentina.");
			bien = 0;
		}

		if(validarLocalidad(localidad)) {
			$("#errorLocalidad").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorLocalidad").attr("class", "error");
			$("#errorLocalidad").text("La localidad ingresada no es correcta, asegurese de ingresar una localidad Argentina.");
			bien = 0;
		}

		if(bien == 3) {
			$("#errorLocalidad").attr("class", "hidden");
			$("#errorProvincia").attr("class", "hidden");
			$("#errorTelefono").attr("class", "hidden");
		}
	});
});