<?php
	$Country = $_POST['Country'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Telephone = $_POST['Telephone'];
	$Description = $_POST['Description'];
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'quickfly_db');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO countactus (Country, Name, Email, Telephone, Description) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss",$Country, $Name, $Email, $Telephone, $Description);
		$stmt->execute();
		echo "Your Report has been successfully submitted.";

		echo "<script> 
			window.location.replace(\"index.php\");
		</script>";

		$stmt->close();
		$conn->close();
	}
?>
