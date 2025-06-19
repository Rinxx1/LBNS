<?php
require '../../../connection/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $blogId = $_POST['blogId'] ?? '';

    if (!empty($blogId)) {
        // Step 1: Get the image filename from the database
        $getImage = $conn->prepare("SELECT Blog_Image_Loc FROM blogs_tbl WHERE Blog_ID = ?");
        $getImage->bind_param("i", $blogId);
        $getImage->execute();
        $getImage->bind_result($imageName);
        $getImage->fetch();
        $getImage->close();

        // Step 2: Delete the image file from disk
        if (!empty($imageName)) {
            $filePath = '../../../../Images/blogs/' . $imageName;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Step 3: Delete the blog from the table
        $stmt = $conn->prepare("DELETE FROM blogs_tbl WHERE Blog_ID = ?");
        $stmt->bind_param("i", $blogId);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Blog deleted successfully."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to delete blog."]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid blog ID."]);
    }

    $conn->close();
}
?>
