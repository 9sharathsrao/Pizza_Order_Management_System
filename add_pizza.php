
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
    $pizza_name = $_POST["pizza_name"];
    $price = $_POST["price"];

    // SQL insertion query with timestamps
    $sql = "INSERT INTO Pizzas (PizzaName, Price) VALUES (?, ?);";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $pizza_name, $price);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: pizza_list.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>