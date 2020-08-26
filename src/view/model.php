<?php
	$servername = "localhost";
	$username = "aissatou";
	$password = "password";
	$dbname = "banque";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['envoyer'])){
			if (isset($_POST['nomemployeur']) && isset($_POST['raisonsociale']) && isset($_POST['rc']) && isset($_POST['ninea'])) {
				if (!empty($_POST['nomemployeur']) && !empty($_POST['raisonsociale']) && !empty($_POST['rc']) && !empty($_POST['ninea'])) {
						$nomemployeur = $_POST['nomemployeur'];
						$raisonsociale = $_POST['raisonsociale'];
						$rc = $_POST['rc'];
						$ninea = $_POST['ninea'];
						$query = "INSERT INTO client_moral (raisonsociale,nomemployeur,rc,ninea) VALUES('$raisonsociale','$nomemployeur','$rc','$ninea')";
						// $sth = $dbh->prepare($query);
      //   				$sth->execute(array_values($values));
						if ($conn->query($query) === TRUE) {
  							echo "successfully";
						} else {
  							echo "Error: " . $query . "<br>" . $conn->error;
						}

						$conn->close();
				# code...
			}
		}
	}
	?>