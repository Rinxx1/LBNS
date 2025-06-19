<?php
require '../../../connection/db.php';

$response = [
    "products" => 0,
    "categories" => 0,
    "stores" => 0,
    "blogs" => 0
];

try {
    // Count products
    $product = $conn->query("SELECT COUNT(*) as total FROM product_tbl");
    $response['products'] = $product->fetch_assoc()['total'];

    // Count categories
    $category = $conn->query("SELECT COUNT(*) as total FROM product_category_tbl");
    $response['categories'] = $category->fetch_assoc()['total'];

    // Count stores
    $store = $conn->query("SELECT COUNT(*) as total FROM stores_tbl");
    $response['stores'] = $store->fetch_assoc()['total'];

    // Count blogs
    $blog = $conn->query("SELECT COUNT(*) as total FROM blogs_tbl");
    $response['blogs'] = $blog->fetch_assoc()['total'];

    echo json_encode($response);
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

$conn->close();
?>
