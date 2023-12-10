<?php
$pageTitle = "Comment Pages";
$welcometitle = "Comment Pages";
include ("../header.php");?>
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
    <form action="process_comments.php" method="post" onsubmit="return validateForm()">
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
</body>
</html>
