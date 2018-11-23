<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }
	$id = $_GET["id_producto"];

	$existe = "SELECT * FROM producto WHERE id_producto ='".$id."'";

	$array_existe = $con->query($existe);

	if($array_existe->rowCount() == 1) {
		foreach($array_existe as $row) {
			$producto_nombre = $row["nombre"];
			$producto_descripcion = $row["descripcion"];
			$producto_intereses = $row["intereses"];
			$producto_imagen = $row["imagen"];
			$producto_id_estado = $row["id_estado_producto"];
			$producto_id_usuario = $row["id_usuario"];
			$producto_id_categoria = $row["id_categoria"];
		}

		if($producto_id_estado == 2 && $producto_id_usuario == $_SESSION["identificador"]) {
			include "producto.php";
		}
		elseif($producto_id_estado == 1) {
			include "producto.php";
		}
		else {
			header('Location: index.php');
		}
	}
	else {
		header('Location: index.php');
	}
?>