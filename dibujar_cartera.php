<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if (isset($_SESSION['identificador'])) {
    	$productos = "SELECT * FROM producto WHERE id_usuario = '".$_SESSION["identificador"]."'";
    }
    else {
    	header('Location: index.php');
    }

    include "./vistas/cartera.php";
?>