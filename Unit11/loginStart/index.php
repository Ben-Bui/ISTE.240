<?php





	include("../../dbConn.php");

	
	if( !empty($_POST['uname']) && !empty($_POST['pass']) ){

		$sql="SELECT * FROM `240Login` WHERE `uname` = ? LIMIT 1";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s",$_POST['uname']);
		$stmt->execute();
		$result = $stmt->get_result();
		
		$isFound = false;
		while($row = $result->fetch_assoc()){
			$isFound = true;
			$uname = $row['uname'];
			$password = $row['pass'];
		}

		if($isFound){
			//Check to make sur eit match
			// die($uname . " ".$password);
			if( password_verify($_POST['pass'],$password)){
				session_name("btb4516_login2");
				session_start();
				$_SESSION['login'] = true;
				$_SESSION['name'] = $uname;
				
				header("Location: page.php");
			}else{
				die("incorrect password");
			}
		}else{
			die("Invalid");
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
 	<style type="text/css">
 		form div
 		{
 			margin: 1em;
 		}
 		form div label
 		{
 			float: left;
 			width: 10%;
 		}
 		form div.radio {
 			float: left;
 		}
 		.clearfix {
 			clear: both;
 		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Enter Site" />
			<div>
			<input type="button" value="Register" onclick="window.location='register.php'" />
			</div>
		</div>	
	</form>
</body>
</html>
