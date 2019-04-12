<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="shortcut icon" type="image/png" href="../resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../styles/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<div class="sidebar">
		<a href="../index.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
		<a href="index.php"><i class="fa fa-fw fa-wrench"></i> Admin</a>
		<a href="pages/clientes.php"><i class="fa fa-fw fa-user"></i> Clientes</a>
  		<a href="pages/mensajes.php"><i class="fa fa-fw fa-envelope"></i> Mensajes</a>
  		<a href="pages/pedidos.php"><i class="fa fa-folder-open"></i> Pedidos</a>
	</div>

	<div class="main">
		<h1>Panel de control</h1>
		<section class="adminpanel">
			<h2>Administración general</h2>
				<div class="pagweb">
					<div class="usuarios">
						<i class="fa fa-user" aria-hidden="true"></i>
					  	<p class="desc">Usuarios Online</p>
					  	<!-- http://forum.codecall.net/topic/64801-how-to-create-an-online-visitors-counter/ -->
					  	<p>3 Usuarios</p>
					</div>

					<div class="visitas">
						<i class="fa fa-eye" aria-hidden="true"></i>
					  	<p class="desc">Visitas a la página</p>
					  	<p>40 Visitas</p>
					</div>

					<div class="pedidos">
						<i class="fa fa-book" aria-hidden="true"></i>
					  	<p class="desc">Nuevos pedidos</p>
					  	<p>6 Pedidos</p>
					</div>
				</div>
				<div class="rrss">
					<div class="instagram">
						<i class="fa fa-instagram"></i>
					  	<p class="desc">Seguidores: 92k</p>
					  	<p><i class="fa fa-arrow-up">32</i> - <i class="fa fa-arrow-down">11</i></p>
					</div>

					<div class="facebook">
						<i class="fa fa-facebook"></i>
					  	<p class="desc">Seguidores: 5k</p>
					  	<p><i class="fa fa-arrow-up">8</i> - <i class="fa fa-arrow-down">3</i></p>
					</div>

					<div class="youtube">
						<i class="fa fa-youtube"></i>
						<p class="desc">Seguidores: 195k</p>
						<p><i class="fa fa-arrow-up">54</i> - <i class="fa fa-arrow-down">2</i></p>
					</div>
				</div>
		</section>
		<section class="addcars">
			<h2>Añadir coches</h2>
			<form class="formcars" action="../connect/bdadmin.php" method="post" enctype="multipart/form-data">
				<label>Nombre:</label>
				<input type="text" name="nombre" placeholder="Nombre del coche.." required="true"><br>
				<label>Foto:</label>
				<input type="file" name="file" required="true"><br><br>
				<input type="submit" value="Añadir">
			</form>
		</section>

		<section class="addblog">
			<h2>Añadir noticias</h2>
			<form class="formblog" action="../connect/bdblog.php" method="post" enctype="multipart/form-data">
				<label>Título de la noticia:</label>
				<input type="text" name="titulo" placeholder="Nombre del coche.." required="true"><br>
				<label>Descripción de la noticia:</label>
				<textarea name="descripcion" required="true" placeholder="Escribe tu mensaje aquí.." style="height:200px"></textarea><br>
				<label>Foto:</label>
				<input type="file" name="file"><br><br>
				<input type="submit" value="Añadir">
			</form>
		</section>
	</div>

</body>
</html>