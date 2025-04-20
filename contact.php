<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "handcraft";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die();
}

$fullName = htmlspecialchars($_POST['fullName']);
$emailAddress = htmlspecialchars($_POST['emailAddress']);
$subjectText = htmlspecialchars($_POST['subjectText']);
$messageArea = htmlspecialchars($_POST['messageArea']);

$sql = "INSERT INTO contact_messages (full_name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullName, $emailAddress, $subjectText, $messageArea);

if ($stmt->execute()) {
    echo "<script>alert('Thanks for your message! We\'ll get back to you soon.'); window.location.href = 'abc.php';</script>";
} else {
    echo "<script>alert('Something went wrong.'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
