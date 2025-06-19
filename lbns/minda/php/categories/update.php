<?php
require '../../../connection/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = trim($_POST['name']);

    if (!empty($id) && !empty($name)) {
        $stmt = $conn->prepare("UPDATE product_category_tbl SET Product_Category_Name = ? WHERE Product_Category_ID = ?");
        $stmt->bind_param("si", $name, $id);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Category updated successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to update category"]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Missing fields"]);
    }

    $conn->close();
}
