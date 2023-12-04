<?php
/**
 * Connect to the database.
 */

	include("../../../dbConn.php");


	//figure out state of program...should i be nserting something ???
	if( !empty( $_GET['fName'] ) && !empty( $_GET['lName'] ) ){
		$fName = $_GET['fName'];
		$lName = $_GET['lName'];
		
		$sql = "INSERT INTO `240Insert` (`first`, `last`) VALUES (?, ?);";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss",$fName, $lName);
		$stmt->execute();


	
	}



	$sql = "SELECT * FROM `240Insert` LIMIT 50";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$names[] = $row;
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
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				foreach ($names as $names) {
				  echo "<li>" . $names['first'] . ' '. $names['last'] . "</li>" ;
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<form action="preparedStatement.php" method="get">		
			First name: <input type="text" id="first" name="fName" />
			Last name: <input type="text" id="last" name="lName"/>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>