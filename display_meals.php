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

// Query to retrieve meal plans from the database
$sql = "SELECT * FROM meal_plans ORDER BY day";
$result = $conn->query($sql);

// Check if any meal plans are found
if ($result->num_rows > 0) {
    // Output meal plans for each day of the week
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["day"] . ":</strong> " . $row["meal"] . "</p>";
    }
} else {
    echo "No meal plans found.";
}

// Close the database connection
$conn->close();
?>
