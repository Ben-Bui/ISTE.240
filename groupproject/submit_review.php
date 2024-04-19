<?php 
// Made By Ben
$path = "./";
$curPage = "Submit Reviews";

include($path . "assets/inc/header.php");
?>
<div class="letter">
        <h2>Submitted Reviews/Comments</h2>

        <?php

        function sanitize($str,$length=50){
            $str = trim($str);
            $str = htmlentities($str);
            return substr($str,0,$length);
        }
        
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

            $name = sanitize($name);
            $email = sanitize($email);
            $comment = sanitize($comment);

            echo "name: " . $name . "<br/>";
            echo "email: " . $email . "<br/>";
            echo "comment: " . $comment . "<br/>";;
        }else{
            echo "missing a field";
        }

        ?>
    </div>