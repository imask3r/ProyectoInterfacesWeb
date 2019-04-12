<!DOCTYPE html>
<html>
<head>
	<title>IMC Novedades</title>
	<link rel="shortcut icon" type="image/png" href="../resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../styles/blog.css">
	<script type="text/javascript" src="../scripts/main.js"></script>
    <link rel="stylesheet" href="../styles/extras.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
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
                                    <li><a href="autos.php">Vehículos</a></li>
                                    <li><a href="#">Novedades</a>
                              </ul>
                        </div>
                  </nav>
            </header>

            <section class="noticias">
              <h1 class="principales">NOTICIAS ACTUALES</h1>
                  <?php
                    
                    include('../connect/bd.php');
                    $table = 'blog';

                    $result = $mysqli->query("SELECT * FROM $table");

                    while($data = $result->fetch_assoc()) {
                      $imgnull = $data['img_dir'];
                      if ($imgnull == "") {
                        echo "<div class='blog'>";
                        echo "<h1 class='fecha'>{$data['fecha']}</h1>";
                        echo "<h1 class='titulo'>{$data['titulo']}</h1>";
                        echo "<p class='desc'>{$data['descripcion']}</p>";
                        echo "</div>";
                        echo "<div class='spacer'></div>";
                        echo "<br><br>";
                      } else {
                        echo "<div class='blog'>";
                        echo "<h1 class='fecha'>{$data['fecha']}</h1>";
                        echo "<h1 class='titulo'>{$data['titulo']}</h1>";
                        echo "<p class='desc'>{$data['descripcion']}</p>";
                        echo "<img src='{$data['img_dir']}'>";
                        echo "</div>";
                        echo "<div class='spacer'></div>";
                        echo "<br><br>";
                      }
                    }

                  ?>
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