<?php
// Database credentials
$servername = "localhost"; // Change this to your server name if not localhost
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "food_order"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Example query to fetch data from each table
// You can replace the SQL queries below with your actual queries as needed

// Fetching users
$sql_users = "SELECT * FROM userstbl";
$result_users = $conn->query($sql_users);

if ($result_users->num_rows > 0) {
    while($row = $result_users->fetch_assoc()) {
        echo "User: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results from userstbl";
}

// Fetching orders
$sql_orders = "SELECT * FROM ordertbl";
$result_orders = $conn->query($sql_orders);

if ($result_orders->num_rows > 0) {
    while($row = $result_orders->fetch_assoc()) {
        echo "Order ID: " . $row["id"] . " - Details: " . $row["details"] . "<br>";
    }
} else {
    echo "0 results from ordertbl";
}

// Fetching food items
$sql_food = "SELECT * FROM foodtbl";
$result_food = $conn->query($sql_food);

if ($result_food->num_rows > 0) {
    while($row = $result_food->fetch_assoc()) {
        echo "Food ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results from foodtbl";
}

// Fetching categories
$sql_category = "SELECT * FROM categorytbl";
$result_category = $conn->query($sql_category);

if ($result_category->num_rows > 0) {
    while($row = $result_category->fetch_assoc()) {
        echo "Category ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results from categorytbl";
}

// Fetching admins
$sql_admin = "SELECT * FROM admintbl";
$result_admin = $conn->query($sql_admin);

if ($result_admin->num_rows > 0) {
    while($row = $result_admin->fetch_assoc()) {
        echo "Admin ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results from admintbl";
}

// Close connection
$conn->close();
?>
