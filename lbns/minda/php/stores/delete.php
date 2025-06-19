<?php
require '../../../connection/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    if (!empty($id)) {
        $stmt = $conn->prepare("DELETE FROM stores_tbl WHERE Store_ID = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Store deleted successfully."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to delete store."]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid store ID."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}

$conn->close();
?>
