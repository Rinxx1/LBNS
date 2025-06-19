<?php
require '../../../connection/db.php';

$sql = "SELECT Product_Category_ID, Product_Category_Name FROM product_category_tbl";
$result = $conn->query($sql);

$categories = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $categories[] = $row;
  }
}

echo json_encode($categories);
$conn->close();
