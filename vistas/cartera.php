<!DOCTYPE html>
<html lang="es">
<head>
	<title>Cartera</title>
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
                <h1 class="page-header"><p class="text-center" id="titulo-perfil">Cartera de Productos</p></h1>
            </div>
        </div>
    </div>
    
    <?php
        $contador = 0;
        $contenido = 0;
        foreach($con->query($productos) as $row) {
            if($contador == 0) {
                $contenido = 1;
                $contador++;
                echo "<div class='container'><div class='row'><div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'><div class='nombre panel panel-warning'><div class='panel-heading' class='es'>";
                echo "<h3 class='panel-title'>".utf8_encode($row['nombre'])."</h3></div>";
                echo "<div class='panel-body'><a href='dibujar_producto.php?id_producto=".$row["id_producto"]."'><img class='img-responsive img-thumbnail' src='".utf8_encode($row['imagen'])."'></a>";
                echo "<p>Descripción: ".utf8_encode($row['descripcion'])."</p>";
                if($row["id_estado_producto"] == 1) {
                    echo "<p class='text-right'><kbd id='colorKBD'><span class='fas fa-eye'></span> Publico</kbd></p>";
                }
                else {
                    echo "<p class='text-right'><kbd id='colorKBDA'><span class='fas fa-eye-slash'></span> Privado</kbd></p>";
                }
                echo "<div class='hidden-xs hidden-sm btn-group btn-group-justified'>";
                echo "<a href='eliminar_producto.php?id_producto=".$row["id_producto"]."' class='btn btn-danger'><span class='fas fa-ban'> Eliminar</span></a>";
                echo "<a href='cambiar_producto_privacidad.php?id_producto=".$row["id_producto"]."&id_estado_producto=".$row["id_estado_producto"]."' class='btn btn-default' id='boton-alternativo' name='cambiarPrivacidad'><span class='fas fa-eye'> Cambiar privacidad</span></a>";
                echo "</div>";
                echo "<div class='hidden-md hidden-lg'>";
                echo "<a href='eliminar_producto.php?id_producto=".$row["id_producto"]."'><button type='button' class='btn btn-danger btn-block' name='cambiarPrivacidad'><span class='fas fa-ban'> Eliminar</span></button></a>";
                echo "<a href='cambiar_producto_privacidad.php?id_producto=".$row["id_producto"]."&id_estado_producto=".$row["id_estado_producto"]."'><button type='button' class='btn btn-default btn-block' id='boton-alternativo' name='cambiarPrivacidad'><span class='fas fa-eye'> Cambiar privacidad</span></button></a>";
                echo "</div>";
                echo "</div></div></div>";
            }
            elseif ($contador == 3) {
                $contador = 1;
                echo "</div></div>";
                echo "<div class='container'><div class='row'><div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'><div class='nombre panel panel-warning'><div class='panel-heading' class='es'>";
                echo "<h3 class='panel-title'>".utf8_encode($row['nombre'])."</h3></div>";
                echo "<div class='panel-body'><a href='dibujar_producto.php?id_producto=".$row["id_producto"]."'><img class='img-responsive img-thumbnail' src='".utf8_encode($row['imagen'])."'></a>";
                echo "<p>Descripción: ".utf8_encode($row['descripcion'])."</p>";
                if($row["id_estado_producto"] == 1) {
                    echo "<p class='text-right'><kbd id='colorKBD'><span class='fas fa-eye'></span> Publico</kbd></p>";
                }
                else {
                    echo "<p class='text-right'><kbd id='colorKBDA'><span class='fas fa-eye-slash'></span> Privado</kbd></p>";
                }
                echo "<div class='hidden-xs hidden-sm btn-group btn-group-justified'>";
                echo "<a href='eliminar_producto.php?id_producto=".$row["id_producto"]."' class='btn btn-danger'><span class='fas fa-ban'> Eliminar</span></a>";
                echo "<a href='cambiar_producto_privacidad.php?id_producto=".$row["id_producto"]."&id_estado_producto=".$row["id_estado_producto"]."' class='btn btn-default' id='boton-alternativo' name='cambiarPrivacidad'><span class='fas fa-eye'> Cambiar privacidad</span></a>";
                echo "</div>";
                echo "<div class='hidden-md hidden-lg'>";
                echo "<a href='eliminar_producto.php?id_producto=".$row["id_producto"]."'><button type='button' class='btn btn-danger btn-block' name='cambiarPrivacidad'><span class='fas fa-ban'> Eliminar</span></button></a>";
                echo "<a href='cambiar_producto_privacidad.php?id_producto=".$row["id_producto"]."&id_estado_producto=".$row["id_estado_producto"]."'><button type='button' class='btn btn-default btn-block' id='boton-alternativo' name='cambiarPrivacidad'><span class='fas fa-eye'> Cambiar privacidad</span></button></a>";
                echo "</div>";
                echo "</div></div></div>";
            }
            else {
                $contador++;
                echo "<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'><div class='nombre panel panel-warning'><div class='panel-heading' class='es'>";
                echo "<h3 class='panel-title'>".utf8_encode($row['nombre'])."</h3></div>";
                echo "<div class='panel-body'><a href='dibujar_producto.php?id_producto=".$row["id_producto"]."'><img class='img-responsive img-thumbnail' src='".utf8_encode($row['imagen'])."'></a>";
                echo "<p>Descripción: ".utf8_encode($row['descripcion'])."</p>";
                if($row["id_estado_producto"] == 1) {
                    echo "<p class='text-right'><kbd id='colorKBD'><span class='fas fa-eye'></span> Publico</kbd></p>";
                }
                else {
                    echo "<p class='text-right'><kbd id='colorKBDA'><span class='fas fa-eye-slash'></span> Privado</kbd></p>";
                }
                echo "<div class='hidden-xs hidden-sm btn-group btn-group-justified'>";
                echo "<a href='eliminar_producto.php?id_producto=".$row["id_producto"]."' class='btn btn-danger'><span class='fas fa-ban'> Eliminar</span></a>";
                echo "<a href='cambiar_producto_privacidad.php?id_producto=".$row["id_producto"]."&id_estado_producto=".$row["id_estado_producto"]."' class='btn btn-default' id='boton-alternativo' name='cambiarPrivacidad'><span class='fas fa-eye'> Cambiar privacidad</span></a>";
                echo "</div>";
                echo "<div class='hidden-md hidden-lg'>";
                echo "<a href='eliminar_producto.php?id_producto=".$row["id_producto"]."'><button type='button' class='btn btn-danger btn-block' name='cambiarPrivacidad'><span class='fas fa-ban'> Eliminar</span></button></a>";
                echo "<a href='cambiar_producto_privacidad.php?id_producto=".$row["id_producto"]."&id_estado_producto=".$row["id_estado_producto"]."'><button type='button' class='btn btn-default btn-block' id='boton-alternativo' name='cambiarPrivacidad'><span class='fas fa-eye'> Cambiar privacidad</span></button></a>";
                echo "</div>";
                echo "</div></div></div>";
            }
        }

        if($contenido == 0) {
            echo "<h1><p class='text-center'>Todavia no tienes productos en tu cartera?</p></h1>";
            echo "<h1><p class='text-center'>No esperes mas y agregalos ingresando <a href='persistir_producto.php'>aqui</a>.</p></h1>";
        }
    ?>

</body>
</html>