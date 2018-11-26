<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if (isset($_SESSION['identificador'])) {
    	$productos = "SELECT * FROM producto WHERE id_usuario = '".$_SESSION["identificador"]."' AND id_estado_producto NOT LIKE '3' AND id_estado_producto NOT LIKE '4'";
    }
    else {
    	header('Location: index.php');
    }

    include "./vistas/cartera.php";
?>