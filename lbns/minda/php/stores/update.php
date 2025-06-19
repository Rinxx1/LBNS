<?php
require '../../../connection/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id       = $_POST['id'];
    $city     = $_POST['city'];
    $location = $_POST['location'];
    $email    = $_POST['email'];
    $hours    = $_POST['hours'];

    if (!empty($id) && !empty($city) && !empty($location) && !empty($email) && !empty($hours)) {
        $stmt = $conn->prepare("UPDATE stores_tbl SET Store_City=?, Store_Location=?, Store_Email=?, Store_OpeningHours=? WHERE Store_ID=?");
        $stmt->bind_param("ssssi", $city, $location, $email, $hours, $id);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Store updated successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update store.']);
        }

        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}

$conn->close();
?>
