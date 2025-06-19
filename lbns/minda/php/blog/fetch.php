<?php
require '../../../connection/db.php';

$query = "SELECT * FROM blogs_tbl ORDER BY Blog_ID DESC";
$result = $conn->query($query);

$blogs = [];

while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

header('Content-Type: application/json');
echo json_encode($blogs);
?>
