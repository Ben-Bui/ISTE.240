<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Validate inputs using JavaScript
    // You can customize this validation as per your requirements
    // Here's an example of simple validation
    if (empty($name) || empty($comment)) {
        echo "Please fill in all required fields.";
    } else {
        // Database connection
        include("../../../dbConn.php");

        // Sanitize inputs
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $comment = mysqli_real_escape_string($conn, $comment);

        // Insert data into the database using prepared statement
        $stmt = $conn->prepare("INSERT INTO comments (`from`, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $comment);

        // Execute prepared statement
        if ($stmt->execute()) {
            // Redirect back to comments.php after successful submission
            header("Location: comments.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
} else {
    // If the form wasn't submitted via POST method, redirect to comments.php
    header("Location: comments.php");
    exit();
}
?>
