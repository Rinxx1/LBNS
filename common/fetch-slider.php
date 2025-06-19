<?php
require 'product-token.php';
require 'lbns/connection/db.php';

$query = "SELECT i.Index_Image_Loc, i.Index_Description, p.Product_Name, p.Product_Price, p.Product_ID
          FROM product_index_tbl i
          JOIN product_tbl p ON i.Product_ID = p.Product_ID
          ORDER BY i.Index_ID DESC LIMIT 10";

$result = $conn->query($query);

while ($row = $result->fetch_assoc()):
  $encodedId = encodeProductId($row['Product_ID']);
?>
  <div class="swiper-slide">
    <div class="slide">
      <img src="Images/slideshow/<?= htmlspecialchars($row['Index_Image_Loc']) ?>" 
           alt="<?= htmlspecialchars($row['Product_Name']) ?>" 
           style="width: 312px; height: 312px; object-fit: cover; border-radius: 8px;">
      <h3><?= htmlspecialchars($row['Product_Name']) ?></h3>
      <p><?= htmlspecialchars($row['Index_Description']) ?></p>
      <span class="price">₱<?= number_format($row['Product_Price'], 2) ?></span>
      <button class="buy-now" onclick="location.href='product-details?id=<?= $encodedId ?>'">Buy Now</button>
    </div>
  </div>
<?php endwhile; ?>
