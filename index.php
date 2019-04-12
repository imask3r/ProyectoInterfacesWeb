<!DOCTYPE html>
<html>
<head>
	<title>IMC Exotic Cars</title>
	<link rel="shortcut icon" type="image/png" href="resources/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
      <script type="text/javascript" src="scripts/main.js"></script>
      <link rel="stylesheet" href="styles/extras.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript">

      //Script: https://stackoverflow.com/questions/44008507/responsive-navigation-bar-is-not-working
      // Recoger navbar en burger-menu cuando hay resolución estrecha

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Efecto fondo negro al hacer scroll

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })

      </script>
</head>
<body>
	<div class="wrapper">
            <header>
                  <nav>
                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              <img src="resources/logo.png" height="70" width="100">
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="pages/contact.php">Contactar</a></li>
                                    <li><a href="pages/autos.php">Vehículos</a></li>
                                    <li><a href="pages/blog.php">Novedades</a>
                              </ul>
                        </div>
                  </nav>
					<form action="pages/autos.php">
					    <button id="btn" class="btn">ALQUILA AHORA</button>
					</form>
            </header>

            <div class="content">
                  <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                  <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                  <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                  <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
            </div>

      <footer>
            <div class="footer1">
                  <p>EXOTIC CARS RENTAL, BEST PRICES OF THE MARKET</p>
                  <form method="post" action="connect/bdnewsletter.php">
                        <input type="email" name="email" required="true" placeholder="Newsletter..">
                        <input type="submit" name="submit"><br><br>
                  </form>
                  <a href="https://instagram.com/socialmustang" target="_blank"><img src="resources/ig.png" alt="Instagram" width="40px" height="40px"></a>
                  <a href="https://instagram.com/socialmustang" target="_blank"><img src="resources/fb.png" alt="Facebook" width="40px" height="40px"></a>
                  <a href="https://instagram.com/socialmustang" target="_blank"><img src="resources/yt.png" alt="Youtube" width="40px" height="40px"></a>
            </div>

            <div class="footer2">
                  <p>© IMC Exotic Cars. All Rights Reserved.</p>
            </div>
      </footer>
</body>
</html>