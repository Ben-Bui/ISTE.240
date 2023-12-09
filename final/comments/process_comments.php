<?php
// Include the database connection file
include("../../../dbConn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $name = $email = $comment = "";

    // Processing form data when form is submitted
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Prepare an SQL statement to insert data into the database
    $sql = "INSERT INTO `comments` (`from`, `email`, `message`, `date`) VALUES (?, ?, ?, NOW())";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sss", $name, $email, $comment);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect back to the comments page after successful submission
            header("location: comments.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
