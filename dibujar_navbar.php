<?php
	require_once('conexion.php');
	$categoria = "SELECT * FROM categoria";

	session_start();

	if(isset($_SESSION['identificador']) and $_SESSION["estado"] == "iniciado") {
		include "./vistas/navbar.php";
	}
	else {
		include "./vistas/navbar-nologueado.php";
	}
?>