<!DOCTYPE html>
<html>
<head>
	<title>IMC Contact</title>
	<link rel="shortcut icon" type="image/png" href="../resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../styles/contact.css">
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
                                    <li><a href="#">Contactar</a></li>
                                    <li><a href="autos.php">Vehículos</a></li>
                                    <li><a href="blog.php">Novedades</a>
                              </ul>
                        </div>
                  </nav>
            </header>

            <section class="contacto">

            	<div class="contactotexto">
            		<h1>IMC Exotic Cars A tu disposición</h1>
            		<p>Ponte en contacto con nosotros, estaremos encantados de responder todas tus preguntas sobre nuestros servicios de alquiler de vehículos o información sobre nuestros exclusivos automóviles en stock.</p>
            	</div>

	        <div class="contenedor">
  				  <form method="post" action="../connect/bdcontact.php">
  				    <label id="nombre">Nombre</label>
  				    <input type="text" name="nombre" required="true" placeholder="Tu nombre..">

  				    <label for="lname">Apellido</label>
  				    <input type="text" name="apellido" required="true" placeholder="Tu apellido..">

  				    <label for="lname">Pais</label><br>
  				    <input type="text" name="pais" required="true" placeholder="España..">

  				    <label for="subject">Asunto</label>
  				    <textarea name="asunto" required="true" placeholder="Escribe tu mensaje aquí.." style="height:200px"></textarea>

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
					<a href="https://instagram.com/socialmustang" target="_blank"><img src="../resources/ig.png" alt="Italian Trulli" width="40px" height="40px"></a>
					<a href="https://instagram.com/socialmustang" target="_blank"><img src="../resources/fb.png" alt="Italian Trulli" width="40px" height="40px"></a>
					<a href="https://instagram.com/socialmustang" target="_blank"><img src="../resources/yt.png" alt="Italian Trulli" width="40px" height="40px"></a>

				</div>
				<div class="footer2">
					<p>© IMC Exotic Cars. All Rights Reserved.</p>
				</div>
			</footer>
</body>
</html>