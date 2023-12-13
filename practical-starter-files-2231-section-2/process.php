<script src="scripts/script.js" defer></script>

<?php

//You just need to display the data you would hypothetically submit here
include("../../dbConn.php");
//you don't need to actually have it insert into the DB!
//make sure to use the sanitize function before printing the user provided data!

function sanitize($string, $len = 50){
    $string = trim($string);
    $string = htmlentities($string);
    $string = substr($string,0,$len);

    return $string;
}

if(!empty($_POST['rating']) ){
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
}

$sql = "INSERT INTO `240reviews` (`naem`, `rating`, `comment`) VALUES ('?,?,?);";

$name = sanitize($name);
$rating = sanitize($rating);
$comment = sanitize($comment);

$stmt = $conn->prepare($sql);

$stmt = bind_param("sis",$)
//print results below:
echo "The Following will be inserted into the database at a later time:<br/>";


?>