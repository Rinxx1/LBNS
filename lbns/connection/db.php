<?php
// Database connection credentials
$servername = "localhost"; // Change if using a different host
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "lbns_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>