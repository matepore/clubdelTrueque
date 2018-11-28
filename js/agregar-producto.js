$(document).ready(function(){

	function validarNombre (nombre) {
		var expNombre = /^([a-zA-Zñáéíóú]{3,60})$/;
		
		if (expNombre.test(nombre)) {
			return true;
		}
		else {
			return false;
		}
	}

	$("#agregar").submit(function () {
		var nombre = $("#nombre").val();
		var bien = 0;

		if(validarNombre.test(nombre)) {
			$("#errorNombre").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorNombre").attr("class", "error");
			$("#errorNombre").text("El nombre es incorrecto, ingrese un nombre con longitud entre 3 y 45 caracteres.");
			bien = 0;
		}

		if(bien == 1) {
			$("#errorNombre").attr("class", "hidden");
		}
	});
});