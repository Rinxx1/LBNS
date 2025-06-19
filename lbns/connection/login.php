<?php
session_start();
require 'db.php'; // Database connection

header('Content-Type: application/json'); // Set response as JSON

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT User_ID, Password FROM user_tbl WHERE Username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $hashedPassword);
            $stmt->fetch();

            if (password_verify($password, $hashedPassword)) {
                // Set session
                $_SESSION['user_id'] = $user_id;

                echo json_encode([
                    "status" => "success",
                    "message" => "Login successful"
                ]);
                exit;
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "Incorrect Username or Password"
                ]);
                exit;
            }
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Incorrect Username or Password"
            ]);
            exit;
        }

        $stmt->close();
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required!"
        ]);
        exit;
    }
}

$conn->close();
?>
