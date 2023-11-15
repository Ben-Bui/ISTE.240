<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //$name = $_GET['name'];

        if(!empty($_GET['name'])){
            
            die("State: store name");
            $name = $_GET['name'];

        }
    ?>    
    <form method="get" action="index.php">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>