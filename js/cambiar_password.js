$(document).ready(function(){

	function validarPassword (password) {
		var expPassword = /^([_a-zA-Z0-9-*@°!%$?¡¿+~{}¬ñáéíóú]{6,})$/;

		if(expPassword.test(password)) {
			return true;
		}
		else {
			return false;
		}
	}

	$("#cambiarPassworudu").submit(function () {
		var passwordViejo = $("#password_viejo").val();
		var passwordNuevo = $("#password_nuevo").val();
		var bien = 0;

		if(validarPassword(passwordViejo)) {
			$("#errorPasswordAntigua").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorPasswordAntigua").attr("class", "error");
			$("#errorPasswordAntigua").text("El password ingresado es incorrecto, ingrese un password que tenga mínimo 6 caracteres de longitud.");
			bien = 0;
		}

		if(validarPassword(passwordNuevo)) {
			$("#errorPasswordNueva").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorPasswordNueva").attr("class", "error");
			$("#errorPasswordNueva").text("El password ingresado es incorrecto, ingrese un password que tenga mínimo 6 caracteres de longitud.");
			bien = 0;
		}

		if(bien == 2) {
			$("#errorPasswordAntigua").attr("class", "hidden");
			$("#errorPasswordNueva").attr("class", "hidden");

		}
	});
});