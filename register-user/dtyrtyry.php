<?php
// Assuming you have a database connection set up
$searchTerm = $_GET['search'] ?? ''; // Get the search term from URL or form input
$keywords = explode(" ", strtolower($searchTerm)); // Split the search term into keywords

// Prepare the SQL query to match products containing the keywords
$sql = "SELECT * FROM products WHERE 1";

// Loop through each keyword and add a LIKE condition
foreach ($keywords as $keyword) {
    $sql .= " AND (LOWER(product_name) LIKE '%" . mysqli_real_escape_string($conn, $keyword) . "%' 
             OR LOWER(product_description) LIKE '%" . mysqli_real_escape_string($conn, $keyword) . "%')";
}

// Execute the query
$result = mysqli_query($conn, $sql);

// Fetch and display results
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>" . $row['product_name'] . "</div>";
        // You can also display other product details here
    }
} else {
    echo "No products found.";
}
?>
