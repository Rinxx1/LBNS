<?php
require '../../../connection/db.php';

header('Content-Type: application/json');

// Fetch 5 most recent products
$query = "SELECT Product_Name, Product_Desc, Product_Weight, Product_Price 
          FROM product_tbl 
          ORDER BY Product_ID DESC 
          LIMIT 5";

$result = $conn->query($query);
$products = [];

while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);
$conn->close();
?>
