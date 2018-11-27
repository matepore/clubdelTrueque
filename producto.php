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
				<?php
					if(isset($noBotones)) {
						echo "<div id='ccuenta'><p class='text-center'><span class='fas fa-eye-slash fa-3x'></span></p><h3><p class='text-center'>Producto Privado.</p></h3></div>";
						if(isset($esPropio)) {
							echo "<div id='ccuenta'><p class='text-center'><span class='fas fa-hand-point-up fa-3x'></span></p><h3><p class='text-center'>Este producto es tuyo.</p></h3></div>";
						}
					}
					elseif(isset($esPropio)) {
						echo "<div id='ccuenta'><p class='text-center'><span class='fas fa-hand-point-up fa-3x'></span></p><h3><p class='text-center'>Este producto es tuyo.</p></h3></div>";
					}
					elseif(isset($noIniciado)) {
						echo "<a href='ingresar.php'><button type='button' id='margenSuperiorBoton' class='btn btn-default btn-block'><h5><strong>Proponer Trueque</strong></h5></button></a>";
						echo "<a href='ingresar.php'><button type='button' id='margenSuperiorBoton' class='btn btn-default btn-block'><h5><strong>Ver Cartera</strong></h5></button></a>";
					}
					else {
						echo "<button type='button' id='margenSuperiorBoton' class='btn btn-default btn-block' data-toggle='modal' data-target='#truequeModal'><h5><strong>Proponer Trueque</strong></h5></button>";
						echo "<button type='button' id='margenSuperiorBoton' class='btn btn-default btn-block'><h5><strong>Ver Cartera</strong></h5></button>";
					}
				?>
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
		<div class='row'>
			<?php
				if(isset($esPropio)) {
					echo "<div class='col-md-12 col-lg-12 col-xs-12 col-sm-12'>";
					echo "<h1 class='bg-success'><p class='text-center'>Propuestas Pendientes</p></h1>";
					echo "</div>";
				}
			?>
			<div class='col-md-8 col-lg-8 col-xs-12 col-sm-12'>
				<?php
					if(isset($esPropio)) {
						$hayPropuestas = "SELECT * FROM propuestas_productos WHERE id_producto = '".$id."'";
						if (($con->query($hayPropuestas))->rowCount() > 0) {
							foreach($con->query($hayPropuestas) as $columna4) {
								$laPropuesta = $columna4["id_propuesta"];
								$soyReceptor = "SELECT * FROM propuesta WHERE id_propuesta = '".$laPropuesta."' AND id_usuario_receptor = '".$_SESSION["identificador"]."' AND id_estado_propuesta = '1'";
								if (($con->query($soyReceptor))->rowCount() > 0) {
									foreach($con->query($soyReceptor) as $columna5) {
										echo "<div class='media' id='margenAbajo'><div class='media-left'>";
										$usuarioEmisor = "SELECT * FROM usuario WHERE id_usuario = '".$columna5["id_usuario_emisor"]."'";

										foreach($con->query($usuarioEmisor) as $columna6) {
											$nombreyApellido = "".$columna6["nombre"]." ".$columna6["apellido"]."";
											$imagen_usuario = $columna6["avatar"];
										}

										echo "<img src='".$imagen_usuario."' class='media-object' style='width:60px'></div>";
										echo "<div class='media-body'><h4 class='media-heading'><strong>".$nombreyApellido."</strong></h4>";
										
										$productoOfrecido = "SELECT * FROM propuestas_productos WHERE id_propuesta = '".$laPropuesta."' AND id_producto NOT LIKE '".$id."'";
										foreach($con->query($productoOfrecido) as $columna7) {
											$productoOfrecido_id = $columna7["id_producto"];
										}
										$productoEmisor = "SELECT * FROM producto WHERE id_producto = '".$productoOfrecido_id."'";
										foreach($con->query($productoEmisor) as $columna8) {
											$productoEmisor_nombre = $columna8["nombre"];
											$productoEmisor_imagen = $columna8["imagen"];
										}
										$productoReceptor = $_GET["id_producto"];
										echo "<p>Te ofreció <strong><a href='dibujar_producto.php?id_producto=".$productoOfrecido_id."'>".$productoEmisor_nombre."</a></strong></p></div></div></div>";

										echo "<div class='col-md-4 col-lg-4 col-xs-12 col-sm-12' id='margenAbajo'>";
										echo "<a href='aceptar_oferta.php?id_propuesta=".$laPropuesta."&id_producto=".$productoReceptor."'><button type='button' class='btn btn-success'><span class='fas fa-check'> Aceptar</span></button></a>";
										echo "<a href='rechazar_oferta.php?id_propuesta=".$laPropuesta."&id_producto=".$productoReceptor."'><button type='button' class='btn btn-danger'><span class='fas fa-ban'> Rechazar</span></button></a>";
										echo "</div>";
									}
								}
							}
						}
					}
				?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<h1 class="bg-success"><p class="text-center">Propuestas Rechazadas</p></h1>
				<?php
					$producReceptor = $_GET["id_producto"];
					$obtenerUsuario_producReceptor = "SELECT * FROM producto WHERE id_producto ='".$producReceptor."'";
					foreach($con->query($obtenerUsuario_producReceptor) as $columna9) {
						$idUsuario_producReceptor = $columna9["id_usuario"];
					}
					$propueRechazadas_Ureceptor = "SELECT * FROM propuesta WHERE id_usuario_receptor = '".$idUsuario_producReceptor."' AND id_estado_propuesta = '2'";
					foreach($con->query($propueRechazadas_Ureceptor) as $columna10) {
						$propueRechazada_id = $columna10["id_propuesta"];
						$propueRechazada_usuarioEmisor = $columna10["id_usuario_emisor"];

						$usuarioEmisor_rechazado = "SELECT * FROM usuario WHERE id_usuario = '".$propueRechazada_usuarioEmisor."'";
						foreach($con->query($usuarioEmisor_rechazado) as $columna11) {
							$usuarioEmisor_nombreyApellido = "".$columna11["nombre"]." ".$columna11["apellido"]."";
							$usuarioEmisor_imagen = $columna11["avatar"];
						}

						$propuesta_productos_idProducto = "SELECT * FROM propuestas_productos WHERE id_propuesta = '".$propueRechazada_id."' AND id_producto NOT LIKE '".$producReceptor."'";
						foreach($con->query($propuesta_productos_idProducto) as $columna12) {
							$producEmisor_id = $columna12["id_producto"];
						}
						$producEmisor_traer = "SELECT * FROM producto WHERE id_producto = '".$producEmisor_id."'";

						foreach($con->query($producEmisor_traer) as $columna13) {
							$producEmisor_nombre = $columna13["nombre"];
						}

						echo "<div class='well'><div class='media'><div class='media-left media-top'>";
						echo "<img src='".$usuarioEmisor_imagen."' class='media-object' style='width:60px'></div>";
						echo "<div class='media-body'><h3 class='media-heading'><kbd><strong>".$usuarioEmisor_nombreyApellido."</strong></kbd></h3>";
						echo "<p>Ofreció <strong><a href='dibujar_producto.php?id_producto=".$producEmisor_id."'>".$producEmisor_nombre."</a></strong></p>";
						echo "<br><p class='text-right'><span class='fas fa-times' id='rechazado'></span> Trueque rechazado.</p></div></div></div>";

					}


				?>
				
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

	<div id="truequeModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" class="modal-title">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center">Proponer Trueque</h2>
                </div>
                <div class="modal-body">
                	<div>
                		<?php
                			echo "<p class='text-center'><label>".$producto_nombre."</label></p>";
							echo "<img src='".$producto_imagen."' class='img-responsive' style='width:50%'></img>";
						?>
                	</div>
                	<?php
                		echo "<form action='propuesta.php?id_producto_receptor=".$producto_id."' method='post'>";
                	?>
                        <div class="form-group">
                            <label>Elige el producto que vas a ofrecer:</label>
                            <?php
                            	echo "<select name='productosPropios' class='form-control'>";
                            	$productos_propios = "SELECT * FROM producto WHERE id_usuario = '".$_SESSION["identificador"]."' AND id_estado_producto NOT LIKE '3' AND id_estado_producto NOT LIKE '4'";

                            	foreach($con->query($productos_propios) as $row4) {
                            		echo "<option>".$row4["nombre"]."</option>";
                            	}
                            	echo "</select>";
                            ?>
                        </div>
                        <div class="form-group">
                            <p class="text-center"><button type="submit" name="proponerTrueque" class="btn btn-default" id="boton-navbar"><strong>Proponer</strong></button></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>