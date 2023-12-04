<?php
	session_name("btb4516_login2");
	session_start();

	if(!empty( $_SESSION['login'])){
		die("Not signed in, sooo you can't see the page");
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
	You are in, <?php echo $_SESSION['name'];?>!!!<br/>
	<a href="clearSession.php">[clear the session]</a>
</body>
</html>
