<?php
$pageTitle = "Comment Pages";
$welcometitle = "Comment Pages";
include("../header.php");

// Database connection
include("../../../dbConn.php");

// Fetch previous comments
$sql = "SELECT * FROM comments LIMIT 50";
$result = $conn->query($sql);

$previousComments = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $previousComments[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <style>
        /* Your CSS styles here */
    </style>
    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var comment = document.getElementById('comment').value;
            var emailRegex = /^\S+@\S+\.\S+$/;

            if (name.trim() === '' || email.trim() === '' || comment.trim() === '') {
                alert('Please fill in all fields.');
                return false;
            }

            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            // Add more specific validation rules if needed

            return true;
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

        <!-- Additional fields can be added here if needed -->

        <input type="submit" value="Submit">
    </form>

    <hr>

    <h2>Previous Comments</h2>
    <!-- Display Previous Comments -->
    <?php if (!empty($previousComments)) : ?>
        <?php foreach ($previousComments as $comment) : ?>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($comment['name']); ?><br>
            <strong>Email:</strong> <?php echo htmlspecialchars($comment['email']); ?><br>
            <strong>Comment:</strong> <?php echo htmlspecialchars($comment['comment']); ?></p><hr>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No comments yet.</p>
    <?php endif; ?>
</body>
</html>
