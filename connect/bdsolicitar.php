 <?php
	$nombre = filter_input(INPUT_POST, 'nombre');
	$apellido = filter_input(INPUT_POST, 'apellido');
	$email = filter_input(INPUT_POST, 'email');
	$telefono = filter_input(INPUT_POST, 'telefono');
	$pais = filter_input(INPUT_POST, 'pais');
	$direccion = filter_input(INPUT_POST, 'direccion');
	$referencia = filter_input(INPUT_POST, 'referencia');

	if (!empty($nombre) || !empty($apellido) || !empty($email) || !empty($telefono) || !empty($pais) || !empty($direccion) || !empty($referencia)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "webfinal";
		$table = "pedidos";

		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
		} else{
			$sql = "INSERT INTO $table (nombre, apellido, email, telefono, pais, direccion, referencia) values ('$nombre', '$apellido', '$email', '$telefono', '$pais', '$direccion', '$referencia')";
			if ($conn->query($sql)){
				redirect("http://localhost/webfinal/pages/solicitar.php");
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