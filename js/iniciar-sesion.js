$(document).ready(function(){
	function validarEmail (email) {
		var expEmail = /^[_a-zA-Z0-9-ñáéíóú]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,4})$/;

		if(expEmail.test(email)) {
			return true;
		}
		else {
			return false;
		}
	}

	function validarPassword (password) {
		var expPassword = /^([_a-zA-Z0-9-*@°!%$?¡¿+~{}¬ñáéíóú]{6,})$/;

		if(expPassword.test(password)) {
			return true;
		}
		else {
			return false;
		}
	}

	$("#btn").submit(function () {
		var email = $("#email").val();
		var password = $("#password").val();
		var bien = 0;

		if(validarEmail(email)) {
			$("#errorEmail").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorEmail").attr("class", "error");
			$("#errorEmail").text("El email ingresado no es correcto, por favor ingrese uno valido.");
			bien = 0;
		}

		if(validarPassword(password)) {
			$("#errorPassword").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorPassword").attr("class", "error");
			$("#errorPassword").text("El password ingresado es incorrecto, ingrese un password que tenga mínimo 6 caracteres de longitud.");
			bien = 0;
		}

		if(bien == 2) {
			$("#errorEmail").attr("class", "hidden");
			$("#errorPassword").attr("class", "hidden");
		}
	});
});