<!DOCTYPE html>
<html lang="es">
<head>
	<title>Perfil</title>
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
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
				<h1 class="page-header"><p class="text-center">Perfil</p></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
				<img src="img/usuario/usuario2(512x511).jpg" class="img-responsive">
				<h2 class="text-center">Nahuel Cabrera</h2>
			</div>
			<div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
				<div>
					<h3 id="titulo-perfil">Datos de Cuenta</h3>
					<div id="info-perfil">
						<h4 class="text-center">E-mail <small>nahuel.cabrera.gmail.com</small></h4>
						<h4 class="text-center">Contraseña <small>****</small></h4>
					</div>
				</div>
				<div>
					<div class="hidden-xs hidden-sm">
						<p class="text-right"><button type="button" class="btn btn-default" id="boton-navbar" data-toggle="modal" data-target="#cuentaModal"><strong>Cambiar contraseña</strong></button></p>
					</div>
					<div class="hidden-md hidden-lg">
						<p class="text-right"><button type="button" class="btn btn-default btn-block" id="boton-navbar" data-toggle="modal" data-target="#cuentaModal"><strong>Cambiar Contraseña</strong></button></p>
					</div>
				</div>
				
				<div>
					<h3 id="titulo-perfil">Datos Personales</h3>
					<div id="info-perfil">
						<h4 class="text-center">Nombre <small>Nahuel</small></h4>
						<h4 class="text-center">Apellido <small>Cabrera</small></h4>
						<h4 class="text-center">Provincia <small>Buenos Aires</small></h4>
						<h4 class="text-center">Localidad <small>Ezeiza</small></h4>
						<h4 class="text-center">Fecha de Nacimiento <small>24/07/93</small></h4>
						<h4 class="text-center">Teléfono <small>42326843</small></h4>
					</div>
				</div>
				<div>
					<div class="hidden-xs hidden-sm">
						<p class="text-right"><button type="button" class="btn btn-default" id="boton-navbar" data-toggle="modal" data-target="#infoModal"><strong>Editar información</strong></button></p>
					</div>
					<div class="hidden-md hidden-lg">
						<p class="text-right"><button type="button" class="btn btn-default btn-block" id="boton-navbar" data-toggle="modal" data-target="#infoModal"><strong>Editar información</strong></button></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="cuentaModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" class="modal-title">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="text-center">Cambiar contraseña</h2>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<div class="form-group">
	                        <label><b>Ingrese contraseña antigua:</b></label>
	                        <div class="input-group">
	                            <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
	                            <input type="password" class="form-control" name="contraseña" placeholder="Ingrese contraseña" pattern="" required>
	                        </div>
                    	</div>
                    	<div class="form-group">
	                        <label><b>Ingrese la nueva contraseña:</b></label>
	                        <div class="input-group">
	                            <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
	                            <input type="password" class="form-control" name="contraseña" placeholder="Ingrese contraseña" pattern="" required>
	                        </div>
                    	</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary btn-block" class="form-control" value="Cambiar">
							<input type="reset" class="btn btn-danger btn-block" class="form-control" value="Limpiar Campos">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="infoModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" class="modal-title">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="text-center">Editar datos personales</h2>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<div class="form-group">
	                        <label><b>Localidad:</b></label>
	                        <div class="input-group">
	                            <span class="input-group-addon"><i class="fas fa-hotel"></i></span>
								<input type="text" class="form-control" placeholder="Ingrese localidad" value="Ezeiza" pattern="" required>
	                        </div>
                    	</div>
                    	<div class="form-group">
	                        <label><b>Provincia:</b></label>
	                        <div class="input-group">
								<span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
								<input type="text" class="form-control" placeholder="Ingrese provincia" value="Buenos Aires" pattern="" required>
							</div>
                    	</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary btn-block" class="form-control" value="Cambiar">
							<input type="reset" class="btn btn-danger btn-block" class="form-control" value="Restaurar Campos">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>