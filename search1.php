<?php
// Initialize your database connection here
$servername = "localhost";
$username = "u496524825_new_project";
$password = "Rajnitish1234";
$dbname = "u496524825_export_db";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchType = $_POST['searchType'];
    $query = $_POST['query'];
    
    // Perform your search query based on $searchType and $query
    // Example: Execute a SQL query using PDO
    
    if ($searchType === 'buyleads') {
        
        $stmt = $pdo->prepare("SELECT queiry_for, COUNT(*) as total_sales FROM buyleads WHERE product_name LIKE :query or queiry_for LIKE :query");
    } else if ($searchType === 'product') {
        $stmt = $pdo->prepare("SELECT * FROM product WHERE product_name LIKE :query");
    } else {
        die("Invalid search type");
    }
    
    $stmt->execute(['query' => "%$query%"]);
    
    // Fetch and display results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($searchType === 'product') {
        if ($results) {
            foreach ($results as $result) {
                // Convert product name to lowercase and replace spaces with '+'
                $productName = strtolower($result['product_name']);
                $productName = str_replace(" ", "+", $productName);

                echo '<div class="result bg-white">';
                echo '<a class="btn text-capitalize btn-light bg-outline-light w-100 border m-1 btn-sm" href="https://growindiaexport.com/search-product.php?searchType=product&query=' . $productName . '">' . htmlspecialchars($result['product_name']) . '</a>';
                echo '</div>';
            }
        } else {
            echo '<p>No results found.</p>';
        }
    } else if ($searchType === 'buyleads') {
        if ($results) {
            foreach ($results as $result) {
                 $product_name = strtolower($result['queiry_for']);
                $product_name = str_replace(" ", "+", $product_name);
                
                echo '<div class="result bg-white">';
                echo '<a class="btn text-capitalize btn-light bg-outline-light w-100 border m-1 btn-sm" href="https://growindiaexport.com/search-buyleads.php?searchType=buyleads&query=' . $product_name . '">' . htmlspecialchars($result['queiry_for']) . '</a>';
                echo '</div>';
            }
        } else {
            echo '<p>No results found.</p>';
        }
    }
}
?>
