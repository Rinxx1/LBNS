<?php
require '../../../connection/db.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'] ?? 0;

    if (!$productId) {
        echo json_encode(["status" => "error", "message" => "Product ID missing."]);
        exit;
    }

    try {
        // Delete thumbnails from disk and DB
        $thumbQuery = $conn->prepare("SELECT Product_Image_Loc FROM product_img_tbl WHERE Product_ID = ?");
        $thumbQuery->bind_param("i", $productId);
        $thumbQuery->execute();
        $thumbResult = $thumbQuery->get_result();

        while ($thumb = $thumbResult->fetch_assoc()) {
            $path = "../../../../Images/thumbnail/" . $thumb['Product_Image_Loc'];
            if (file_exists($path)) unlink($path);
        }
        $thumbQuery->close();

        $stmt = $conn->prepare("DELETE FROM product_img_tbl WHERE Product_ID = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $stmt->close();

        // Delete slideshow image and DB record
        $slideQuery = $conn->prepare("SELECT Index_Image_Loc FROM product_index_tbl WHERE Product_ID = ?");
        $slideQuery->bind_param("i", $productId);
        $slideQuery->execute();
        $slideQuery->bind_result($slideImage);
        if ($slideQuery->fetch()) {
            $slidePath = "../../../../Images/slideshow/" . $slideImage;
            if (file_exists($slidePath)) unlink($slidePath);
        }
        $slideQuery->close();

        $stmt = $conn->prepare("DELETE FROM product_index_tbl WHERE Product_ID = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $stmt->close();

        // Finally, delete product itself
        $stmt = $conn->prepare("DELETE FROM product_tbl WHERE Product_ID = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $stmt->close();

        echo json_encode(["status" => "success", "message" => "Product deleted successfully."]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
$conn->close();
?>
