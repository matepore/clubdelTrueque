<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    $id_propuesta = $_GET["id_propuesta"];
    $id_producto_receptor = $_GET["id_producto"];
    $fecha_fin = date("Y/m/d");


    $aceptar_propuesta = "UPDATE propuesta SET id_estado_propuesta = '4', fecha_finalizada = '".$fecha_fin."' WHERE id_propuesta = '".$id_propuesta."'";
    $propuestas_productos = "SELECT * FROM propuestas_productos WHERE id_propuesta = '".$id_propuesta."'";
    foreach($con->query($propuestas_productos) as $row) {
    	$producto_id = $row["id_producto"];
    	$actualizar_producto = "UPDATE producto SET id_estado_producto = '3' WHERE id_producto = '".$producto_id."'";
    	$con->query($actualizar_producto);
    }
    $con->query($aceptar_propuesta);

    $propuestas_productos_restantes = "SELECT * FROM propuestas_productos WHERE id_producto = '".$id_producto_receptor."' AND id_propuesta NOT LIKE '".$id_propuesta."'";
    foreach($con->query($propuestas_productos_restantes) as $row2) {
    	$id_producto_rechazado = $row2["id_producto"];
    	$id_propuesta_rechazado = $row2["id_propuesta"];
    	$rechazar_propuesta = "UPDATE propuesta SET id_estado_propuesta = '2' WHERE id_propuesta = '".$id_propuesta_rechazado."'";
    	$con->query($rechazar_propuesta);
    }

    header('Location: index.php');

?>