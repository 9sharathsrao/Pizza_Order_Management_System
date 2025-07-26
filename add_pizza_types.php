<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "pizza_order_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type_name = $_POST["type_name"];
    $sharing_count = $_POST["sharing_count"];

    // SQL insertion query with timestamps
    $sql = "INSERT INTO PizzaTypes (TypeName, SharingCount) VALUES (?, ?);";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $type_name, $sharing_count);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: pizza_types_list.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
