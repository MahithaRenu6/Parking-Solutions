<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            background: url('sas.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border-radius: 20px;
            padding: 40px;
            width: 350px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        label {
            color: #fff;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .error {
            color: red;
            font-size: 12px;
            margin-bottom: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            border: none;
            background-color: #64b5f6;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #42a5f5;
        }

        .last {
            margin-top: 15px;
            color: #ddd;
            text-align: center;
            font-size: 12px;
        }

        .last a {
            color: #64b5f6;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>SIGN UP</h2>
    <form id="myform" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <span class="error" id="nameerror"></span>

        <label for="phone_number">Phone Number:</label>
        <input type="number" id="phone_number" name="phone_number">
        <span class="error" id="phone_numbererror"></span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span class="error" id="emailerror"></span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="error" id="passworderror"></span>
        <button type="submit">SIGN UP</button>
    </form>
    <div class="last">
    </div>
</div>

<script>
document.getElementById("myform").addEventListener("submit", function(event) {
    let isValid = true;

    // Name validation
    const name = document.getElementById("name").value.trim();
    if (name === "") {
        document.getElementById("nameerror").textContent = "Name is required.";
        isValid = false;
    } else {
        document.getElementById("nameerror").textContent = "";
    }

    // Phone validation
    const phone = document.getElementById("phone_number").value.trim();
    if (phone === "") {
        document.getElementById("phone_numbererror").textContent = "Phone number is required.";
        isValid = false;
    } else if (!/^\d{10}$/.test(phone)) {
        document.getElementById("phone_numbererror").textContent = "Phone number must be 10 digits.";
        isValid = false;
    } else {
        document.getElementById("phone_numbererror").textContent = "";
    }

    // Email validation
    const email = document.getElementById("email").value.trim();
    if (email === "") {
        document.getElementById("emailerror").textContent = "Email is required.";
        isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById("emailerror").textContent = "Invalid email format.";
        isValid = false;
    } else {
        document.getElementById("emailerror").textContent = "";
    }

    // Password validation
    const password = document.getElementById("password").value.trim();
    if (password === "") {
        document.getElementById("passworderror").textContent = "Password is required.";
        isValid = false;
    } else if (password.length < 6 || !/[A-Z]/.test(password) || !/[!@#$%^&*]/.test(password)) {
        document.getElementById("passworderror").textContent =
            "Password must be 6+ characters, include uppercase and special character.";
        isValid = false;
    } else {
        document.getElementById("passworderror").textContent = "";
    }

    if (!isValid) {
        event.preventDefault();
    }
});
</script>

<?php
// PHP code to handle signup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handcraft";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (name, email, phone_number, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $phone_number, $password);
        if ($stmt->execute()) {
            echo "<script>alert('Signup Successful!'); window.location.href='get.php';</script>";
        } else {
            echo "<script>alert('Email or Phone already exists.');</script>";
        }
        $stmt->close();
    }
}
$conn->close();
?>

</body>
</html>
