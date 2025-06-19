<?php
require '../../../connection/db.php';

$products = [];

$sql = "SELECT * FROM product_tbl ORDER BY Product_ID DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $productId = $row['Product_ID'];

    // Fetch thumbnails
    $thumbSql = "SELECT Product_Image_Loc FROM product_img_tbl WHERE Product_ID = ?";
    $thumbStmt = $conn->prepare($thumbSql);
    $thumbStmt->bind_param("i", $productId);
    $thumbStmt->execute();
    $thumbResult = $thumbStmt->get_result();

    $thumbnails = [];
    while ($thumbRow = $thumbResult->fetch_assoc()) {
        $thumbnails[] = $thumbRow['Product_Image_Loc'];
    }
    $thumbStmt->close();

    // Fetch slideshow data
    $slideSql = "SELECT Index_Description, Index_Image_Loc FROM product_index_tbl WHERE Product_ID = ?";
    $slideStmt = $conn->prepare($slideSql);
    $slideStmt->bind_param("i", $productId);
    $slideStmt->execute();
    $slideResult = $slideStmt->get_result();

    $slideshow = $slideResult->fetch_assoc() ?? ['Index_Description' => '', 'Index_Image_Loc' => ''];
    $slideStmt->close();

    // Add combined data
    $row['Thumbnails'] = $thumbnails;
    $row['Slideshow_Description'] = $slideshow['Index_Description'];
    $row['Slideshow_Image'] = $slideshow['Index_Image_Loc'];

    $products[] = $row;
}

echo json_encode($products);
$conn->close();
?>
