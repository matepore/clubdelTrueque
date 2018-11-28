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
			        			echo "<li><a href='buscar.php?query=".utf8_encode($row['nombre'])."&id_categoria=".$row["id_categoria"]."'>".utf8_encode($row['nombre'])."</a></li>";
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
		    	<li><a id="navLetra" href="persistir_usuario.php"><span class="fas fa-user-plus fa-2x"></span> Registrarse</a></li>
		    	<li><a id="navLetra" href="ingresar.php"><span class="fas fa-user-check fa-2x"></span> Iniciar Sesión</a></li>
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
						<li><a href="buscar.php?query=' '"><span class="fas fa-search"></span> Buscar</a></li>
						<li><a href="persistir_usuario.php"><span class="fas fa-user-plus"></span> Registrarse</a></li>
						<li><a href="ingresar.php"><span class="fas fa-user-check"></span> Iniciar Sesión</a></li>
					</ul>
				</li>
		    	<li class="col-sm-6 col-xs-6"></li>
		    	<li class="col-sm-3 col-xs-3"><a id="navLetra" href="index.php"><img src="https://i.imgur.com/sZk2g7C.png" class="img-responsive" style="width:30px"></a></li>
			</ul>
		</div>
	</nav>
</div>