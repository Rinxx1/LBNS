document.addEventListener("DOMContentLoaded", function () {
  fetchProducts();
  initializePaginationControls();
});

// Global variables for pagination
let allProducts = [];
let filteredProducts = [];
let currentPage = 1;
let itemsPerPage = 10;

function fetchProducts() {
  fetch('./php/products/fetch.php')
    .then(res => res.json())
    .then(data => {
      allProducts = data;
      filteredProducts = [...allProducts];
      displayProducts();
      updatePaginationInfo();
      generatePaginationButtons();
    })
    .catch(error => {
      console.error("Error fetching products:", error);
      const tbody = document.getElementById("productTableBody");
      tbody.innerHTML = `<tr><td colspan="5" class="text-center text-white">Error loading products.</td></tr>`;
    });
}

function initializePaginationControls() {
  // Items per page change handler
  document.getElementById('itemsPerPage').addEventListener('change', function() {
    itemsPerPage = parseInt(this.value);
    currentPage = 1;
    displayProducts();
    updatePaginationInfo();
    generatePaginationButtons();
  });

  // Search functionality
  document.getElementById('searchProducts').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase().trim();
    
    if (searchTerm === '') {
      filteredProducts = [...allProducts];
    } else {
      filteredProducts = allProducts.filter(product => 
        product.Product_Name.toLowerCase().includes(searchTerm) ||
        product.Product_Desc.toLowerCase().includes(searchTerm) ||
        product.Product_Ingredients.toLowerCase().includes(searchTerm)
      );
    }
    
    currentPage = 1;
    displayProducts();
    updatePaginationInfo();
    generatePaginationButtons();
  });
}

function displayProducts() {
  const tbody = document.getElementById("productTableBody");
  tbody.innerHTML = '';

  if (filteredProducts.length === 0) {
    tbody.innerHTML = `<tr><td colspan="5" class="text-center text-white">No products found.</td></tr>`;
    return;
  }

  // Calculate start and end indices for current page
  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const currentProducts = filteredProducts.slice(startIndex, endIndex);

  currentProducts.forEach((product, index) => {
    const row = document.createElement('tr');
    row.style.animationDelay = `${index * 0.1}s`;
    row.classList.add('fade-in-row');
    
    row.innerHTML = `
      <td class="fw-semibold">${product.Product_Name}</td>
      <td class="fw">${truncateText(product.Product_Desc, 50)}</td>  
      <td><span class="badge bg-info">${product.Product_Weight}g</span></td>
      <td class="fw-bold text-success">₱${parseFloat(product.Product_Price).toFixed(2)}</td>
      <td>
        <div class="btn-group btn-group-sm" role="group">
          <button class="btn btn-outline-warning"
            onclick='editProduct(
              ${product.Product_ID},
              ${JSON.stringify(product.Product_Name)},
              ${JSON.stringify(product.Product_Desc)},
              ${JSON.stringify(product.Product_Weight)},
              ${JSON.stringify(product.Product_Price)},
              ${JSON.stringify(product.Product_Ingredients)},
              ${JSON.stringify(product.Product_Shelflife)},
              ${JSON.stringify(product.Product_ShopeeLink || '')},
              ${JSON.stringify(product.Product_LazadaLink || '')},
              ${product.Product_BestSeller},
              ${product.Product_Category_ID},
              ${JSON.stringify(product.Slideshow_Description || '')},
              ${JSON.stringify(product.Slideshow_Image || '')},
              ${JSON.stringify(product.Thumbnails || [])}
            )'
            title="Edit Product">
            <i class="bi bi-pencil-fill"></i>
          </button>
          <button class="btn btn-outline-danger" 
            onclick="deleteProduct(${product.Product_ID})"
            title="Delete Product">
            <i class="bi bi-trash-fill"></i>
          </button>
        </div>
      </td>`;
    tbody.appendChild(row);
  });
}

function generatePaginationButtons() {
  const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
  const paginationContainer = document.getElementById('paginationContainer');
  
  if (totalPages <= 1) {
    paginationContainer.innerHTML = '';
    return;
  }

  let paginationHTML = '';

  // Previous button
  paginationHTML += `
    <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changePage(${currentPage - 1})" aria-label="Previous">
        <i class="bi bi-chevron-left"></i>
      </a>
    </li>
  `;

  // Page numbers
  const maxVisiblePages = 5;
  let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
  let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

  // Adjust start page if we're near the end
  if (endPage - startPage < maxVisiblePages - 1) {
    startPage = Math.max(1, endPage - maxVisiblePages + 1);
  }

  // First page and ellipsis
  if (startPage > 1) {
    paginationHTML += `
      <li class="page-item">
        <a class="page-link" href="#" onclick="changePage(1)">1</a>
      </li>
    `;
    if (startPage > 2) {
      paginationHTML += `
        <li class="page-item disabled">
          <span class="page-link">...</span>
        </li>
      `;
    }
  }

  // Page numbers
  for (let i = startPage; i <= endPage; i++) {
    paginationHTML += `
      <li class="page-item ${i === currentPage ? 'active' : ''}">
        <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
      </li>
    `;
  }

  // Last page and ellipsis
  if (endPage < totalPages) {
    if (endPage < totalPages - 1) {
      paginationHTML += `
        <li class="page-item disabled">
          <span class="page-link">...</span>
        </li>
      `;
    }
    paginationHTML += `
      <li class="page-item">
        <a class="page-link" href="#" onclick="changePage(${totalPages})">${totalPages}</a>
      </li>
    `;
  }

  // Next button
  paginationHTML += `
    <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changePage(${currentPage + 1})" aria-label="Next">
        <i class="bi bi-chevron-right"></i>
      </a>
    </li>
  `;

  paginationContainer.innerHTML = paginationHTML;
}

function changePage(page) {
  const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
  
  if (page < 1 || page > totalPages) return;
  
  currentPage = page;
  displayProducts();
  updatePaginationInfo();
  generatePaginationButtons();
  
  // Scroll to top of table
  document.querySelector('.table-responsive').scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
}

function updatePaginationInfo() {
  const totalProducts = filteredProducts.length;
  const startItem = totalProducts === 0 ? 0 : (currentPage - 1) * itemsPerPage + 1;
  const endItem = Math.min(currentPage * itemsPerPage, totalProducts);
  
  document.getElementById('showingStart').textContent = startItem;
  document.getElementById('showingEnd').textContent = endItem;
  document.getElementById('totalProducts').textContent = totalProducts;
  
  // Update table info
  const searchTerm = document.getElementById('searchProducts').value;
  const tableInfo = document.getElementById('tableInfo');
  
  if (searchTerm) {
    tableInfo.textContent = `Filtered from ${allProducts.length} total products`;
  } else {
    tableInfo.textContent = `Total: ${totalProducts} products`;
  }
}

function truncateText(text, maxLength) {
  if (text.length <= maxLength) return text;
  return text.substring(0, maxLength) + '...';
}

// Refresh pagination after product operations
function refreshProductTable() {
  fetchProducts();
}
