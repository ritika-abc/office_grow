<?php
// searchProducts.php

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

// Get search query from Ajax
$query = isset($_GET['q']) ? $_GET['q'] : '';

// If there is a query, fetch the data
if ($query != '') {
    $sql = "SELECT  `buyleads_id` , COUNT(buyleads_id) AS queiry_for, `queiry_for` FROM  buyleads WHERE queiry_for LIKE '%$query%'  ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Loop through and output data as options for the select
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["queiry_for"] . "'>" . $row["queiry_for"] . "</option>";
        }
    } else {
        echo "<option value=''>No results found</option>";
    }
}

$conn->close();
?>
