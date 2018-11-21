<div class="hidden-xs hidden-sm">
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
		    <ul class="nav navbar-nav">
		    	<div class="navbar-header">
					<a class="navbar-brand" id="navLetra" href="index.php">Club del Trueque</a>
				</div>
		    	<li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" id="navLetra" href="#">Categorías<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			        	<?php
			        		foreach ($con->query($categoria) as $row) {
			        			echo "<li><a href='#'>".utf8_encode($row['nombre'])."</a></li>";
			        		}
			        	?>
			        </ul>
			    </li>
			    <form class="navbar-form navbar-left" action="buscar.php" method="GET">
			    	<div class="form-group">
			    		<input type="text" class="form-control" placeholder="Buscar" name="query">
			    	</div>
			    	<button type="submit" class="btn btn-default" id="boton-navbar" name="buscar"><span class="fas fa-search"></span></button>
			    </form>
			</ul>
		    <ul class="nav navbar-nav navbar-right">
		    	<li><a id="navLetra" href="#"><span class="fas fa-bell fa-2x"></span></a></li>
		    	<li>
		    		<!--<a href="perfil.php" id="navLetra">Nahuel Cabrera <img src="img/usuario/usuario2.jpg" style="width:30px"></a>-->
		    		<?php
		    			echo "<a href='#' id='navLetra'>".$_SESSION["nombre"]." ".$_SESSION["apellido"]." "."<img src='".$_SESSION["avatar"]."' style='width:30px'></a>";
		    		?>
		    	</li>
			    <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" id="navLetra" href="#"><span class="fas fa-cog fa-2x"></span></a>
			        <ul class="dropdown-menu">
			        	<li><a href="dibujar_perfil.php"><span class="fas fa-user"></span> Mi Perfil</a></li>
						<li><a href="dibujar_cartera.php"><span class="fas fa-wallet"></span> Mi Cartera</a></li>
						<li><a href="persistir_producto.php"><span class="fas fa-cart-plus"></span> Agregar Producto</a></li>
						<li><a href="#"><span class="fas fa-list"></span> Historial de Trueques</a></li>
						<li><a href="#"><span class="fas fa-list"></span> Historial de Propuestas</a></li>
						<li><a href="#" id="cerrarSesion"><span class="fas fa-user-times"></span> Cerrar Sesión</a></li>
			        </ul>
				</li>
		    </ul>
		</div>
	</nav>
</div>

<div class="hidden-md hidden-lg">
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
		    <ul class="nav navbar-nav navbar-left">
				<li class="dropdown col-sm-3 col-xs-3">
					<a class="dropdown-toggle" data-toggle="dropdown" id="navLetra" href="#">
						<span class="fas fa-bars fa-2x"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="dibujar_perfil.php"><span class="fas fa-user"></span> Mi Perfil</a></li>
						<li><a href="dibujar_cartera.php"><span class="fas fa-wallet"></span> Mi Cartera</a></li>
						<li><a href="persistir_producto.php"><span class="fas fa-cart-plus"></span> Agregar Producto</a></li>
						<li><a href="#"><span class="fas fa-list"></span> Historial de Trueques</a></li>
						<li><a href="#"><span class="fas fa-list"></span> Historial de Propuestas</a></li>
						<li><a href="#" id="cerrarSesion"><span class="fas fa-user-times"></span> Cerrar Sesión</a></li>
					</ul>
				</li>
		    	<li class="col-sm-6 col-xs-6"></li>
		    	<li class="col-sm-3 col-xs-3"><a id="navLetra" href="index.php"><img src="img/logo/logo(30x30).png" class="img-responsive"></a></li>
			</ul>
		</div>
	</nav>
</div>