<?php
session_start();
require 'db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo 'unauthorized';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'] ?? '';
    $userId = $_SESSION['user_id'];
    
    if ($action === 'verify_password') {
        $currentPassword = $_POST['current_password'] ?? '';
        
        if (empty($currentPassword)) {
            echo 'missing_data';
            exit();
        }
        
        // Get current user's hashed password from database
        $query = "SELECT Password FROM user_tbl WHERE User_ID = ?";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $hashedPassword = $row['Password'];
                
                // Verify the current password
                if (password_verify($currentPassword, $hashedPassword)) {
                    echo 'valid';
                } else {
                    echo 'invalid';
                }
            } else {
                echo 'user_not_found';
            }
            $stmt->close();
        } else {
            echo 'database_error';
        }
        
    } elseif ($action === 'update_password') {
        $newPassword = $_POST['new_password'] ?? '';
        
        if (empty($newPassword)) {
            echo 'missing_data';
            exit();
        }
        
        // Validate password length
        if (strlen($newPassword) < 6) {
            echo 'password_too_short';
            exit();
        }
        
        // Hash the new password
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        
        // Update password in database
        $updateQuery = "UPDATE user_tbl SET Password = ? WHERE User_ID = ?";
        if ($stmt = $conn->prepare($updateQuery)) {
            $stmt->bind_param("si", $hashedNewPassword, $userId);
            
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    echo 'success';
                } else {
                    echo 'no_changes';
                }
            } else {
                echo 'update_failed';
            }
            $stmt->close();
        } else {
            echo 'database_error';
        }
        
    } else {
        echo 'invalid_action';
    }
    
    $conn->close();
} else {
    echo 'invalid_request';
}
?>
