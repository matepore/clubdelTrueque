$(document).ready(function () {
	$("#cerrarSesion").click(function () {
		$.ajax({
			url: "cerrar_sesion.php",
			type: "get",
			success: function (response) {}
		});
	});

});