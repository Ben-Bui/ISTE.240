<?php

	$title = "People";
    $path = "../";
	
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
	
	
	
	
	$sql = "SELECT * FROM `240modularsites_content` WHERE `page` = '" . $title . "' LIMIT 1";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		//echo "id: " . $row["id"]. " - Name: " . $row["page"]. " " . $row["content"]. "<br>";
		$pagecontent = $row['content'];
	}
	} else {
	  echo "0 results";
	}
	$conn->close();
	
	
	
	
		include($path . "assets/inc/header.php");
	
		include($path . "assets/inc/nav.php");
	
		echo $pagecontent;
	
		include($path . "assets/inc/footer.php");
?>