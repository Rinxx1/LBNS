<?php
require '../../../connection/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);

    if (!empty($name)) {
        $stmt = $conn->prepare("INSERT INTO product_category_tbl (Product_Category_Name) VALUES (?)");
        $stmt->bind_param("s", $name);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Category added successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to add category"]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Category name is required"]);
    }

    $conn->close();
}
