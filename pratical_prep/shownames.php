<?php
// Listed all names submitted!!

// Connect to db(hint db conn)
include("../../dbConn.php");

// Got to adminer and get the query that get all the names (hint select)
$sql = "SELECT * FROM `inquiry2` ORDER BY `id` LIMIT 50";
// query tge database ( no need for the prepared statements here)
$results = $conn->query($sql);

// use loop to go through the results
while($row = $results->fetch_assoc()  ){
    // print each result
    echo $row['name'] . " age: " . $row['age'] . " favcolor: " . $row['favcolor'] . "<hr/>";

    $data[] = $row;

}

var_dump($data)
?>