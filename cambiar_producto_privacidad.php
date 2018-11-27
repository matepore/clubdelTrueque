<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    $id_producto = $_GET["id_producto"];
    $id_estado_producto = $_GET["id_estado_producto"];

    if($id_estado_producto == 1) {
    	$productoQuery = "UPDATE producto SET id_estado_producto = '2' WHERE id_producto = '".$id_producto."'";
    	$con->query($productoQuery);

    	header('Location: dibujar_cartera.php');
    }
    else {
    	$productoQuery = "UPDATE producto SET id_estado_producto = '1' WHERE id_producto = '".$id_producto."'";
    	$con->query($productoQuery);

    	header('Location: dibujar_cartera.php');
    }
?>