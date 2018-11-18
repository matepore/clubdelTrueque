<?php

    if(isset($_POST['registrar'])){
		try {    	
	        require_once('conexion.php');
	        $prueba = "SELECT * FROM usuario WHERE email = '".$_POST["Email"]."'";
	        $resultadoPrueba = $con->query($prueba);

	        if ($resultadoPrueba->rowCount() == 0) {
		        $sql = "INSERT INTO usuario (nombre, apellido, email, password, fecha_nacimiento, telefono, provincia, localidad, avatar) VALUES ('".$_POST["Nombre"]."','".$_POST["Apellido"]."','".$_POST["Email"]."','".$_POST["Contraseña"]."','".$_POST["Fecha_nacimiento"]."','".$_POST["Telefono"]."','".$_POST["Provincia"]."','".$_POST["Localidad"]."','".$_POST["Avatar"]."')";
		        if(!$con->exec($sql)){
		        	die("No se ha insertado el registro");
		        }
		    }
		    else {
		    	echo "Ya hay una cuenta registrada con ese mail, por favor intente con otro.";
		    }
		}
		catch(PDOException $e){
		    echo $sql . "<br>" . $e->getMessage();die();
		}
    }

    include "./vistas/registro.php";
?>
