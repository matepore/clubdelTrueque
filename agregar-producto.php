<!DOCTYPE html>
<html lang="es">
<head>
	<title>Agregar Producto</title>
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
		<?php include "navbar-logueado.php"; ?>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<h1 class="page-header"><p class="text-center" id="titulo-perfil">Agrega tu producto y forma parte de nuestra creciente comunidad</p></h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-lg-3"></div>
			<div class="col-md-6 col-lg-6">
				<form action="" method="post">
					<div class="form-group">
						<label>Nombre del producto:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-tag"></i></span>
							<input type="text" class="form-control" placeholder="Ingrese el nombre" pattern="" required>
						</div>
					</div>

					<div class="form-group">
						<label>Imagen del producto:</label><br>
						<div class="hidden-xs hidden-sm">
							<p class="text-center"><button type="button" class="btn btn-default" id="boton-alternativo"><span class="fas fa-camera"></span> <strong>Agregar foto</strong></button></p>
						</div>
						<div class="hidden-lg hidden-md">
							<p class="text-center"><button type="button" class="btn btn-default btn-block" id="boton-alternativo"><span class="fas fa-camera fa-2x"></span> <strong>Agregar foto</strong></button></p>
						</div>
					</div>

					<div class="form-group">
						<label>Categoría:</label>
						<select class="form-control" id="sel1">
							<option>Cocina</option>
							<option>Baño</option>
							<option>Informática</option>
							<option>Hogar y Electrodomésticos</option>
							<option>Ropa</option>
							<option>Vehículos</option>
							<option>Muebles</option>
							<option>Herramientas</option>
							<option>Juguetes</option>
							<option>Misceláneo</option>
						</select>
					</div>

					<div class="form-group">
						<label>Descripción del producto:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>

					<div class="form-group">
						<label>Tus intereses para un trueque:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>

					<div class="form-group">
						<p>
							<button type="submit" class="btn btn-default btn-block" id="boton-alternativo"><strong>Enviar</strong></button>
						</p>
					</div>
				</form>
			</div>
			<div class="col-md-3 col-lg-3"></div>
		</div>
	</div>
</body>
</html>