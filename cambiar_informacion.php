<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(!isset($_SESSION["identificador"])) {
    	header('Location: index.php');
    }
    else {
    	if(isset($_POST["cambiarInfo"])) {
    		$cambiarInformacion = "UPDATE usuario SET localidad = '".$_POST["localidad"]."', provincia = '".$_POST["provincia"]."', telefono = '".$_POST["telefono"]."' WHERE id_usuario = '".$_SESSION["identificador"]."'";
    		$con->query($cambiarInformacion);

    		$_SESSION["localidad"] = $_POST["localidad"];
    		$_SESSION["provincia"] = $_POST["provincia"];
    		$_SESSION["telefono"] = $_POST["telefono"];

    		header('Location: dibujar_perfil.php');
    	}
    }
?>