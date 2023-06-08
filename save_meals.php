<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meal_planning";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the submitted meal plans
$mealPlans = $_POST;

// Prepare and execute the SQL query to save the meal plans
$stmt = $conn->prepare("INSERT INTO meal_plans (day, meal) VALUES (?, ?)");
$stmt->bind_param("ss", $day, $meal);

foreach ($mealPlans as $day => $meal) {
    if (!empty($meal)) {
        $stmt->execute();
    }
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();

// Redirect back to the index.php page
header("Location: index.php");
exit();
?>
