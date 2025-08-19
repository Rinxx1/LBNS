<?php
// Load environment variables from .env file
if (!function_exists('loadEnv')) {
    function loadEnv($filePath) {
        if (!file_exists($filePath)) {
            die("Environment file not found: " . $filePath);
        }
        
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue; // Skip comments
            }
            
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);
            
            if (!array_key_exists($name, $_ENV)) {
                $_ENV[$name] = $value;
            }
        } 
    }
}

// Load environment variables only once
if (!isset($_ENV['DB_HOST'])) {
    loadEnv(__DIR__ . '/.env');
}

// Database connection credentials from environment
$servername = $_ENV['DB_HOST'] ?? die('DB_HOST not set in environment');
$username = $_ENV['DB_USERNAME'] ?? die('DB_USERNAME not set in environment');
$password = $_ENV['DB_PASSWORD'] ?? die('DB_PASSWORD not set in environment');
$database = $_ENV['DB_NAME'] ?? die('DB_NAME not set in environment');

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>