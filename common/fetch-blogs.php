
<?php
require 'lbns/connection/db.php';

$query = "SELECT Blog_Name, Blog_Desc, Blog_Link, Blog_Image_Loc FROM blogs_tbl ORDER BY Blog_ID DESC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-md-6 col-lg-4">
            <div class="card blog-card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                <img src="Images/blogs/' . htmlspecialchars($row["Blog_Image_Loc"]) . '" class="card-img-top" alt="' . htmlspecialchars($row["Blog_Name"]) . '" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-dark">' . htmlspecialchars($row["Blog_Name"]) . '</h5>
                    <p class="card-text text-muted">' . htmlspecialchars($row["Blog_Desc"]) . '</p>
                    <a href="' . htmlspecialchars($row["Blog_Link"]) . '" class="btn btn-outline-success rounded-pill px-4 mt-3" target="_blank">Read More</a>
                </div>
            </div>
        </div>';
    }
} else {
    echo '<div class="col-12 text-center text-muted">No blog entries found.</div>';
}

$conn->close();
?>
