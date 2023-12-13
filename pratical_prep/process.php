<?php

function sanitize($str,$length=50){
    $str = trim($str);
    $str = htmlentities($str);
    return substr($str,0,$length);
}

if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['favcolor'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $favcolor = $_POST['favcolor'];

    // echo $name . "<br/>";
    // echo $age . "<br/>";
    // echo $favcolor . "<br/>";

    $sql = "INSERT INTO `inquiry2` (`name`, `age`, `favcolor`) VALUES (?,?,?);";
    
    // Connect to your database.. would be easier just to use dbcon.php (hint include)
    include("../../dbConn.php");

    // SANITIZE THE variable before bind
    $name = sanitize($name);
    $age = sanitize($age);
    $favcolor = sanitize($favcolor);

    // Make your prepared statement object
    $stmt = $conn->prepare($sql);

    // Bind parameter
    $stmt->bind_param("sis",$name,$age,$favcolor);

    // execute
    $stmt->execute();

    // give them a message: your name has been inserted. give them a link to got to page that shows inquiries(shownames.php)
    echo "Name Stored. <a href='shownames.php'>View All Submitted Names</a>";
    
    // in the next excercise we will display exixsting inquiries

}else{
    echo "missing a field";
}

?>