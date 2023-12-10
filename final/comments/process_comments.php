<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../../../dbConn.php");

    function sanitizeData($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = sanitizeData($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
    $comment = sanitizeData($_POST['comment']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO comments (name, email, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $comment);

    if ($stmt->execute()) {
        header("Location: comments.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: comments.php");
    exit();
}
?>
