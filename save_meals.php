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
$stmt = $conn->prepare("INSERT INTO meal_plans (day, meal_type, meal) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $day, $mealType, $meal);

foreach ($mealPlans as $key => $meal) {
    $parts = explode("-", $key);
    $day = $parts[0];
    $mealType = $parts[1];

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
