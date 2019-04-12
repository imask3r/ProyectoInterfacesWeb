<?php 
	
	if (isset($_FILES['file'])) {
		$file = $_FILES['file'];

		//File propierties
		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];

		//Work out the file extension
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));

		$allowed = array('jpg', 'png', 'jpeg');

		if(in_array($file_ext, $allowed)) {
			if($file_error === 0) {
				if($file_size <= 2097152) {

					$file_name_new = uniqid() . '.' . $file_ext;
					$file_destination = '../resources/' . $file_name_new;

					if(move_uploaded_file($file_tmp, $file_destination)) {
						$file_destination;
					}

				}
			}
		}
	}

	$titulo = filter_input(INPUT_POST, 'titulo');
	$descripcion = filter_input(INPUT_POST, 'descripcion');

	if (!empty($titulo) || !empty($descripcion)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "webfinal";
		$table = "blog";
		date_default_timezone_set('UTC');
		$fecha = date('l jS \of F Y');

		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
		} else{
			$sql = "INSERT INTO $table (titulo, descripcion, img_dir, fecha) values ('$titulo', '$descripcion', '$file_destination', now())";
			if ($conn->query($sql)){
				redirect("http://localhost/webfinal/admin/index.php");
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