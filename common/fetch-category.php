<?php
require 'lbns/connection/db.php';

// Utility: Generate URL-safe slug from category name
function generateSlug($name) {
    $slug = strtolower($name);
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug); // remove special characters
    $slug = preg_replace('/[\s\-]+/', '-', $slug);     // convert space/multi-dash to single dash
    return trim($slug, '-');
}

// Fetch all categories with their slug
$categoriesResult = $conn->query("SELECT Product_Category_ID, Product_Category_Name FROM product_category_tbl");
$categories = [];
$slugToIdMap = [];

while ($row = $categoriesResult->fetch_assoc()) {
    $slug = generateSlug($row['Product_Category_Name']);
    $row['slug'] = $slug;
    $categories[] = $row;
    $slugToIdMap[$slug] = $row['Product_Category_ID'];
}

// Handle query parameters
$selectedCategorySlug = $_GET['category'] ?? 'all';
$selectedCategory = $slugToIdMap[$selectedCategorySlug] ?? 'all';
$searchTerm = trim($_GET['search'] ?? '');

// Build product query
$sql = "SELECT p.*, i.Index_Image_Loc, i.Index_Description 
        FROM product_tbl p 
        LEFT JOIN product_index_tbl i ON p.Product_ID = i.Product_ID
        WHERE 1";

$params = [];
$types = '';

// Filter by category if selected
if ($selectedCategory !== 'all') {
    $sql .= " AND p.Product_Category_ID = ?";
    $params[] = $selectedCategory;
    $types .= 'i';
}

// Filter by search keyword
if (!empty($searchTerm)) {
    $sql .= " AND (p.Product_Name LIKE ? OR i.Index_Description LIKE ?)";
    $searchWildcard = "%$searchTerm%";
    $params[] = $searchWildcard;
    $params[] = $searchWildcard;
    $types .= 'ss';
}

$sql .= " ORDER BY p.Product_ID DESC";

// Prepare and execute
$stmt = $conn->prepare($sql);
if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$products = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();
