<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if (isset($_SESSION['identificador'])) {
	    $id_producto = $_GET["id_producto"];

	    $eliminar_producto_query = "UPDATE producto SET id_estado_producto = '4' WHERE id_producto = '".$id_producto."'";
	    $con->query($eliminar_producto_query);
	    
	    header('Location: dibujar_cartera.php');
	}
	else {
		header('Location: index.php');
	}
?>