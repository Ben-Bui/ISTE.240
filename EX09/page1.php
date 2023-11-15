<?php 

    session_name("btb4516-name");
    session_start();
    if(!empty($_SESSION['name'])){
    echo "Welcome " . $_SESSION['name'];
    }else{
        echo "You have not enter a name yet"
    }
?>