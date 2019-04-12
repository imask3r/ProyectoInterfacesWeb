<!DOCTYPE html>
<html>
<head>
	<title>IMC Coches</title>
	<link rel="shortcut icon" type="image/png" href="../resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../styles/autos.css">
	<script type="text/javascript" src="../scripts/main.js"></script>
    <link rel="stylesheet" href="../styles/extras.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
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
                                    <li><a href="contact.php">Contactar</a></li>
                                    <li><a href="#">Vehículos</a></li>
                                    <li><a href="blog.php">Novedades</a>
                              </ul>
                        </div>
                  </nav>
            </header>

            <div class="container">
              <h1>Listado de coches disponibles</h1>
                <?php //INICIO DEL PHP
                $mysqli = new mysqli('localhost', 'root', '', 'webfinal') or die($mysqli->connect_error);
                $table = 'images';//TABLA DONDE ESTA LA RUTA Y EL NOMBRE DE LAS IMAGENES

                $result = $mysqli->query("SELECT * FROM $table");//QUERY para seleccionar todo lo de nuestra tabla ($table)

                $i = 0;//Variable para limitar coches que saldrán
                while($data = $result->fetch_assoc() and $i < 25) {
                    $i++;
                    echo "<div class='listado'>";
                    echo "<img src='{$data['img_dir']}'>";
                    echo "<h2>{$data['name']}</h2>";
                    echo "<form action='../pages/solicitar.php' method='post'>
                          <input type='hidden' readonly name='cocheId' value='{$data['uuid']}'>
                          <input class='button' type='submit' value='Reservar'>
                        </form> ";
                    echo "</div>";
                }

                ?>
            </div>

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