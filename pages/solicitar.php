<!DOCTYPE html>
<html>
<head>
	<title>IMC Solicitar</title>
	<link rel="shortcut icon" type="image/png" href="../resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../styles/solicitar.css">
	<script type="text/javascript" src="../scripts/main.js"></script>
    <link rel="stylesheet" href="../styles/extras.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">

      // Recoger navbar en burger-menu cuando hay resolución estrecha

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });
      </script>
</head>
<body>
	<div class="wrapper">
            <header>
                  <nav>
                        <div class="menu-icon" onclick="">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              <img src="../resources/logo.png" height="70" width="100">
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="../index.php">Inicio</a></li>
                                    <li><a href="#">Solicita tu vehículo</a></li>
                                    <li><a href="contact.php">Contactar</a></li>
                                    <li><a href="autos.php">Vehículos</a></li>
                                    <li><a href="blog.php">Novedades</a>
                              </ul>
                        </div>
                  </nav>
            </header>

            <section class="contacto">

            	<div class="contactotexto">
            		<h1>IMC Exotic Cars A tu disposición</h1>
            		<p>Para solicitar tu coche debes rellenar los siguientes campos, para saber el código de referencia del coche puedes ir a la sección de <a href="autos.php" target="_blank">coches</a> y lo encontrarás justo debajo de cada imagen</p>
            	</div>

	        <div class="contenedor">
  				  <form method="post" action="../connect/bdsolicitar.php">
  				    <input class="pequeño" type="text" name="nombre" required="true" placeholder="Tu nombre..">

  				    <input class="pequeño"type="text" name="apellido" required="true" placeholder="Tu apellido..">

              <input class="largo" type="email" name="email" required="true" placeholder="Correo electrónico..">

              <input class="pequeño" type="tel" name="telefono" required="true" placeholder="Teléfono..">

              <input class="largo" type="text" name="direccion" required="true" placeholder="Dirección..">

  				    <input class="pequeño" type="text" name="pais" required="true" placeholder="País..">

              <?php
              if(isset($_POST["cocheId"]))
              {
                echo '<input readonly class="pequeño" type="text" name="referencia" value= "'.$_POST["cocheId"].'" required="true"><br>';
              } else {
                echo '<input readonly class="pequeño" type="text" name="referencia" placeholder= "Necesitas un id, para ello ve a la sección de vehículos y dale a reservar" required="true"><br>';
              }
              ?>

  				    <input type="checkbox" id="checkbox" required="true">Has leído, comprendes y aceptas las condiciones establecidas en nuestra <a href="politica-privacidad.php" target="_blank">Política de privacidad.</a> <br><br>

  				    <input type="submit" value="Enviar">
  				  </form>
				  </div>

			</section>
			<footer>
				<div class="footer1">
					<p>EXOTIC CARS RENTAL, BEST PRICES OF THE MARKET</p>
					<form method="post" action="../connect/bdnewsletter.php">
                        <input type="email" name="email" required="true" placeholder="Newsletter..">
                        <input type="submit" name="submit"><br><br>
                  </form>
					<a href="https://instagram.com/socialmustang" target="_blank"><img src="../resources/ig.png" alt="Instagram" width="40px" height="40px"></a>
					<a href="https://instagram.com/socialmustang" target="_blank"><img src="../resources/fb.png" alt="Facebook" width="40px" height="40px"></a>
					<a href="https://instagram.com/socialmustang" target="_blank"><img src="../resources/yt.png" alt="Youtube" width="40px" height="40px"></a>

				</div>
				<div class="footer2">
					<p>© IMC Exotic Cars. All Rights Reserved.</p>
				</div>
			</footer>
</body>
</html>