
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate My Shirt</title>
    <!-- Link to your external CSS here -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/scripts/script.js" defer></script>
    

</head>
<body>
    <!-- make sure to create a container/wrapper for overall site. -->
    <button onclick="darkmode()">Change to darkmode</button>

    <div class="container">
        <h1>Rate My Shirt</h1>

        <nav class="dropdown">
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
                    <a href="#">Reviews </a> 
                    <ul class="submenu">
                        <li> <a href="#">General Information</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <figure>
            <img src="assets/images/tagline-img.png" id="pic" alt="Juan " >
        </figure> 
        <h2>Recent Reviews</h2>
        <p>Reviewer name: Ben</p>
        <p>Rating: 5</p>
        <p>Comment: Decent</p>
        <h2>Recent Reviews</h2>
        <p>Reviewer name: Gwen</p>
        <p>Rating: 10</p>
        <p>Comment: Beautiful</p>

        <hr>
        
        <h2>Rate The Shirt</h2>
        <form method="post" action="process.php" onsubmit="return validate()">
            Name: <input type="text" name="name" id="name"placeholder="Insert name"/> <br/>
            Rating from 0 to 10: <input type="text" name="rating" id="rating" min="1" max="10"/> <br/>
            <textarea id="comment" name="comment" rows="4" cols="50 " placeholder = "Leave a nessage"></textarea><br><br>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    include("assets/inc/footer.php")
    ?>
    </div>
</body>
</html>