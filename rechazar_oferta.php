<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if (isset($_SESSION['identificador'])) {
	    $id_propuesta = $_GET["id_propuesta"];
	    $id_producto = $_GET["id_producto"];

	    $cancelar_propuesta = "UPDATE propuesta SET id_estado_propuesta = '2' WHERE id_propuesta = '".$id_propuesta."'";

	    $con->query($cancelar_propuesta);

	    header('Location: dibujar_producto.php?id_producto='.$id_producto.'');
	}
	else {
		header('Location: index.php');
	}
?>