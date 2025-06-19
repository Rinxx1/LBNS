<?php
require 'lbns/connection/db.php'; // adjust the path if needed

require_once 'product-token.php';
$token = $_GET['id'] ?? null;
$productId = decodeProductId($token);

if (!$productId) {
    echo "<h3 class='text-danger'>No product selected.</h3>";
    exit;
}

// Fetch product info
$productSql = "SELECT * FROM product_tbl WHERE Product_ID = ?";
$stmt = $conn->prepare($productSql);
$stmt->bind_param("i", $productId);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();
$stmt->close();

// Fetch thumbnails
$thumbSql = "SELECT Product_Image_Loc FROM product_img_tbl WHERE Product_ID = ?";
$stmt = $conn->prepare($thumbSql);
$stmt->bind_param("i", $productId);
$stmt->execute();
$thumbnails = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>
