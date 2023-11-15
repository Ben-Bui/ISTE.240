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
            
            $name = $_GET['name'];
            session_name("btb4516-name");
            session_start();
            $_SESSION['name'] = $name;

            //redirect
            header("Location: page1.php");

        }
    ?>    
    <form method="get" action="index.php">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>