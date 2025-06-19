<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        // ✅ Check if email or username already exists
        $checkQuery = "SELECT * FROM user_tbl WHERE Username = ?";
        if ($stmt = $conn->prepare($checkQuery)) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "exists"; // 🔴 Username or Email already exists
                $stmt->close();
                $conn->close();
                exit();
            }
            $stmt->close();
        }

        // ✅ Insert new user if no duplicate found
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO user_tbl (Username, Password) VALUES (?, ?)";
        if ($stmt = $conn->prepare($insertQuery)) {
            $userType = 0; // Default user type
            $stmt->bind_param("ss",$username, $hashedPassword);

            if ($stmt->execute()) {
                echo "success"; // ✅ Registration successful
            } else {
                echo "error"; // ❌ Database error
            }
            $stmt->close();
        } else {
            echo "error"; // ❌ Error preparing statement
        }
    } else {
        echo "All fields are required!";
    }
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>
