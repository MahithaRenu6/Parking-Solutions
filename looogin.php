<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #1e272e;
            background-image: url('loo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #fff;
            overflow: hidden;
        }

        .login-container {
            background-color: rgba(30, 41, 59, 0.7);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.6);
            width: 350px;
            text-align: center;
            z-index: 1;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        h2 {
            color: #64b5f6;
            margin-bottom: 35px;
        }

        .input-group {
            margin-bottom: 25px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ccd1d9;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #455a64;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #64b5f6;
            box-shadow: 0 0 8px rgba(100, 181, 246, 0.5);
        }

        button {
            background-color: #64b5f6;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #42a5f5;
        }

        .footer-links {
            margin-top: 25px;
            font-size: 0.9em;
        }

        .footer-links a {
            color: #64b5f6;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST">
        <div class="input-group">
            <label for="email">Email or Phone number</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Log In</button>
    </form>
    <div class="footer-links">
        <p>Don't have an account? <a href="sssign.php">Sign up</a></p>
        <p><a href="forrr.php">Forgot password?</a></p>
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
    $password = $_POST['password'];
    $phone_number = $_POST['email']; // Same field for phone/email

    $sql = "SELECT * FROM user WHERE (email = ? OR phone_number = ?) AND password = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $email, $phone_number, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Login Successful!'); window.location.href='get.php';</script>";
        } else {
            echo "<script>alert('Invalid credentials. Please try again.');</script>";
        }

        $stmt->close();
    }
}
$conn->close();
?>

</body>
</html>
