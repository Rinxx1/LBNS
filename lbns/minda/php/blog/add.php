<?php
require '../../../connection/db.php';
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST['blogTitle'] ?? '');
    $description = trim($_POST['blogDesc'] ?? '');
    $link = trim($_POST['blogLink'] ?? '');
    $imageFileName = '';

    if (!empty($title) && !empty($description) && !empty($link)) {
        // Handle image upload
        if (isset($_FILES['blogImage']) && $_FILES['blogImage']['error'] === 0) {
            $uploadDir = '../../../../Images/blogs/';
            $fileName = uniqid() . '_' . basename($_FILES['blogImage']['name']);
            $targetPath = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES['blogImage']['tmp_name'], $targetPath)) {
                $imageFileName = $fileName;
            } else {
                echo json_encode(["status" => "error", "message" => "Image upload failed."]);
                exit;
            }
        }

        // Insert into blogs_tbl
        $stmt = $conn->prepare("INSERT INTO blogs_tbl (Blog_Name, Blog_Desc, Blog_Link, Blog_Image_Loc) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $description, $link, $imageFileName);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Blog added successfully."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to add blog."]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
    }

    $conn->close();
}
?>
