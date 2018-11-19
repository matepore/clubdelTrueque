<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro</title>
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
		<?php include "navbar-inicio.php"; ?>
	</header>

	<div class="container">
		<div class="row">
			<div class="titulo">
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
				<div class="col-md-8 col-lg-8 col-xs-12 col-sm-12" id="titulo">
					<h1 class="presentacion">Completa tus datos</h1>
				</div>
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<form action="persistir_usuario.php" method="post">
			<div class="row">
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="Nombre"><b>Nombre:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user-circle"></i></span>
							<input id="nombre" type="text" class="form-control" name="Nombre" placeholder="Ingrese su nombre" required>
						</div>
						
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="apellido"><b>Apellido:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user"></i></span>
							<input id="apellido" type="text" class="form-control" name="Apellido" placeholder="Ingrese su apellido" required>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
			</div>

			<div class="row">
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="Email"><b>E-mail:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-envelope"></i></span>
							<input id="email" type="email" class="form-control" name="Email" placeholder="Ingrese su e-mail" required>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="contraseña"><b>Contraseña:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
							<input id="Contraseña" type="password" class="form-control" name="Contraseña" placeholder="Ingrese su contraseña" required>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
			</div>

			<div class="row">
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="fecha_nacimiento"><b>Fecha de Nacimiento:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
							<input id="fnacimiento" type="date" class="form-control" name="Fecha_nacimiento" placeholder="Ingrese su fecha de nacimiento" required>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="telefono"><b>Telefono:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-phone"></i></span>
							<input id="Telefono" type="number" class="form-control" name="Telefono" placeholder="Ingrese numero de telefono" required>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
			</div>

			<div class="row">
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="provincia"><b>Provincia:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
							<input id="Provincia" type="text" class="form-control" name="Provincia" placeholder="Ingrese provincia" required>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="localidad"><b>Localidad:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-hotel"></i></span>
							<input id="Localidad" type="text" class="form-control" name="Localidad" placeholder="Ingrese localidad" required>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12"></div>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"></div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<div class="form-group">
						<label><b>Ingrese url de avatar:</b></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-camera"></i></span>
							<input id="avatar" type="text" name="Avatar" class="form-control" placeholder="Ingrese url" required>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"></div>
			</div>
	
			<div class="row">
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"></div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<input id="btn-registracion" name="registrar" type="submit" value="Crear Cuenta">
				</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12"></div>
			</div>
		</form>
	</div>
</body>