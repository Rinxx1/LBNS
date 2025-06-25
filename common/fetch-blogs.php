<?php
require 'lbns/connection/db.php';

$query = "SELECT Blog_Name, Blog_Desc, Blog_Link, Blog_Image_Loc FROM blogs_tbl ORDER BY Blog_ID DESC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-md-6 col-lg-4">
            <article class="blog-card">
                <div class="blog-image-container">
                    <img src="Images/blogs/' . htmlspecialchars($row["Blog_Image_Loc"]) . '" 
                         class="blog-image" 
                         alt="' . htmlspecialchars($row["Blog_Name"]) . '">
                    <div class="blog-overlay">
                        <div class="blog-category-badge">
                            <i class="bi bi-journal-text"></i>
                            <span>Story</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="bi bi-calendar3 me-2"></i>
                            ' . date('M d, Y') . '
                        </span>
                        <span class="blog-reading-time">
                            <i class="bi bi-clock me-2"></i>
                            3 min read
                        </span>
                    </div>
                    <h5 class="card-title">' . htmlspecialchars($row["Blog_Name"]) . '</h5>
                    <p class="card-text">' . htmlspecialchars($row["Blog_Desc"]) . '</p>
                    <div class="blog-footer">
                        <a href="' . htmlspecialchars($row["Blog_Link"]) . '" 
                           class="btn btn-primary" 
                           target="_blank"
                           aria-label="Read more about ' . htmlspecialchars($row["Blog_Name"]) . '">
                            Read More
                        </a>
                        <div class="blog-share">
                            <button class="share-btn" aria-label="Share this story">
                                <i class="bi bi-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
        </div>';
    }
} else {
    echo '
    <div class="col-12">
        <div class="empty-state">
            <div class="empty-state-icon">
                <i class="bi bi-journal-x"></i>
            </div>
            <h4>No Stories Yet</h4>
            <p class="text-muted">We\'re working on bringing you amazing stories about our durian journey. Check back soon!</p>
        </div>
    </div>';
}

$conn->close();
?>
