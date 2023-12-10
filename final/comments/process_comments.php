<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    include("../../../dbConn.php");

    // Validate and sanitize form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $phone = $_POST['phone'];

    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $comment = mysqli_real_escape_string($conn, $comment);
    $phone = mysqli_real_escape_string($conn, $phone);

    $stmt = $conn->prepare("INSERT INTO comments (`from`, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $comment);

    if ($stmt->execute()) {
        header("Location: comments.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // If the form wasn't submitted POST method, redirect to comments.php
    header("Location: comments.php");
    exit();
}
$recaptchaSecretKey = "6LcbSiwpAAAAAN34cZw9Ub2BVbi-3AqWROmNmter"; 

$recaptchaResponse = $_POST['g-recaptcha-response'];
$recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
$recaptchaData = [
    'secret' => $recaptchaSecretKey,
    'response' => $recaptchaResponse,
];

$recaptchaOptions = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($recaptchaData),
    ],
];

$recaptchaContext = stream_context_create($recaptchaOptions);
$recaptchaResult = file_get_contents($recaptchaUrl, false, $recaptchaContext);
$recaptchaJson = json_decode($recaptchaResult);

if (!$recaptchaJson->success) {
    // Handle invalid CAPTCHA verification
    echo "Invalid CAPTCHA. Please try again.";
    exit();
}
?>
