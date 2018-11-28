<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="js/script.js"></script>
    <script src="js/iniciar-sesion.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<?php include "navbar-inicio.php"; ?>
	</header>

	<div class="container">
        <div class="row">
            <div class="titulo">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" id="titulo">
                    <h1 class="presentacion">Bienvenidos al Club del Trueque</h1>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="well">
                <form action="ingresar.php" method="POST">
                    <div class="form-group">
                        <label for="email" class="inputitulo"><b>Email:</b></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Ingrese su e-mail" required pattern="^[_a-zA-Z0-9-ñáéíóú]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,4})$">
                            <label class="hidden" id="errorEmail"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contraseña" class="inputitulo"><b>Contraseña:</b></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
                            <input id="password" type="password" class="form-control" name="contraseña" placeholder="Ingrese contraseña" required pattern="^([_a-zA-Z0-9-*@°!%$?¡¿+~{}¬ñáéíóú]{6,})$" title="Ingrese una contraseña que tenga mínimo 6 caracteres de longitud.">
                            <label class="hidden" id="errorPassword"></label>
                        </div>
                    </div>
                    <input id="btn" type="submit" value="Ingresar" name="ingresar">
                    <br>
                    <br>
                    <a href="persistir_usuario.php" id="ccuenta" ><p class="text-center"><strong>Crear Cuenta</strong></p></a>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>
    </div>
</body>
</html>