$(document).ready(function(){

	function validarNombreoApellido (nombre) {
		var expNombre = /^([a-zA-Zñáéíóú]{3,45})$/;
		
		if (expNombre.test(nombre)) {
			return true;
		}
		else {
			return false;
		}
	}

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

	function validarFecha (fecha) {
		var hoy = new Date();
		var fecha_nacimiento = new Date(fecha);

		hoy.setHours(0,0,0,0);

		if(hoy <= fecha_nacimiento) {
			return true;
		}
		else {
			return false;
		}
	}

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

	$("#btn-registracion").submit(function () {
		var nombre = $("#nombre").val();
		var apellido = $("#apellido").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var fechaNacimiento = $("#fnacimiento").val();
		var telefono = $("#telefono").val();
		var provincia = $("#provincia").val();
		var localidad = $("#localidad").val();
		var bien = 0;

		telefono = Number(telefono);

		if(validarNombreoApellido(nombre)){
			$("#errorNombre").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorNombre").attr("class", "error");
			$("#errorNombre").text("El nombre es incorrecto, ingrese un nombre con longitud entre 3 y 45 caracteres.");
			bien = 0;
		}

		if(validarNombreoApellido(apellido)){
			$("#errorApellido").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorApellido").attr("class", "error");
			$("#errorApellido").text("El apellido es incorrecto, ingrese un apellido con longitud entre 3 y 45 caracteres.");
			bien = 0;
		}

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

		if(validarFecha(fechaNacimiento)) {
			$("#errorFecha").attr("class", "hidden");
			bien++;
		}
		else {
			$("#errorFecha").attr("class", "error");
			$("#errorFecha").text("La fecha de nacimiento no es correcta, asegurese de ingresar una fecha anterior a la de hoy.");
			bien = 0;
		}

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

		if(bien == 8) {
			$("#errorNombre").attr("class", "hidden");
			$("#errorApellido").attr("class", "hidden");
			$("#errorEmail").attr("class", "hidden");
			$("#errorPassword").attr("class", "hidden");
			$("#errorFecha").attr("class", "hidden");
			$("#errorTelefono").attr("class", "hidden");
			$("#errorProvincia").attr("class", "hidden");
			$("#errorLocalidad").attr("class", "hidden");
		}
	});
});