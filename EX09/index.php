<?php
/**
 * Connect to the database. Test
 */

	include("../../dbConn.php");


	//figure out state of program...should i be nserting something ???
    if (!empty($_GET['from']) && !empty($_GET['message'])) {
		$name = $_GET['from'];
        $message = $_GET['message'];

        //$sql = "INSERT INTO `comments` ('from', 'message', `date`)) VALUES (?, ?, now());";
		$sql = "INSERT INTO `comments` (`from`, `message`, `date`) VALUES (?, ?, NOW())";

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
		<title>EX09</title>
		<style>
			.greent-text{
				color: green;
			}
		</style>
	</head>
	<body>
		<h3>What do you think?</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				foreach ($comments as $comments) {
				  echo "<li><span class='greent-text'>" . $comments['from'] . '</span>: '. $comments['message'] . ' @'. $comments['date'] . "</li>" ;
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>What do you have to say?</h3>
		<form action="index.php" method="get">		
			Name: <input type="text" name="from" required><br>
			<textarea name="message" required></textarea><br>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>
