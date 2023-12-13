<?php
$servername = "localhost";
$username = "btb4516";
$password = "Acanthus2^confront";
$dbname = "btb4516";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>