<?php
require 'lbns/connection/db.php';

$searchTerm = $_GET['search'] ?? '';
$searchTermLike = '%' . $searchTerm . '%';

// Modify the query if there's a search term
if (!empty($searchTerm)) {
    $stmt = $conn->prepare("SELECT * FROM stores_tbl WHERE Store_City LIKE ? OR Store_Email LIKE ? OR Store_OpeningHours LIKE ? ORDER BY Store_ID DESC");
    $stmt->bind_param("sss", $searchTermLike, $searchTermLike, $searchTermLike);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $query = "SELECT * FROM stores_tbl ORDER BY Store_ID DESC";
    $result = $conn->query($query);
}

if ($result->num_rows > 0):
  while ($store = $result->fetch_assoc()):
    // Clean up iframe string: remove width, height, style, and insert class
    $iframeCleaned = preg_replace(
      '/<iframe\s+([^>]*)>/i',
      '<iframe class="branch-map" $1>',
      $store['Store_Location']
    );
    $iframeCleaned = preg_replace('/\s?(width|height|style)="[^"]*"/i', '', $iframeCleaned);
?>
  <div class="row justify-content-center mb-5">
    <div class="col-lg-8">
      <div class="branch-wrapper shadow rounded-4 overflow-hidden">
        <div class="map-wrapper">
          <?= $iframeCleaned ?>
        </div>
        <div class="branch-card p-4 bg-white">
          <div class="d-flex align-items-start">
            <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Map Pin Icon" width="30" class="me-3 mt-1">
            <div>
              <h4 class="fw-bold mb-1"><?= htmlspecialchars($store['Store_City']) ?></h4>
              <p class="mb-1"><?= nl2br(htmlspecialchars($store['Store_OpeningHours'])) ?></p>
              <p class="mb-1"><a href="mailto:<?= htmlspecialchars($store['Store_Email']) ?>"><?= htmlspecialchars($store['Store_Email']) ?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  endwhile;
else:
  echo "<div class='text-center text-muted'>No stores found for '<strong>" . htmlspecialchars($searchTerm) . "</strong>'</div>";
endif;

$conn->close();
?>
