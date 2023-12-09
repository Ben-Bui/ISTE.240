<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments Page</title>
    <style>
        /* CSS for DHTML component */
        #dynamicElement {
            width: 200px;
            height: 200px;
            background-color: red;
            transition: background-color 0.5s ease-in-out;
        }
        /* CSS for Image Gallery */
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            width: 150px;
            margin: 5px;
            cursor: pointer;
            transition: opacity 0.5s ease-in-out;
        }
        .gallery img:hover {
            opacity: 0.7;
        }
    </style>
    <script>
        // JavaScript for Image Gallery
        function displayImage(imageId) {
            var images = document.getElementsByClassName("gallery-img");
            for (var i = 0; i < images.length; i++) {
                images[i].style.display = "none";
            }
            document.getElementById(imageId).style.display = "block";
        }
    </script>
</head>
<body>
    <h1>Leave a Comment</h1>
    <!-- Comment Form -->
    <form action="process_comment.php" method="post" onsubmit="return validateForm()">
    <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>

        <!-- Add more fields if needed -->
        
        <input type="submit" value="Submit" onclick="changeColor()">
    </form>

    <hr>

    <h2>Previous Comments</h2>
    <!-- Display Previous Comments -->
    <?php
    include("../../../dbConn.php"); // Include your database connection file

    $sql = "SELECT * FROM `comments` LIMIT 50";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Name:</strong> " . $row["from"] . "<br>";
            echo "<strong>Email:</strong> " . $row["email"] . "<br>";
            echo "<strong>Comment:</strong> " . $row["message"] . "</p><hr>";
        }
    } else {
        echo "No comments yet.";
    }

    $conn->close();
    ?>
    <!-- DHTML Component -->
    <div id="dynamicElement"></div>
    
    <!-- Image Gallery -->
    <div class="gallery">
        <img class="gallery-img" src="image1.jpg" alt="Image 1" onclick="displayImage('image1')">
        <img class="gallery-img" src="image2.jpg" alt="Image 2" onclick="displayImage('image2')">
        <img class="gallery-img" src="image3.jpg" alt="Image 3" onclick="displayImage('image3')">
    </div>

    <!-- Images for Gallery -->
    <div id="image1" class="gallery-img" style="display: none;">
        <img src="image1.jpg" alt="Image 1">
    </div>
    <div id="image2" class="gallery-img" style="display: none;">
        <img src="image2.jpg" alt="Image 2">
    </div>
    <div id="image3" class="gallery-img" style="display: none;">
        <img src="image3.jpg" alt="Image 3">
    </div>
</body>
</html>
