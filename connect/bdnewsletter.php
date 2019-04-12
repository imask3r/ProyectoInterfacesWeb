 <?php
	$email = filter_input(INPUT_POST, 'email');
	if (!empty($email)){

		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "webfinal";
		$table = "newsletter";

		$file = "backups/emails.txt";
		$f = fopen($file, 'w'); // Open in write mode

		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
		} else{
			$sql = "INSERT INTO $table (email) values ('$email')";
			if ($conn->query($sql)){
				redirect("http://localhost/webfinal/index.php");
			} else{
				echo "Error: ". $sql ."". $conn->error;
			}
				$conn->close();
			}

		$sqlsel = mysql_query("SELECT * FROM $table ORDER BY email DESC");
			while($row = mysql_fetch_array($sql))
			{
			    $email = $row['email'];

			    $emails = "$email<br>";

			    fwrite($f, $emails);
			}

			fclose($f);
		}

	function redirect($url) {
	    ob_start();
	    header('Location: '.$url);
	    ob_end_flush();
	    die();
	}
?>

