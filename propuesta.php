<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(isset($_SESSION["identificador"])) {
    	if(isset($_POST['proponerTrueque'])) {
    		try {
    			$id_producto_receptor = $_GET["id_producto_receptor"];
	    		$fecha_inicio = date("d/m/Y");
	    		$query_usuario_receptor = "SELECT id_usuario FROM producto WHERE id_producto = '".$id_producto_receptor."'";
	    		foreach($con->query($query_usuario_receptor) as $columna) {
	    			$id_usuario_receptor = $columna["id_usuario"];
	    		}

	    		$query_propuesta = "INSERT INTO propuesta (fecha_inicio, id_estado_propuesta, id_usuario_emisor, id_usuario_receptor) VALUES ('".$fecha_inicio."', '1', '".$_SESSION["identificador"]."', '".$id_usuario_receptor."')";
	    		if(!$con->exec($query_propuesta)){
		        	die("No se ha insertado el registro");
		        }
		        #FALTA INSERTAR EN TABLA PROPUESTA_PRODUCTOS
    		}
    		catch(PDOException $e){
			    echo $query_propuesta . "<br>" . $e->getMessage();die();
			}
    		
    	}
    }
    else {
    	header('Location: index.php');
    }
?>