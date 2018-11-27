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
							foreach($con->query($trueque_traer) as $columna) {
								#TENGO QUE RELLENAR LOS TRUEQUES
							}
						?>
						<div class="well">
							<h3>Intercambiaste</h3>
							<h4><code>Chupin Beige</code></h4>
							<h3>Por</h3>
							<h4><code>Camisa a cuadros</code></h4>
						</div>
					</div>

					<div id="propuestas" class="tab-pane fade in active">
						
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
		</div>
	</div>
</body>
</html>