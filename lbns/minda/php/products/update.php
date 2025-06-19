<?php
require '../../../connection/db.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productID'] ?? 0;
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
    $removedThumbnails = $_POST['removedThumbnails'] ?? '';
    

    if (!$productId) {
        echo json_encode(["status" => "error", "message" => "Missing product ID."]);
        exit;
    }

    try {
        // Update product_tbl
        $stmt = $conn->prepare("UPDATE product_tbl SET 
            Product_Name=?, Product_Desc=?, Product_Ingredients=?, Product_Shelflife=?, 
            Product_Weight=?, Product_Price=?, Product_Price_From=?, Product_ShopeeLink=?, Product_LazadaLink=?, 
            Product_BestSeller=?, Product_Category_ID=?
            WHERE Product_ID=?");
        $stmt->bind_param("sssssddssiii", $name, $desc, $ingredients, $shelflife, $weight, $price, $priceFrom, $shopee, $lazada, $bestseller, $category, $productId);
        if (!$stmt->execute()) throw new Exception("Update failed: " . $stmt->error);
        $stmt->close();

        // Remove deleted thumbnails
        if (!empty($removedThumbnails)) {
            $thumbs = explode(",", $removedThumbnails);
            foreach ($thumbs as $img) {
                $img = trim($img);
                if (!$img) continue;

                $stmt = $conn->prepare("DELETE FROM product_img_tbl WHERE Product_Image_Loc = ? AND Product_ID = ?");
                $stmt->bind_param("si", $img, $productId);
                $stmt->execute();
                $stmt->close();

                $filePath = "../../../../Images/thumbnail/" . $img;
                if (file_exists($filePath)) {
                    unlink($filePath); // delete from disk
                }
            }
        }

        // Upload new thumbnails
        if (isset($_FILES['images'])) {
            $thumbPath = '../../../../Images/thumbnail/';
            foreach ($_FILES['images']['tmp_name'] as $index => $tmpPath) {
                $filename = uniqid() . '_' . basename($_FILES['images']['name'][$index]);
                $destination = $thumbPath . $filename;

                if (move_uploaded_file($tmpPath, $destination)) {
                    $stmt = $conn->prepare("INSERT INTO product_img_tbl (Product_Image_Loc, Product_ID) VALUES (?, ?)");
                    $stmt->bind_param("si", $filename, $productId);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }

        // Upload new slideshow image (replace old)
        // Initialize slide name (optional image)
        $slideName = null;

        if (isset($_FILES['slideshowImage']) && $_FILES['slideshowImage']['error'] === 0) {
            $slidePath = '../../../../Images/slideshow/';
            $slideName = uniqid() . '_' . basename($_FILES['slideshowImage']['name']);
            $slideDest = $slidePath . $slideName;

            if (move_uploaded_file($_FILES['slideshowImage']['tmp_name'], $slideDest)) {
                // Delete old slideshow image
                $checkOld = $conn->prepare("SELECT Index_Image_Loc FROM product_index_tbl WHERE Product_ID = ?");
                $checkOld->bind_param("i", $productId);
                $checkOld->execute();
                $checkOld->bind_result($oldSlide);
                if ($checkOld->fetch() && file_exists($slidePath . $oldSlide)) {
                    unlink($slidePath . $oldSlide);
                }
                $checkOld->close();
            } else {
                $slideName = null; // Prevent using invalid name
            }
        }

        // Update or Insert Index Description and (optional) Image
        $check = $conn->prepare("SELECT Index_ID FROM product_index_tbl WHERE Product_ID = ?");
        $check->bind_param("i", $productId);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            if ($slideName) {
                $update = $conn->prepare("UPDATE product_index_tbl SET Index_Description=?, Index_Image_Loc=? WHERE Product_ID=?");
                $update->bind_param("ssi", $slideshowDesc, $slideName, $productId);
            } else {
                $update = $conn->prepare("UPDATE product_index_tbl SET Index_Description=? WHERE Product_ID=?");
                $update->bind_param("si", $slideshowDesc, $productId);
            }
            $update->execute();
            $update->close();
        } else {
            // Insert only when no record exists (must include image and desc)
            $insert = $conn->prepare("INSERT INTO product_index_tbl (Index_Description, Index_Image_Loc, Product_ID) VALUES (?, ?, ?)");
            $imageToInsert = $slideName ?? ''; // fallback empty image name
            $insert->bind_param("ssi", $slideshowDesc, $imageToInsert, $productId);
            $insert->execute();
            $insert->close();
        }

        $check->close();


        echo json_encode(["status" => "success", "message" => "Product updated successfully."]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}

$conn->close();
