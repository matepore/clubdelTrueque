<?php
	session_start();
    if (isset($_SESSION['identificador'])) {
    	if(isset($_POST["agregarProducto"])) {
    		try {
	    		require_once('conexion.php');
	    		if($_POST["estado"] == "Publico") {
	    			$estado = 1;
	    		}
	    		else {
	    			$estado = 2;
	    		}

	    		if($_POST["categoria"] == "Cocina") {
	    			$id_categoria = 1;
	    		}
	    		elseif($_POST["categoria"] == "Baño") {
	    			$id_categoria = 2;
	    		}
	    		elseif($_POST["categoria"] == "Informática") {
	    			$id_categoria = 3;
	    		}
	    		elseif($_POST["categoria"] == "Hogar y Electrodomésticos") {
	    			$id_categoria = 4;
	    		}
	    		elseif($_POST["categoria"] == "Ropa") {
	    			$id_categoria = 5;
	    		}
	    		elseif($_POST["categoria"] == "Vehículos") {
	    			$id_categoria = 6;
	    		}
	    		elseif($_POST["categoria"] == "Muebles") {
	    			$id_categoria = 7;
	    		}
	    		elseif($_POST["categoria"] == "Herramientas") {
	    			$id_categoria = 8;
	    		}
	    		elseif($_POST["categoria"] == "Juguetes") {
	    			$id_categoria = 9;
	    		}
	    		elseif($_POST["categoria"] == "Misceláneo") {
	    			$id_categoria = 10;
	    		}

	    		$producto = "INSERT INTO producto (nombre, descripcion, intereses, imagen, id_estado_producto, id_categoria, id_usuario) VALUES ('".$_POST["nombre"]."','".$_POST["descripcion"]."','".$_POST["intereses"]."','".$_POST["imagen"]."','".$estado."','".$id_categoria."','".$_SESSION["identificador"]."')";
	    		if(!$con->exec($producto)){
		        	die("No se ha insertado el registro");
			    }
			    header('Location: persistir_producto.php');
    		}
    		catch(PDOException $e) {
		    	echo $producto . "<br>" . $e->getMessage();die();
			}
    	}
    	
    }
    else {
    	header('Location: index.php');
    }

    include "./vistas/agregar-producto.php";
?>
