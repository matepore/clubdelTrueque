<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(isset($_SESSION["identificador"])) {
    	if(isset($_POST['proponerTrueque'])) {
    		try {
    			$id_producto_receptor = $_GET["id_producto_receptor"];
	    		$fecha_inicio = date("Y/m/d");
	    		$query_usuario_receptor = "SELECT id_usuario FROM producto WHERE id_producto = '".$id_producto_receptor."'";
	    		foreach($con->query($query_usuario_receptor) as $columna) {
	    			$id_usuario_receptor = $columna["id_usuario"];
	    		}

	    		$query_propuesta = "INSERT INTO propuesta (fecha_inicio, id_estado_propuesta, id_usuario_emisor, id_usuario_receptor) VALUES ('".$fecha_inicio."', '1', '".$_SESSION["identificador"]."', '".$id_usuario_receptor."')";
	    		if(!$con->exec($query_propuesta)){
		        	die("No se ha insertado el registro");
		        }

				$query_propuesta_reciente = "SELECT MAX(id_propuesta) AS id FROM propuesta";
				foreach($con->query($query_propuesta_reciente) as $columna2) {
					$id_propuesta_reciente = $columna2[0];
				}
				$query_id_producto_emisor = "SELECT id_producto FROM producto WHERE nombre = '".$_POST["productosPropios"]."'";
				foreach($con->query($query_id_producto_emisor) as $columna3) {
					$id_producto_emisor = $columna3["id_producto"];
				}
				$query_propuestas_productos_emisor = "INSERT INTO propuestas_productos (id_propuesta, id_producto) VALUES ('".$id_propuesta_reciente."', '".$id_producto_emisor."')";
				$query_propuestas_productos_receptor = "INSERT INTO propuestas_productos (id_propuesta, id_producto) VALUES ('".$id_propuesta_reciente."', '".$id_producto_receptor."')";
				
				if(!$con->exec($query_propuestas_productos_emisor)){
		        	die("No se ha insertado el registro");
		        }

		        if(!$con->exec($query_propuestas_productos_receptor)){
		        	die("No se ha insertado el registro");
		        }

		        header('Location: index.php');
    		}

    		catch(PDOException $e){
			    echo $query_propuesta . "<br>" . $e->getMessage();
			    echo $query_propuestas_productos_emisor . "<br>" . $e->getMessage();
			    echo $query_propuestas_productos_receptor . "<br>" . $e->getMessage();die();
			}	
    	}
    }
    else {
    	header('Location: index.php');
    }
?>