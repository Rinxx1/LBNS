<?php
require '../../../connection/db.php'; // Ensure your DB connection file is properly referenced

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $city = trim($_POST['storeCity'] ?? '');
    $location = trim($_POST['storeLocation'] ?? '');
    $email = trim($_POST['storeEmail'] ?? '');
    $hours = trim($_POST['storeHours'] ?? '');

    if (!empty($city) && !empty($location) && !empty($email) && !empty($hours)) {
        $stmt = $conn->prepare("INSERT INTO stores_tbl (Store_City, Store_Location, Store_Email, Store_OpeningHours) VALUES (?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("ssss", $city, $location, $email, $hours);
            
            if ($stmt->execute()) {
                echo json_encode(["status" => "success", "message" => "Store added successfully!"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Failed to add store."]);
            }

            $stmt->close();
        } else {
            echo json_encode(["status" => "error", "message" => "Database error: Unable to prepare statement."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
    }

    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
