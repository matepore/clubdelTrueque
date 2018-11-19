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
						<small>Ezeiza</small>
					</h1>
				</div>
            </div>
		</div>
		<div class="row text-center">
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Set de cuchillos</label>
				<a href="#"><img src="img/cocina/set-cuchillos.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Jabonera para ducha</label>
				<a href="#"><img src="img/banio/jabonera-pared.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Celular Huawei mate 10 lite</label>
				<a href="#"><img src="img/informatica/huawei-mate-10-lite.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Batidora de mano</label>
				<a href="#"><img src="img/hogar-y-electrodomesticos/batidora-de-mano.jpg" class="img-responsive"></a>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Campera verde</label>
				<a href="#"><img src="img/ropa/campera.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Casco para motos</label>
				<a href="#"><img src="img/vehiculos/casco.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Mesita de luz</label>
				<a href="#"><img src="img/muebles/mesa-de-luz.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Juego de destornilladores</label>
				<a href="#"><img src="img/herramientas/juego-destornillador.jpg" class="img-responsive"></a>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Triciclo</label>
				<a href="#"><img src="img/juguetes/triciclo.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Saga de Harry Potter</label>
				<a href="#"><img src="img/libros/saga-harry-potter.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Escritorio Brook</label>
				<a href="#"><img src="img/muebles/escritorio-brook.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" id="margenAbajo">
				<label>Copas para vino x2</label>
				<a href="#"><img src="img/cocina/copas-par.jpg" class="img-responsive" data-toggle="modal" data-target="#productoModal"></a>
			</div>
		</div>

		<div class="row text-center">
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
        </div>
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