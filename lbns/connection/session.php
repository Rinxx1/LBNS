<?php
session_start();
require 'db.php'; // Database connection

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php"); // Redirect to login if not logged in
    exit();
}

// Fetch user details
$user_id = $_SESSION['user_id'];

$sql = "SELECT  Password, Username, User_ID FROM user_tbl WHERE User_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($password, $username, $usrID);
$stmt->fetch();
$stmt->close();
$conn->close();
?>
