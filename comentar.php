<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
		session_start(); 
	}

	if(isset($_SESSION["identificador"])) {
		if(isset($_POST['comentar'])) {
			$comentario = $_POST["comentario"];
			$insertComentario = "INSERT INTO comentario (comentario, id_usuario, id_producto) VALUES ('".utf8_encode($comentario)."', '".$_GET["id_usuario"]."', '".$_GET["id_producto"]."')";
			$con->query($insertComentario);
			
			header('Location: dibujar_producto.php?id_producto='.$_GET["id_producto"].'');
		}
		else {
			header('Location: index.php');
		}
	}
	else {
		header('Location: index.php');
	}
?>