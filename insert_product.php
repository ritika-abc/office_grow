<?php
// Database connection
$host = 'localhost';
$dbname = 'b2b_new_project';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    
    $values = $_POST['values'];

    try {
        // Insert product into products table
        $stmt = $pdo->prepare('INSERT INTO product (product_name, price) VALUES (:product_name, :price)');
        $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->execute();

        // Get the ID of the newly inserted product
        $product_id = $pdo->lastInsertId();

        // Insert attributes into attributes table
        $stmt = $pdo->prepare('INSERT INTO product_attributes (product_id, attribute_name, attribute_value) VALUES (:product_id, :attribute_name, :attribute_value)');
        
        foreach ($attributes as $index => $attribute) {
            $attribute_value = $values[$index];
            
            $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
            $stmt->bindParam(':attribute_name', $attribute, PDO::PARAM_STR);
            $stmt->bindParam(':attribute_value', $attribute_value, PDO::PARAM_STR);
            $stmt->execute();
        }

        echo "Product and attributes inserted successfully.";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
