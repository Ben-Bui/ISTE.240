<?php 
// Made by Ben
$path = "./";
$curPage = "Review";

include($path . "assets/inc/header.php");
?>
<?php
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment']) ){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	
	function sanitize($str,$length=500){
		$str = trim($str);
		$str = htmlentities($str);
		return substr($str,0,$length);
	}
	
	$sql = "INSERT INTO `comments` (`name`, `email`, `comment`) VALUES (?,?,?)";
	include("dbCon.php");
	$name = sanitize($name);
	$email = sanitize($email);
	$comment = sanitize($comment);

	$stmt = $conn->prepare($sql);

	$stmt->bind_param("sss",$name,$email,$comment);
	
	$stmt->execute();
	
}
?>
<script>
	function validate(){
		name = document.getElementById("name").value;
		email = document.getElementById("email").value;
		comment = document.getElementById("comment").value;
		if(name == ''){
			alert("Please fill in a name");
			return false
		} else if(email == ''){
			alert("Please fill in an email");
			return false
		} else if(comment == ''){
			alert("Please fill in a comment");
			return false
		}
		
		return true;
	}
</script>
<div class="letter">
    
<h2>Leave a Review or Comment</h2>
        <p>We value your feedback! Please share your thoughts, comments, or reviews about our Unix survival guide:</p>

        <form action="review.php" method="post" onsubmit="return validate()">
            Name:</br> 
            <input type="text" name="name" id="name" placeholder="John Doe"/><br><br>

            Email:</br>
            <input type="email" id="email" name="email" placeholder="example@gmail.com"><br><br>

            Comments/Review: </br>
            <textarea id="comment" name="comment" rows="4" cols="50 " placeholder = "Leave a message"></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
		<br>
		<p><b><u>Existing Comments: </u></b></p>
		<hr class="comHR">
		<br>
		<?php
			include("dbCon.php");
			$sql = "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 50";

			$results = $conn->query($sql);

			while($row = $results->fetch_assoc() ){
				echo  "Name: " . $row['name'] . "<br/>" . " Email: " . $row['email'] . "<br/>" . " Comment: " . "<br/>" . $row['comment'] . "<br/>" ."<hr class='comHR'>" . "<br/>";
			}
		?>
		
</div>

<?php
    include($path . "assets/inc/footer.php");
?>