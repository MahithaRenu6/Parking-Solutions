<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Parking Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: linear-gradient(to bottom, #34495e, #2c3e50, #455a64);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "handcraft";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        echo "<div class='text-red-500 font-semibold text-center p-4 bg-white rounded-md shadow-md mt-8'>Connection failed: " . $conn->connect_error . "</div>";
    } else {
        $location = $_POST['location'];
        $date = $_POST['date'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $vehicle_type = $_POST['vehicle_type'];
        $plate_number = $_POST['plate_number'];
        $parking_type = $_POST['parking_type'];

        $stmt = $conn->prepare("INSERT INTO bookings (location, date, start_time, end_time, vehicle_type, plate_number, parking_type) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $location, $date, $start_time, $end_time, $vehicle_type, $plate_number, $parking_type);

        if ($stmt->execute()) {
            echo "<script>
            alert('Booking done! You\'re going to the payment process.');
            window.location.href = 'payment.html';
            </script>";
        } else {
            echo "<div class='text-red-500 font-semibold text-center p-4 bg-white rounded-md shadow-md mt-8'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<div class="flex flex-col md:flex-row w-full max-w-5xl mx-4 bg-white rounded-xl shadow-lg overflow-hidden">
    <!-- Image Section -->
    <div class="md:w-1/2 h-80 md:h-auto">
        <img src="bluecar.webp" alt="Blue Car Parking" class="w-full h-full object-cover">
    </div>

    <!-- Form Section -->
    <div class="md:w-1/2 p-8 bg-white text-black">
        <h2 class="text-3xl font-bold text-center text-sky-800 mb-8">Find Affordable Parking</h2>
        <form method="POST" action="" class="grid grid-cols-1 gap-6">
            <div>
                <label for="location" class="block font-medium text-gray-700">Location</label>
                <input type="text" id="location" name="location" placeholder="Address, city, or venue" required
                       class="p-3 w-full border border-gray-300 rounded-md"/>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="date" class="block font-medium text-gray-700">Date</label>
                    <input type="date" id="date" name="date" required
                           class="p-3 w-full border border-gray-300 rounded-md"/>
                </div>
                <div>
                    <label for="start-time" class="block font-medium text-gray-700">Start Time</label>
                    <input type="time" id="start-time" name="start_time" required
                           class="p-3 w-full border border-gray-300 rounded-md"/>
                </div>
            </div>

            <div>
                <label for="end-time" class="block font-medium text-gray-700">End Time</label>
                <input type="time" id="end-time" name="end_time" required
                       class="p-3 w-full border border-gray-300 rounded-md"/>
            </div>

            <div>
                <label for="vehicle-type" class="block font-medium text-gray-700">Vehicle Type</label>
                <select id="vehicle-type" name="vehicle_type" required
                        class="p-3 w-full border border-gray-300 rounded-md">
                    <option value="">Select Vehicle Type</option>
                    <option value="Car">Car</option>
                    <option value="Motorcycle">Motorcycle</option>
                    <option value="Truck">Truck</option>
                    <option value="Electric Vehicle">Electric Vehicle</option>
                </select>
            </div>

            <div>
                <label for="plate-number" class="block font-medium text-gray-700">Vehicle Number</label>
                <input type="text" id="plate-number" name="plate_number" placeholder="Enter License Plate" required
                       class="p-3 w-full border border-gray-300 rounded-md"/>
            </div>

            <div>
                <label for="parking-type" class="block font-medium text-gray-700">Parking Preference</label>
                <select id="parking-type" name="parking_type" required
                        class="p-3 w-full border border-gray-300 rounded-md">
                    <option value="">Select Parking Type</option>
                    <option value="Covered Parking">Covered Parking</option>
                    <option value="Open Parking">Open Parking</option>
                    <option value="Handicap Accessible">Handicap Accessible</option>
                    <option value="EV Charging Station">EV Charging Station</option>
                </select>
            </div>

            <div class="text-center mt-4">
                <button type="submit"
                        class="bg-sky-800 hover:bg-sky-700 text-white px-6 py-3 rounded-md font-semibold transition duration-200">
                    Proceed to Booking
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
