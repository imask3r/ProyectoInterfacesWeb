 <?php

	if (isset($_MENSAJES['id'])) {
		$idcaso = $_FILES['id'];

		$respuesta = filter_input(INPUT_POST, 'respuesta');
		echo "fdfds";
		echo "respuesta";

		if (!empty($respuesta)){
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
				$sql = "INSERT INTO $table (respuesta) values ('$respuesta') where id like $idcaso";
				if ($conn->query($sql)){
					redirect("http://localhost/webfinal/admin/index.php");
				} else{
					echo "Error: ". $sql ."". $conn->error;
				}
					$conn->close();
				}
		}
	}

	

	function redirect($url) {
	    ob_start();
	    header('Location: '.$url);
	    ob_end_flush();
	    die();
	}
?>