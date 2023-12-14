<?php 
// Made by Ben
$path = "./";
$curPage = "Review";

include($path . "assets/inc/header.php");
?>

<div class="letter">
    
<h2>Leave a Review or Comment</h2>
        <p>We value your feedback! Please share your thoughts, comments, or reviews about our Unix survival guide:</p>

        <form action="submit_review.php" method="post" onsubmit="return validate()">
            Name:</br> 
            <input type="text" name="name" id="name" placeholder="John Doe"/><br><br>

            Email:</br>
            <input type="email" id="email" name="email" placeholder="example@gmail.com"><br><br>

            Comments/Review: </br>
            <textarea id="comment" name="comment" rows="4" cols="50 " placeholder = "Leave a nessage"></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
</div>

<?php
    include($path . "assets/inc/footer.php");
?>