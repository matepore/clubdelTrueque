<?php 
	if(isset($_POST['ingresar'])) {
		require_once('conexion.php');
		$sql = "SELECT * FROM usuario WHERE email = '".$_POST["email"]."' AND password = '".$_POST["contraseña"]."'";

		$resultado = $con->query($sql);

		if ($resultado->rowCount() == 0) {
			echo "Usted ingresó un email o contraseña erroneos. Por favor ingrese datos validos.";
		}
		elseif ($resultado->rowCount() == 1) {
			echo "Ingresó exitosamente.";
			session_start();
			foreach ($resultado as $row) {
				$_SESSION["identificador"] = $row["id_usuario"];
				$_SESSION["estado"] = "iniciado";
				//$_SESSION[""]
			}
		}
		else {
			echo "Apá, acá paso algo que no deberia. Hay mas de una coincidencia papá.";
		}
	}

	include "./vistas/iniciar-sesion.php";
?>