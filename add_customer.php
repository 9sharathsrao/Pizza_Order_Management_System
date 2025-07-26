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
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    // SQL insertion query with timestamps
    $sql = "INSERT INTO Customers (FirstName, LastName, Email, PhoneNumber, Gender, Address) VALUES (?, ?, ?, ?, ?, ?);";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $gender, $address);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: customer_list.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
