<?php
// addProduct.php

// Database connection (replace with your own)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "growindia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected product from the Ajax request
$product = isset($_GET['product']) ? $_GET['product'] : '';

// Insert product into the database (optional, if you want to store the selection)
if ($product != '') {
    $sql = "INSERT INTO user (product_name) VALUES ('$product')";
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
