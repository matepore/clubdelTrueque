<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(isset($_SESSION["identificador"])) {
        if(isset($_POST["cambiarPassword"])) {
        	if($_POST["password_viejo"] == $_SESSION["password"]) {
        		$cambiarPassword = "UPDATE usuario SET password = '".$_POST["password_nuevo"]."' WHERE id_usuario = '".$_SESSION["identificador"]."'";
        		$con->query($cambiarPassword);
        		$_SESSION = $_POST["password_nuevo"];

        		header('Location: dibujar_perfil.php');
        	}
        	else {

        	}
        }
    }
    else {
        header('Location: index.php');
    }
?>