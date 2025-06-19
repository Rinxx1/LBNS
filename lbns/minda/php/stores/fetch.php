<?php
require '../../../connection/db.php';

$sql = "SELECT * FROM stores_tbl";
$result = $conn->query($sql);

$stores = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $stores[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($stores);
$conn->close();
?>
