<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="shortcut icon" type="image/png" href="resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../../styles/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
	</script>
	
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
			<h2>Newsletter clientes:</h2>
			<div>
				<?php 
					include('../../connect/bd.php');
					$table = 'newsletter';

					$result = $mysqli->query("SELECT * FROM $table");

					while($data = $result->fetch_assoc()) {
						echo "<div class='newsletter'>";
						echo "<p class='correos'>{$data['email']}</p>";
	                	echo "</form>";
	                	echo "</div>";
	                }

				?>
				<a class="download" href="../backups/emails.txt" download="emails.txt">Descargar lista de clientes</a>
			</div>
		</section>
	</div>

</body>
</html>