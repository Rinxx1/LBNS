<?php
$pageName = 'store-locator';
include 'includes/header.php'; ?>

<main class="store-locator-section">
<!-- Store Locator Section -->
    <div class="container">
      <h2 class="text-center mb-4 fw-bold">Find Our Branches</h2>

      <!-- Search Bar -->
      <div class="row justify-content-center mb-5">
        <div class="col-md-8">
          <form method="GET" class="input-group shadow-sm rounded-pill overflow-hidden">
            <input 
              type="text" 
              class="form-control border-0 px-4 py-3" 
              name="search" 
              value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" 
              placeholder="Search location..."
            >
            <button class="btn btn-success px-4">Search</button>
          </form>
        </div>
      </div>

  

      <?php include 'common/fetch-stores.php'; ?>


    </div>

    </main>
  
<?php include 'includes/footer.php'; ?>