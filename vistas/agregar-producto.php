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
		<?php include "dibujar_navbar.php"; ?>
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
				<form action="persistir_producto.php" method="post">
					<div class="form-group">
						<label>Nombre del producto:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-tag"></i></span>
							<input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre" required pattern="^([a-zA-Zñáéíóú]{3,60})$">
						</div>
					</div>

					<div class="form-group">
						<label>Ingrese la url de la imagen:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-camera"></i></span>
							<input type="text" name="imagen" class="form-control" placeholder="Ingrese la url" required>
						</div>
					</div>

					<div class="form-group">
						<label>Categoría:</label>
						<select name="categoria" class="form-control" id="sel1">
							<?php
				        		foreach ($con->query($categoria) as $row) {
				        			echo "<option>".utf8_encode($row['nombre'])."</option>";
				        		}
				        	?>
						</select>
					</div>

					<div class="form-group">
						<label>Descripción del producto:</label>
						<textarea name="descripcion" class="form-control" rows="5" id="comment"></textarea>
					</div>

					<div class="form-group">
						<label>Tus intereses para un trueque:</label>
						<textarea name="intereses" class="form-control" rows="5" id="comment"></textarea>
					</div>
					
					<div class="form-group">
						<label>Seleccione si es publico o privado:</label>
						<select name="estado" class="form-control" id="sel2">
							<option>Publico</option>
							<option>Privado</option>
						</select>
					</div>

					<div class="form-group">
						<p>
							<input type="submit" name="agregarProducto" class="btn btn-default btn-block" id="boton-alternativo" value="Enviar">
						</p>
					</div>
				</form>
			</div>
			<div class="col-md-3 col-lg-3"></div>
		</div>
	</div>
</body>
</html>