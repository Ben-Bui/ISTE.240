<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate My Shirt</title>
    <!-- Link to your external CSS here -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <!-- make sure to create a container/wrapper for overall site. -->

    <div class="container">
        <h1>Rate My Shirt</h1>
        <figure>
            <img class="picture" src="assets/images/tagline-img.png" id="pic" alt="where is london" >
        </figure> 
        <nav class="sidenav">
            <ul>
                <li>
                    <a href="#">Home </a> 
                    <ul class="submenu">
                        <li> <a href="#">General Information</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Design </a> 
                    <ul class="submenu">
                        <li> <a href="#">Shirt Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Home </a> 
                    <ul class="submenu">
                        <li> <a href="#">General Information</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <form method="post" action="process.php" onsubmit="return validate()">
            Name: <input type="text" name="name" id="name"/> <br/>
            Rating from 0 to 10: <input type="text" name="rating" id="rating" min="1" max="10"/> <br/>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>