<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="shortcut icon" type="image/png" href="resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../../styles/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<div class="sidebar">
	  	<a href="../../index.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
		<a href="../index.php"><i class="fa fa-fw fa-wrench"></i> Admin</a>
		<a href="clientes.php"><i class="fa fa-fw fa-user"></i> Clientes</a>
  		<a href="mensajes.php"><i class="fa fa-fw fa-envelope"></i> Mensajes</a>
  		<a href="pedidos.php"><i class="fa fa-folder-open"></i> Pedidos</a>
	</div>

	<div class="main">
		<h1>Panel de control</h1>
		<section class="clientespedidos">
			<h2>Pedidos</h2>
			<div>
				<?php 
					include('../../connect/bd.php');
					$table = 'pedidos';

					$result = $mysqli->query("SELECT * FROM $table order by id desc");

					while($data = $result->fetch_assoc()) {
						echo "<div class='pedidosclientes'>";
						echo "<p name='id' class='idpedido'>Pedido nº{$data['id']}</p>";
	                	echo "<p class='nombrepedido'>Nombre: {$data['nombre']} {$data['apellido']}</p>";
	                	echo "<p class='email'>Email: {$data['email']}</p>";
	                	echo "<p class='telefono'>Telefono: {$data['telefono']}</p>";
	                	echo "<p class='direccion'>Dirección: {$data['direccion']}, {$data['pais']}</p>";
	                	echo "<p class='referencia'>Referencia: {$data['referencia']}</p>";
	                	echo "</div>";
	                }

				?>

			</div>
		</section>
	</div>

</body>
</html>