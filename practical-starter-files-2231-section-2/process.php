<script src="assets/scripts/script.js" defer></script>

</script>
<?php

//You just need to display the data you would hypothetically submit here
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
    //$sql = "INSERT INTO `240reviews` (`name`, `rating`, `comment`) VALUES ('?,?,?);";

    include("../../dbConn.php");

    $name = sanitize($name);
    $rating = sanitize($rating);
    $comment = sanitize($comment);

    // $stmt = $conn->prepare($sql);

    // $stmt->bind_param("sis",$name,$rating,$comment);

    // $stmt->execute();
    //print results below:
    echo "The Following will be inserted into the database at a later time:<br/>";

    echo "name: " . $name . "<br/>";
    echo "rating: " . $rating . "<br/>";
    echo "comment: " . $comment . "<br/>";

}else{
    echo "missing something";
}




?>