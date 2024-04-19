<?php
$servername = "localhost";
$username = "iste240t05";
$password = "Weakness5%colliery";
$dbname = "iste240t05";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>