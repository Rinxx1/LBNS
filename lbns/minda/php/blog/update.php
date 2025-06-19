<?php
require '../../../connection/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['blogId'] ?? '';
    $title = trim($_POST['blogTitle'] ?? '');
    $desc = trim($_POST['blogDesc'] ?? '');
    $link = trim($_POST['blogLink'] ?? '');
    $imageFileName = '';

    if (!empty($id) && !empty($title) && !empty($desc) && !empty($link)) {
        // Check if a new image is uploaded
        if (isset($_FILES['blogImage']) && $_FILES['blogImage']['error'] === 0) {
            $uploadDir = '../../../../Images/blogs/';
            $fileName = uniqid() . '_' . basename($_FILES['blogImage']['name']);
            $targetPath = $uploadDir . $fileName;

            // Move uploaded file
            if (move_uploaded_file($_FILES['blogImage']['tmp_name'], $targetPath)) {
                $imageFileName = $fileName;

                // Fetch old image filename to delete
                $getOldImage = $conn->prepare("SELECT Blog_Image_Loc FROM blogs_tbl WHERE Blog_ID = ?");
                $getOldImage->bind_param("i", $id);
                $getOldImage->execute();
                $getOldImage->bind_result($oldImage);
                if ($getOldImage->fetch() && !empty($oldImage)) {
                    $oldPath = $uploadDir . $oldImage;
                    if (file_exists($oldPath)) {
                        unlink($oldPath); // Delete old image
                    }
                }
                $getOldImage->close();

                // Update with new image
                $stmt = $conn->prepare("UPDATE blogs_tbl SET Blog_Name = ?, Blog_Desc = ?, Blog_Link = ?, Blog_Image_Loc = ? WHERE Blog_ID = ?");
                $stmt->bind_param("ssssi", $title, $desc, $link, $imageFileName, $id);
            } else {
                echo json_encode(["status" => "error", "message" => "Image upload failed."]);
                exit;
            }
        } else {
            // No new image, update only text
            $stmt = $conn->prepare("UPDATE blogs_tbl SET Blog_Name = ?, Blog_Desc = ?, Blog_Link = ? WHERE Blog_ID = ?");
            $stmt->bind_param("sssi", $title, $desc, $link, $id);
        }

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Blog updated successfully."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to update blog."]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
    }

    $conn->close();
}
?>
