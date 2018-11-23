<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
				<div>
					<h1>Productos en</h1>
					<h1 class="page-header">
						<?php
							if (isset($_SESSION["identificador"])) {
								echo "<small>".$_SESSION["localidad"]."</small>";
							}
							else {
								echo "<small>Ezeiza</small>";
							}
						?>
					</h1>
				</div>
            </div>
		</div>
		
		<?php
			require_once('conexion.php');
			$producto = "SELECT * FROM producto WHERE id_estado_producto = 1";

			$contador = 0;
			$contenido = 0;
			foreach($con->query($producto) as $row) {
				if($contador == 0) {
					$contenido = 1;
					$contador++;
					echo "<div class='row text-center'>";
					echo "<div class='col-lg-3 col-md-3 col-xs-12 col-sm-12' id='margenAbajo'>";
					echo "<p class='text-left'><label>".$row["nombre"]."</label></p>";
					echo "<a href='dibujar_producto.php?id_producto=".$row["id_producto"]."'><img src='".$row["imagen"]."' class='img-responsive' style='width:80%'></a></div>";
				}
				elseif($contador == 4) {
					$contador = 1;
					echo "</div><div class='row text-center'>";
					echo "<div class='col-lg-3 col-md-3 col-xs-12 col-sm-12' id='margenAbajo'>";
					echo "<p class='text-left'><label>".$row["nombre"]."</label></p>";
					echo "<a href='dibujar_producto.php?id_producto=".$row["id_producto"]."'><img src='".$row["imagen"]."' class='img-responsive' style='width:80%'></a></div>";
				}
				else {
					$contador++;
					echo "<div class='col-lg-3 col-md-3 col-xs-12 col-sm-12' id='margenAbajo'>";
					echo "<p class='text-left'><label>".$row["nombre"]."</label></p>";
					echo "<a href='dibujar_producto.php?id_producto=".$row["id_producto"]."'><img src='".$row["imagen"]."' class='img-responsive' style='width:80%'></a></div>";
				}
			}
			if($contenido == 0) {
				echo "<h1><p class='text-center'>Parece que no hay productos todavia</p></h1>";
            	echo "<h1><p class='text-center'>No esperes mas y se el primero en agregarlos ingresando <a href='persistir_producto.php'>aqui</a>.</p></h1>";
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
	</div>

	<div id="productoModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" class="modal-title">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="text-center">Copas para vino x2</h2>
				</div>
				<div class="modal-body">
					<img src="img/cocina/copas-par.jpg" class="img-responsive">
					<h1 class="bg-success"><p class="text-center">Intereses</p></h1>
					<h3 class="text-center">Me interesan vasos, cubiertos, platos y cosas de cocina.</h3>
					<a href="producto.php"><button class="btn btn-default btn-block" id="boton-navbar"><strong>Visitar pagina del producto</strong></button></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>