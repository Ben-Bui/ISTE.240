<?php
$pageTitle = "Comment Pages";
$welcometitle = "Comment Pages";
include ("../header.php");
?>
<script scr="comments.js"></script>
</head>
<body>
    <h1>Leave a Comment</h1>
    <!-- Comment Form -->
    <form action="process_comments.php" method="post" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php include ("../footer.php"); ?>

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
            echo "<strong>Phone:</strong> " . $row["phone"] . "<br>";
            echo "<strong>Comment:</strong> " . $row["message"] . "</p><hr>";
        }
    } else {
        echo "No comments yet.";
    }

    $conn->close();
    ?>
</body>
</html>
