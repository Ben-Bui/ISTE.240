<?php

	include("validations.php");

	function sanitize($str,$length=50){
		$str = trim($str);
		$str = htmlentities($str);
		$str = substr($str,0,$length);

		return $str;
	}

	//Get the state of the program. Are we to display the from? or are we sumbmitting
	if(!empty($_POST['fname']) && !empty($_POST['date']) && !empty($_POST['email'] ) ) {

		$name = sanitize($_POST['fname']);
		//Alternate way to sanitize string
		//$name = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
		$date = sanitize($_POST['date']);
		$email = sanitize($_POST['email']);

		

		//now let validate the date
		if(!date1($_POST['date'])){
			die("Date invalid");
		}

		//validate email
		if (!emailCheck($_POST['email'])){
			die("Email Invalid");
		}

		echo $name . "<br/>" . $date . "<br/>" . $email;
		die('STORE in DB');

	}

	//NEXT WEEK VALIDATE is this a valid email

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Clean input</title>
 	<style type="text/css">
 		form div{margin: 1em;}
 		form div label{float: left;width: 10%;}
 		form div.radio {float: left;}
 		.clearfix {clear: both;}
 	</style>
</head>

	<script>
		function validate(){
			if(document.getElementByID("fname").value == ""){
				alert("you forgot your name");
				return false;
			}
		}

	</script>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			<label>First Name:</label>
			<input type="text" name="fname" size="30" />
		</div>
		<div>
			<label>Date:</label>
			<input type="text" name="date" size="30" />
		</div>
		<div>
			<label>Email:</label>
			<input type="text" name="email" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" name="submit" value="Submit Form" />
		</div>	
	</form>
	<?php

	?>
</body>
</html>