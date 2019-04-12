 <?php
	$nombre = filter_input(INPUT_POST, 'nombre');
	$apellido = filter_input(INPUT_POST, 'apellido');
	$pais = filter_input(INPUT_POST, 'pais');
	$asunto = filter_input(INPUT_POST, 'asunto');

	if (!empty($nombre) || !empty($apellido) || !empty($pais) || !empty($asunto)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "webfinal";
		$table = "contacto";

		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
		} else{
			$sql = "INSERT INTO $table (nombre, apellido, pais, asunto) values ('$nombre', '$apellido', '$pais', '$asunto')";
			if ($conn->query($sql)){
				redirect("http://localhost/webfinal/pages/contact.php");
			} else{
				echo "Error: ". $sql ."". $conn->error;
			}
				$conn->close();
			}
		}

	function redirect($url) {
	    ob_start();
	    header('Location: '.$url);
	    ob_end_flush();
	    die();
	}
?>