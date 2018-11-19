<?php
	session_start();

	session_unset($_SESSION["identificador"]);
	session_unset($_SESSION["estado"]);
	session_unset($_SESSION["nombre"]);
	session_unset($_SESSION["apellido"]);
	session_unset($_SESSION["email"]);
	session_unset($_SESSION["password"]);
	session_unset($_SESSION["fechaDeNacimiento"]);
	session_unset($_SESSION["telefono"]);
	session_unset($_SESSION["provincia"]);
	session_unset($_SESSION["localidad"]);
	session_unset($_SESSION["avatar"]);
	session_destroy();

	header('Location: index.php');
?>