<?php
require 'lbns/connection/db.php';
require_once 'product-token.php';

$token = $_GET['id'] ?? null;
$currentProductId = decodeProductId($token);

if (!$currentProductId) {
  return; // Fallback or error message
}

$sql = "
  SELECT p.Product_ID, p.Product_Name, p.Product_Price, i.Index_Description, i.Index_Image_Loc
  FROM product_tbl p
  LEFT JOIN product_index_tbl i ON p.Product_ID = i.Product_ID
  WHERE p.Product_ID != ?
  ORDER BY RAND()
  LIMIT 3
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $currentProductId);
$stmt->execute();
$result = $stmt->get_result();
$suggested = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();

require_once 'product-token.php'; // Ensure encodeProductId is available

foreach ($suggested as $item): 
  $encodedId = encodeProductId($item['Product_ID']);
?>
  <div class='col-md-4'>
    <div class='card h-100 border-0 shadow-sm rounded-4'>
      <img src='Images/slideshow/<?= htmlspecialchars($item['Index_Image_Loc']) ?>'
           class='card-img-top rounded-top-4'
           alt='<?= htmlspecialchars($item['Product_Name']) ?>'
           style='width: 100%; height: 250px; object-fit: cover;'>
      <div class='card-body text-center'>
        <h5 class='card-title fw-bold'><?= htmlspecialchars($item['Product_Name']) ?></h5>
        <p class='card-text text-muted'><?= htmlspecialchars($item['Index_Description']) ?></p>
        <p class='fw-semibold text-success mb-3'>₱<?= number_format($item['Product_Price'], 2) ?></p>
        <a href='product-details?id=<?= $encodedId ?>' class='btn btn-outline-success rounded-pill px-4'>View Product</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
