<?php
/**
 * Connect to the database.
 */

	include("../../dbConn.php");


	//figure out state of program...should i be nserting something ???
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['name']) && !empty($_GET['message'])) {
        $name = $_GET['name'];
        $message = $_GET['message'];

        $sql = "INSERT INTO comments (name, message) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $message);
        $stmt->execute();
    }


	$sql = "SELECT * FROM `comments` LIMIT 50";

	$result = $conn->query($sql);

	$comments = [];
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$comments[] = $row;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>240 DB Insert</title>
	</head>
	<body>
		<h3>What do you think?</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				foreach ($comments as $comments) {
				  echo "<li>" . $comments['name'] . ' '. $comments['message'] . "</li>" ;
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>What do you have to say?</h3>
		<form action="preparedStatement.php" method="get">		
			Name: <input type="text" name="name" required><br>
			<textarea name="message" required></textarea><br>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>