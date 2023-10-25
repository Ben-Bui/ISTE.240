<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello Word";
        $favcolor = "red";
        $isloggedin = true;
        echo $_SERVER['REMOTE_ADDR'];

        if($isloggedin){
            echo "Not logged in";
            // echo '<strong>Hello again</strong>';
        ?>
            <strong>Hello again</strong>
        
        <?php

        }else{
            echo "not logged in";
        }
    ?>
    <h1><?php echo $favcolor; ?></h1>
</body>
</html>