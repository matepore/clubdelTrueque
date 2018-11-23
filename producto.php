<!DOCTYPE html>
<html lang="es">
<head>
	<title>Producto</title>
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
				<?php
					echo "<h1 class='page-header'><p class='text-center'>".$producto_nombre."</p></h1>";
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<?php
					echo "<img src='".$producto_imagen."' class='img-responsive'></img>";
				?>
			</div>
			<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
				<ul class="list-group">
					<li class="list-group-item list-group-item-success" id="alertBA">
						<span class="fas fa-boxes fa-2x"> Categoría </span>
						<h3 class="text-center">
							<?php
								$producto_categoria = "SELECT nombre FROM categoria WHERE id_categoria = '".$producto_id_categoria."'";

								foreach($con->query($producto_categoria) as $row2) {
									echo "<kbd id='colorKBD'>".utf8_encode($row2["nombre"])."</kbd>";
								}
							?>
						</h3>
					</li>
					<li class="list-group-item list-group-item-success" id="alertBA">
						<span class="fas fa-user-circle fa-2x"> Usuario </span>
						<a href="#">
							<?php
								$producto_usuario = "SELECT nombre, apellido FROM usuario WHERE id_usuario = '".$producto_id_usuario."'";

								foreach($con->query($producto_usuario) as $row3) {
									echo "<a href='#'><h3 class='text-center'><kbd id='colorKBD'>".utf8_encode($row3["nombre"])." ".utf8_encode($row3["apellido"])."</kbd></h3></a>";
								}
							?>
						</a>
					</li>
					<li class="list-group-item list-group-item-success" id="alertBA">
						<span class="far fa-star fa-2x"> <strong>Calificación</strong> </span>
						<h3 class="text-center">
							<kbd id="colorKBD">5/10</kbd>
						</h3>
					</li>
					<li class="list-group-item list-group-item-success" id="alertBA">
						<span class="far fa-thumbs-up fa-2x"> <strong>Intereses</strong></span>
						<?php
							echo "<h3 class='text-center' id='intereses'>".utf8_encode($producto_intereses)."</h3>";
						?>
					</li>
				</ul>
			</div>
			<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
				<button type="button" id="margenSuperiorBoton" class="btn btn-default btn-block"><h5><strong>Proponer Trueque</strong></h5></button>
				<button type="button" id="margenSuperiorBoton" class="btn btn-default btn-block"><h5><strong>Ver Cartera</strong></h5></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
				<h1 class="bg-success"><p class="text-center">Descripción</p></h1>
				<?php
					echo "<h2><small>".utf8_encode($producto_descripcion)."</small></h2>";
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<h1 class="bg-success"><p class="text-center">Propuestas Rechazadas</p></h1>
				<!--
				<div class="well">
					<div class="media">
						<div class="media-left media-top">
							<a href="#"><img src="img/usuario/usuario1.jpg" class="media-object" style="width:60px"></a>
						</div>
						<div class="media-body">
							<a href="#">
								<h3 class="media-heading">
									<kbd><strong>Pablo Cresmani</strong></kbd>
								</h3>
							</a>
							<h4><strong>Ofreció</strong></h4>
							<p><strong><code>Chop para Cerveza</code></strong></p>
							<br>
							<p class="text-right"><span class="fas fa-times" id="rechazado"></span> Trueque rechazado.</p>
						</div>
					</div>
				</div>
				<div class="well">
					<div class="media">
						<div class="media-left media-top">
							<a href="#"><img src="img/usuario/usuario2.jpg" class="media-object" style="width:60px"></a>
						</div>
						<div class="media-body">
							<a href="#">
								<h3 class="media-heading">
									<kbd><strong>Nahuel Cabrera</strong></kbd>
								</h3>
							</a>
							<h4><strong>Ofreció</strong></h4>
							<p><strong><code>Remera de los Ramones</code></strong></p>
							<br>
							<p class="text-right"><span class="fas fa-times" id="rechazado"></span> Trueque rechazado.</p>
						</div>
					</div>
				</div>-->
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<h1 class="bg-success"><p class="text-center">Comentarios</p></h1>
				<!--
				<div class="well">
					<div class="media">
						<div class="media-left media-top">
							<a href="#"><img src="img/usuario/usuario3.jpg" class="media-object" style="width:60px"></a>
						</div>
						<div class="media-body">
							<a href="#">
								<h3 class="media-heading">
									<kbd><strong>Gonzalo García</strong></kbd>
								</h3>
							</a>
							<h4><strong>Comentó</strong></h4>
							<p id="comentarios"><strong>Te quedo en stock?<br>Necesito 2 pares para el siguiente domingo.</strong></p>
						</div>
					</div>
				</div>
				<div class="well">
					<div class="media">
						<div class="media-left media-top">
							<a href="#"><img src="img/usuario/usuario4.jpg" class="media-object" style="width:60px"></a>
						</div>
						<div class="media-body">
							<a href="#">
								<h3 class="media-heading">
									<kbd><strong>Daniel Lambdan</strong></kbd>
								</h3>
							</a>
							<h4><strong>Comentó</strong></h4>
							<p id="comentarios"><strong>Tenes de vidrio?</strong></p>
						</div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>
</body>
</html>