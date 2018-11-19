<?php
	require_once('conexion.php');
	$categoria = "SELECT * FROM categoria";

	session_start();

	if(isset($_SESSION['identificador']) and $_SESSION["estado"] == "iniciado") {
		include "navbar.php";
	}
	else {
		include "navbar-nologueado.php";
	}
?>