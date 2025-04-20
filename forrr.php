<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #87CEEB;
            background-image: url('caruuu.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
            overflow: hidden;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            z-index: 1;
        }

        h2 {
            color: #094785;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #094785;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #063769;
        }

        .footer-links {
            margin-top: 20px;
            font-size: 0.9em;
        }

        .footer-links a {
            color: #094785;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Forgot Password</h2>
    <form method="POST">
        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>
        <div class="input-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit">Reset</button>
    </form>
    <div class="footer-links">
        <p><a href="looogin.php">Back to Login</a></p>
    </div>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handcraft";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $new_pass = $_POST['new_password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($new_pass !== $confirm_pass) {
        echo "<script>alert('Passwords do not match.');</script>";
    } else {
        // Optional: You could hash the password here using password_hash()
        $sql = "UPDATE user SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $new_pass, $email);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Password reset password successfully!'); </script>";
            } else {
                echo "<script>alert('Email not found or password unchanged.');</script>";
            }

            $stmt->close();
        }
    }
}
$conn->close();
?>

</body>
</html>
