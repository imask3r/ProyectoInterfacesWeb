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
		<section class="contactoclientes">
			<h2>Mensajes clientes</h2>
			<div>
				<?php 
					include('../../connect/bd.php');
					$table = 'contacto';

					$result = $mysqli->query("SELECT * FROM $table order by id desc");

					while($data = $result->fetch_assoc()) {
						echo "<div class='mensajes'>";
						echo "<p name='id' class='idcaso'>ID Caso: nº{$data['id']}</p>";
	                	echo "<p>Nombre: </p>"."<p class='nombre'>{$data['nombre']}</p>";
	                	echo "<p>Apellido: </p>"."<p class='apellido'>{$data['apellido']}</p>";
	                	echo "<p>Pais: </p>"."<p class='pais'>{$data['pais']}</p>";
	                	echo "<p>Asunto: </p>"."<p class='asunto'>{$data['asunto']}</p>";
	                	echo "<p>Responder:</p>";
	                	echo "<form method='post' action='../../connect/bdcontactrespuesta.php'>";
	                	echo "<textarea name='respuesta' required='true' placeholder='Escribe tu respuesta aquí..' style='height:200px'></textarea>";
	                	echo "<input type='submit' value='Responder'>";
	                	echo "</form>";
	                	echo "</div>";
	                	echo "<br><br>";
	                }

				?>

			</div>
		</section>
	</div>

</body>
</html>