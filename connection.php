<?php

	$servername = "sdb-51.hosting.stackcp.net";
	$username = "my_users-353030338c87";
	$password = "amar1625";

	// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
