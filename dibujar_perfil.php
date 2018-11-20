<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(isset($_SESSION['identificador'])) {
    	include "./vistas/perfil.php";
    }
    else {
    	header('Location: index.php');
    }
?>