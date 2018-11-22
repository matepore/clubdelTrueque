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
	<header>
		<?php include "dibujar_navbar.php"; ?>
	</header>

	<div class="container">
		<?php
			echo "<div class='row'><div class='col-md-12 col-lg-12 col-xs-12 col-sm-12'><h1 class='page-header'><p class='text-center'>Perfil</p></h1></div></div><div class='row'><div class='col-md-4 col-lg-4 col-xs-12 col-sm-12'>";

			echo "<img src='".$_SESSION["avatar"]."' class='img-responsive'>";
			echo "<h2 class='text-center'>".$_SESSION["nombre"]." ".$_SESSION["apellido"]."</h2>";

			echo "</div><div class='col-md-8 col-lg-8 col-xs-12 col-sm-12'><div><h3 id='titulo-perfil'>Datos de Cuenta</h3><div id='info-perfil'>";

			echo "<h4 class='text-center'>E-mail <small>".$_SESSION["email"]."</small></h4>";

			echo "<h4 class='text-center'>Contraseña <small>****</small></h4></div></div>";
			echo "<div class='hidden-xs hidden-sm'><p class='text-right'><button type='button' class='btn btn-default' id='boton-navbar' data-toggle='modal' data-target='#cuentaModal'><strong>Cambiar contraseña</strong></button></p></div>";
			echo "<div class='hidden-md hidden-lg'><p class='text-right'><button type='button' class='btn btn-default btn-block' id='boton-navbar' data-toggle='modal' data-target='#cuentaModal'><strong>Cambiar contraseña</strong></button></p></div></div>";
			echo "<div><h3 id='titulo-perfil'>Datos Personales</h3><div id='info-perfil'>";

			echo "<h4 class='text-center'>Nombre <small>".$_SESSION["nombre"]."</small></h4>";
			echo "<h4 class='text-center'>Apellido <small>".$_SESSION["apellido"]."</small></h4>";
			echo "<h4 class='text-center'>Provincia <small>".$_SESSION["provincia"]."</small></h4>";
			echo "<h4 class='text-center'>Localidad <small>".$_SESSION["localidad"]."</small></h4>";
			echo "<h4 class='text-center'>Fecha de Nacimiento <small>".$_SESSION["fechaDeNacimiento"]."</small></h4>";
			echo "<h4 class='text-center'>Teléfono <small>".$_SESSION["telefono"]."</small></h4>";

			echo "</div></div><div><div class='hidden-xs hidden-sm'><p class='text-right'><button type='button' class='btn btn-default' id='boton-navbar' data-toggle='modal' data-target='#infoModal'><strong>Editar información</strong></button></p>";
			echo "</div><div class='hidden-md hidden-lg'><p class='text-right'><button type='button' class='btn btn-default btn-block' id='boton-navbar' data-toggle='modal' data-target='#infoModal'><strong>Editar información</strong></button></p></div></div></div></div></div>";
		?>

	<div id="cuentaModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" class="modal-title">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="text-center">Cambiar contraseña</h2>
				</div>
				<div class="modal-body">
					<form action="cambiar_password.php" method="POST">
						<div class="form-group">
	                        <label><b>Ingrese contraseña antigua:</b></label>
	                        <div class="input-group">
	                            <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
	                            <input type="password" class="form-control" name="password_viejo" placeholder="Ingrese contraseña" required>
	                        </div>
                    	</div>
                    	<div class="form-group">
	                        <label><b>Ingrese la nueva contraseña:</b></label>
	                        <div class="input-group">
	                            <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
	                            <input type="password" class="form-control" name="password_nuevo" placeholder="Ingrese contraseña" required>
	                        </div>
                    	</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary btn-block" class="form-control" value="Cambiar" name="cambiarPassword">
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
					<form action="cambiar_informacion.php" method="POST">
						<div class="form-group">
	                        <label><b>Localidad:</b></label>
	                        <div class="input-group">
	                            <span class="input-group-addon"><i class="fas fa-hotel"></i></span>
	                            <?php echo "<input type='tex't class='form-control' placeholder='Ingrese localidad' name='localidad' value='".$_SESSION["localidad"]."' required>"; ?>
	                        </div>
                    	</div>
                    	<div class="form-group">
	                        <label><b>Provincia:</b></label>
	                        <div class="input-group">
								<span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
								<?php echo "<input type='text' class='form-control' placeholder='Ingrese provincia' name='provincia' value='".$_SESSION["provincia"]."' required>"; ?>
							</div>
                    	</div>
                    	<div class="form-group">
                    		<label><b>Telefono:</b></label>
                    		<div class="input-group">
                    			<span class="input-group-addon"><i class="fas fa-phone"></i></span>
                    			<?php echo "<input type='number' class='form-control' placeholder='Ingrese teléfono' name='telefono' value='".$_SESSION["telefono"]."' required>"; ?>
                    		</div>
                    	</div>
						<div class="form-group">
							<input type="submit" name="cambiarInfo" class="btn btn-primary btn-block" class="form-control" value="Cambiar">
							<input type="reset" class="btn btn-danger btn-block" class="form-control" value="Restaurar Campos">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>