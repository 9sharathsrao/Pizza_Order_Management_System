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
    $pizza_id = $_POST["pizza_id"];
    $customer_id = $_POST["customer_id"];
    $pizza_type_id = $_POST["pizza_type_id"];
    $topping_id = $_POST["topping_id"];
    $quantity = $_POST["quantity"];
    $subtotal = $_POST["subtotal"];
    $payment_date = $_POST["payment_date"];
    $payment_method = $_POST["payment_method"];

    // SQL insertion query with timestamps
    $sql = "INSERT INTO Orders (PizzaID, CustomerID, PizzaTypeID, ToppingID, Quantity, Subtotal, PaymentDate, PaymentMethod) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $pizza_id, $customer_id, $pizza_type_id, $topping_id, $quantity, $subtotal, $payment_date, $payment_method);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: pizza_orders_list.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
