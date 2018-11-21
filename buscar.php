<!DOCTYPE html>
<html lang="es">
<head>
	<title>Buscar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<?php include "dibujar_navbar.php"; ?>
	</header>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
				<h1 class="page-header">Resultados de la busqueda</h1>
			</div>
		</div>
		
		<?php
			require_once('conexion.php');
			$query = $_GET['query'];
			$query = htmlspecialchars($query);
			$query2 = "SELECT * FROM producto WHERE (nombre LIKE '%".$query."%' OR nombre LIKE '".$query."%' OR nombre LIKE '%".$query."') AND id_estado_producto = 1";

			if(($con->query($query2))->rowCount() > 0) {
				echo "<div class='row text-center'><div class='col-md-4 col-lg-4 col-xs-12 col-sm-12'></div><div class='col-md-8 col-lg-8 col-xs-12 col-sm-12'>";
				foreach($con->query($query2) as $row) {
					echo "<div class='well col-md-12 col-lg-12 col-xs-12 col-sm-12' id='producto-buscar'>";

					echo "<div><label><h3>".$row["nombre"]."</h3></label></div>";

					echo "<div class='col-md-4 col-lg-4 col-xs-12 col-sm-12'>";

					echo "<img src='".$row["imagen"]."' class='img-responsive' style='width:100%'></div>";

					echo "<div class='col-md-8 col-lg-8 col-xs-12 col-sm-12'>";

					$usuario = "SELECT nombre, apellido FROM usuario WHERE id_usuario = ".$row["id_usuario"]."";
					foreach($con->query($usuario) as $row2) {
						$nombre = utf8_encode($row2["nombre"]);
						$apellido = utf8_encode($row2["apellido"]);
					}
					echo "<h4><p class='text-left'><span class='fas fa-user-circle'></span> ".$nombre." ".$apellido."</p></h4>";

					$categoria = "SELECT nombre FROM categoria WHERE id_categoria = ".$row["id_categoria"]."";
					foreach($con->query($categoria) as $row3) {
						$nombre_categoria = utf8_encode($row3["nombre"]);
					}

					echo "<h4><p class='text-left'><span class='fas fa-boxes'></span> ".$nombre_categoria."";

					echo "<h4><p class='text-left'><span class='fas fa-thumbs-up'></span> Intereses:</p></h4>";

					echo "<h4><p class='text-left' id='intereses'>".$row["intereses"]."</p></h4>";

					echo "</div></div>";
				}
			}
			else {
				echo "<h1 class='text-center'><small>No hay coincidencias.</small></h1>";
			}
		?>
		
	<!--<div class="row text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>-->
</body>
</html>