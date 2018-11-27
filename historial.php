<?php
	require_once('conexion.php');
	if(!isset($_SESSION)) { 
		session_start(); 
	}

	if(!isset($_SESSION["identificador"])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Historial</title>
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
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="hidden-xs hidden-sm">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#trueques">Historial de Trueques</a></li>
						<li><a data-toggle="tab" href="#propuestas">Historial de Propuestas</a></li>
					</ul>
				</div>
				<div class="hidden-md hidden-lg">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#trueques">Trueques</a></li>
						<li><a data-toggle="tab" href="#propuestas">Propuestas</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
			<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
				<div class="tab-content">
					<div id="trueques" class="tab-pane fade in active">
						<?php
							$trueque_traer = "SELECT * FROM propuesta WHERE id_usuario_emisor = '".$_SESSION["identificador"]."' AND id_estado_propuesta = '4'";
							if(($con->query($trueque_traer))->rowCount() > 0) {
								foreach($con->query($trueque_traer) as $columna) {
									$id_trueque = $columna["id_propuesta"];
									$treuque_propuestas_productos = "SELECT * FROM propuestas_productos WHERE id_propuesta = '".$id_trueque."'";
									foreach($con->query($treuque_propuestas_productos) as $columna2) {
										$treuque_propuestas_productos_idProducto = $columna2["id_producto"];
										$producto_esPropio = "SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."' AND id_usuario = '".$_SESSION["identificador"]."'";

										if(($con->query($producto_esPropio))->rowCount() > 0) {
											foreach($con->query($producto_esPropio) as $columna3) {
												$productoPropio_nombre = $columna3["nombre"];
											}
										}
										else {
											$productoAjeno ="SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."'";
											foreach($con->query($productoAjeno) as $columna4) {
												$productoAjeno_nombre = $columna4["nombre"];
											}
										}
									}
									echo "<div class='well'>";
									echo "<h3>Intercambiaste</h3>";
									echo "<h4><code>".$productoPropio_nombre."</code></h4>";
									echo "<h3>Por</h3>";
									echo "<h4><code>".$productoAjeno_nombre."</code></h4>";
									echo "</div>";
								}
							}
							else {
								$trueque_traer = "SELECT * FROM propuesta WHERE id_usuario_receptor = '".$_SESSION["identificador"]."' AND id_estado_propuesta = '4'";
								if(($con->query($trueque_traer))->rowCount() > 0) {
									foreach($con->query($trueque_traer) as $columna) {
										$id_trueque = $columna["id_propuesta"];
										$treuque_propuestas_productos = "SELECT * FROM propuestas_productos WHERE id_propuesta = '".$id_trueque."'";
										foreach($con->query($treuque_propuestas_productos) as $columna2) {
											$treuque_propuestas_productos_idProducto = $columna2["id_producto"];
											$producto_esPropio = "SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."' AND id_usuario = '".$_SESSION["identificador"]."'";

											if(($con->query($producto_esPropio))->rowCount() > 0) {
												foreach($con->query($producto_esPropio) as $columna3) {
													$productoPropio_nombre = $columna3["nombre"];
												}
											}
											else {
												$productoAjeno ="SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."'";
												foreach($con->query($productoAjeno) as $columna4) {
													$productoAjeno_nombre = $columna4["nombre"];
												}
											}
										}
										echo "<div class='well'>";
										echo "<h3>Intercambiaste</h3>";
										echo "<h4><code>".$productoPropio_nombre."</code></h4>";
										echo "<h3>Por</h3>";
										echo "<h4><code>".$productoAjeno_nombre."</code></h4>";
										echo "</div>";
									}
								}
								else {
									echo "<div><h1>No has realizado ningun trueque aún.</h1></div>";
								}
							}
						?>
					</div>

					<div id="propuestas" class="tab-pane fade in active">
						<?php
							$trueque_traer = "SELECT * FROM propuesta WHERE id_usuario_emisor = '".$_SESSION["identificador"]."' AND id_estado_propuesta = '1'";
							if(($con->query($trueque_traer))->rowCount() > 0) {
								foreach($con->query($trueque_traer) as $columna5) {
									$id_trueque = $columna5["id_propuesta"];
									$treuque_propuestas_productos = "SELECT * FROM propuestas_productos WHERE id_propuesta = '".$id_trueque."'";
									foreach($con->query($treuque_propuestas_productos) as $columna6) {
										$treuque_propuestas_productos_idProducto = $columna6["id_producto"];
										$producto_esPropio = "SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."' AND id_usuario = '".$_SESSION["identificador"]."'";

										if(($con->query($producto_esPropio))->rowCount() > 0) {
											foreach($con->query($producto_esPropio) as $columna7) {
												$productoPropio_nombre = $columna7["nombre"];
											}
										}
										else {
											$productoAjeno ="SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."'";
											foreach($con->query($productoAjeno) as $columna8) {
												$productoAjeno_nombre = $columna8["nombre"];
											}
										}
									}
									echo "<div class='well'>";
									echo "<h3>Propusiste</h3>";
									echo "<h4><code>".$productoPropio_nombre."</code></h4>";
									echo "<h3>Por</h3>";
									echo "<h4><code>".$productoAjeno_nombre."</code></h4>";
									echo "</div>";
								}
							}
							else {
								$trueque_traer = "SELECT * FROM propuesta WHERE id_usuario_receptor = '".$_SESSION["identificador"]."' AND id_estado_propuesta = '1'";
								if(($con->query($trueque_traer))->rowCount() > 0) {
									foreach($con->query($trueque_traer) as $columna9) {
										$id_trueque = $columna9["id_propuesta"];
										$treuque_propuestas_productos = "SELECT * FROM propuestas_productos WHERE id_propuesta = '".$id_trueque."'";
										foreach($con->query($treuque_propuestas_productos) as $columna10) {
											$treuque_propuestas_productos_idProducto = $columna10["id_producto"];
											$producto_esPropio = "SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."' AND id_usuario = '".$_SESSION["identificador"]."'";

											if(($con->query($producto_esPropio))->rowCount() > 0) {
												foreach($con->query($producto_esPropio) as $columna11) {
													$productoPropio_nombre = $columna11["nombre"];
												}
											}
											else {
												$productoAjeno ="SELECT * FROM producto WHERE id_producto = '".$treuque_propuestas_productos_idProducto."'";
												foreach($con->query($productoAjeno) as $columna12) {
													$productoAjeno_nombre = $columna12["nombre"];
												}
											}
										}
										echo "<div class='well'>";
										echo "<h3>Propusiste</h3>";
										echo "<h4><code>".$productoPropio_nombre."</code></h4>";
										echo "<h3>Por</h3>";
										echo "<h4><code>".$productoAjeno_nombre."</code></h4>";
										echo "</div>";
									}
								}
								else {
									echo "<div><h1>No has generado ninguna propuesta aún.</h1></div>";
								}
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
		</div>
	</div>
</body>
</html>