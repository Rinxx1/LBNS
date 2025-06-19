<?php
header('Content-Type: application/json'); // Ensure correct response type
require '../../../connection/db.php';



$response = ["status" => "error", "message" => "Unknown error occurred."];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['productName'] ?? '';
    $desc = $_POST['productDesc'] ?? '';
    $ingredients = $_POST['productIngredients'] ?? '';
    $shelflife = $_POST['productShelflife'] ?? '';
    $weight = $_POST['productWeight'] ?? '';
    $price = $_POST['productPrice'] ?? '';
    $priceFrom = $_POST['productPriceFrom'] ?? '';
    $shopee = $_POST['productShopee'] ?? '';
    $lazada = $_POST['productLazada'] ?? '';
    $bestseller = isset($_POST['productBestseller']) ? 1 : 0;
    $category = $_POST['productCategory'] ?? 0;
    $slideshowDesc = $_POST['slideshowDescription'] ?? '';



    try {
        $stmt = $conn->prepare("INSERT INTO product_tbl (
            Product_Name, Product_Desc, Product_Ingredients, Product_Shelflife, Product_Weight,
            Product_Price,Product_Price_From, Product_ShopeeLink, Product_LazadaLink, Product_BestSeller, Product_Category_ID
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) throw new Exception("Prepare failed: " . $conn->error);

        $stmt->bind_param("sssssddssii", $name, $desc, $ingredients, $shelflife, $weight, $price, $priceFrom, $shopee, $lazada, $bestseller, $category);

        if (!$stmt->execute()) throw new Exception("Execute failed: " . $stmt->error);

        $productID = $stmt->insert_id;
        $stmt->close();

        // Upload thumbnails
        $thumbPath = '../../../../Images/thumbnail/';
        if (isset($_FILES['productImages'])) {
            foreach ($_FILES['productImages']['tmp_name'] as $index => $tmpPath) {
                $filename = uniqid() . '_' . basename($_FILES['productImages']['name'][$index]);
                $destination = $thumbPath . $filename;

                if (move_uploaded_file($tmpPath, $destination)) {
                    $stmt = $conn->prepare("INSERT INTO product_img_tbl (Product_Image_Loc, Product_ID) VALUES (?, ?)");
                    $stmt->bind_param("si", $filename, $productID);
                    $stmt->execute();
                    $stmt->close();
                } else {
                }
            }
        }

        // Upload slideshow image
        if (isset($_FILES['slideshowImage']) && $_FILES['slideshowImage']['error'] === 0) {
            $slidePath = '../../../../Images/slideshow/';
            $slideName = uniqid() . '_' . basename($_FILES['slideshowImage']['name']);
            $slideDest = $slidePath . $slideName;

            if (move_uploaded_file($_FILES['slideshowImage']['tmp_name'], $slideDest)) {
                $stmt = $conn->prepare("INSERT INTO product_index_tbl (Index_Description, Index_Image_Loc, Product_ID) VALUES (?, ?, ?)");
                $stmt->bind_param("ssi", $slideshowDesc, $slideName, $productID);
                $stmt->execute();
                $stmt->close();
            } else {
            }
        }

        $response = ["status" => "success", "message" => "Product added successfully."];
    } catch (Exception $e) {
        $response = ["status" => "error", "message" => $e->getMessage()];
    }
} else {
    $response = ["status" => "error", "message" => "Invalid request method."];
}

$conn->close();
echo json_encode($response);
exit;
