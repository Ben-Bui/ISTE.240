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
    </style>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var comment = document.getElementById("comment").value;

            if (name.trim() === '' || comment.trim() === '') {
                alert("Name and Comment fields are required.");
                return false;
            }

            // You can add more advanced validation here if needed
            
            return true;
        }

        function changeColor() {
            var dynamicElement = document.getElementById("dynamicElement");
            dynamicElement.style.backgroundColor = "blue";
            setTimeout(function() {
                dynamicElement.style.backgroundColor = "red";
            }, 2000);
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

        <!-- You can add more fields if needed -->
        
        <input type="submit" value="Submit" onclick="changeColor()">
    </form>

    <hr>
    
    <h2>Previous Comments</h2>
    <!-- Display Previous Comments -->
    <?php
    include("../../../dbConn.php"); 

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
</body>
</html>
