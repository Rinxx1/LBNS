// Global variables for store pagination
let allStores = [];
let filteredStores = [];
let currentStorePage = 1;
let storesPerPage = 5;

document.addEventListener("DOMContentLoaded", function () {
  fetchStores();
  initializeStorePaginationControls();
});

function fetchStores() {
  fetch('./php/stores/fetch.php')
    .then(response => response.json())
    .then(data => {
      allStores = data;
      filteredStores = [...allStores];
      displayStores();
      updateStorePaginationInfo();
      generateStorePaginationButtons();
    })
    .catch(error => {
      console.error('Error fetching stores:', error);
      const tbody = document.getElementById("storeTableBody");
      tbody.innerHTML = `<tr><td colspan="4" class="text-center text-white">Error loading stores.</td></tr>`;
    });
}

function initializeStorePaginationControls() {
  // Stores per page change handler
  document.getElementById('storesPerPage').addEventListener('change', function() {
    storesPerPage = parseInt(this.value);
    currentStorePage = 1;
    displayStores();
    updateStorePaginationInfo();
    generateStorePaginationButtons();
  });

  // Search functionality for stores
  document.getElementById('searchStores').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase().trim();
    
    if (searchTerm === '') {
      filteredStores = [...allStores];
    } else {
      filteredStores = allStores.filter(store => 
        store.Store_City.toLowerCase().includes(searchTerm) ||
        store.Store_Email.toLowerCase().includes(searchTerm) ||
        store.Store_OpeningHours.toLowerCase().includes(searchTerm)
      );
    }
    
    currentStorePage = 1;
    displayStores();
    updateStorePaginationInfo();
    generateStorePaginationButtons();
  });
}

function displayStores() {
  const tbody = document.getElementById("storeTableBody");
  tbody.innerHTML = '';

  if (filteredStores.length === 0) {
    tbody.innerHTML = `<tr><td colspan="4" class="text-center text-white">No stores found.</td></tr>`;
    return;
  }

  // Calculate start and end indices for current page
  const startIndex = (currentStorePage - 1) * storesPerPage;
  const endIndex = startIndex + storesPerPage;
  const currentStores = filteredStores.slice(startIndex, endIndex);

  currentStores.forEach((store, index) => {
    const row = document.createElement('tr');
    row.style.animationDelay = `${index * 0.1}s`;
    row.classList.add('fade-in-row');
    
    row.innerHTML = `
      <td class="fw-semibold">${store.Store_City}</td>
      <td style="display:none;">${store.Store_Location}</td>
      <td>${store.Store_Email}</td>
      <td class="fw">${store.Store_OpeningHours}</td>
      <td>
        <div class="btn-group btn-group-sm" role="group">
          <button 
            class="btn btn-outline-warning edit-store-btn"
            data-id="${store.Store_ID}"
            data-city="${store.Store_City}"
            data-location="${encodeURIComponent(store.Store_Location)}"
            data-email="${store.Store_Email}"
            data-hours="${store.Store_OpeningHours}"
            title="Edit Store">
            <i class="bi bi-pencil-fill"></i>
          </button>
          <button class="btn btn-outline-danger" 
            onclick="deleteStore(${store.Store_ID})"
            title="Delete Store">
            <i class="bi bi-trash-fill"></i>
          </button>
        </div>
      </td>
    `;

    tbody.appendChild(row);
  });

  // Attach event listeners to edit buttons
  document.querySelectorAll('.edit-store-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const id = this.getAttribute('data-id');
      const city = this.getAttribute('data-city');
      const location = decodeURIComponent(this.getAttribute('data-location'));
      const email = this.getAttribute('data-email');
      const hours = this.getAttribute('data-hours');

      openEditModal(id, city, location, email, hours);
    });
  });
}

function generateStorePaginationButtons() {
  const totalPages = Math.ceil(filteredStores.length / storesPerPage);
  const paginationContainer = document.getElementById('storePaginationContainer');
  
  if (totalPages <= 1) {
    paginationContainer.innerHTML = '';
    return;
  }

  let paginationHTML = '';

  // Previous button
  paginationHTML += `
    <li class="page-item ${currentStorePage === 1 ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changeStorePage(${currentStorePage - 1})" aria-label="Previous">
        <i class="bi bi-chevron-left"></i>
      </a>
    </li>
  `;

  // Page numbers
  const maxVisiblePages = 5;
  let startPage = Math.max(1, currentStorePage - Math.floor(maxVisiblePages / 2));
  let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

  // Adjust start page if we're near the end
  if (endPage - startPage < maxVisiblePages - 1) {
    startPage = Math.max(1, endPage - maxVisiblePages + 1);
  }

  // First page and ellipsis
  if (startPage > 1) {
    paginationHTML += `
      <li class="page-item">
        <a class="page-link" href="#" onclick="changeStorePage(1)">1</a>
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
      <li class="page-item ${i === currentStorePage ? 'active' : ''}">
        <a class="page-link" href="#" onclick="changeStorePage(${i})">${i}</a>
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
        <a class="page-link" href="#" onclick="changeStorePage(${totalPages})">${totalPages}</a>
      </li>
    `;
  }

  // Next button
  paginationHTML += `
    <li class="page-item ${currentStorePage === totalPages ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changeStorePage(${currentStorePage + 1})" aria-label="Next">
        <i class="bi bi-chevron-right"></i>
      </a>
    </li>
  `;

  paginationContainer.innerHTML = paginationHTML;
}

function changeStorePage(page) {
  const totalPages = Math.ceil(filteredStores.length / storesPerPage);
  
  if (page < 1 || page > totalPages) return;
  
  currentStorePage = page;
  displayStores();
  updateStorePaginationInfo();
  generateStorePaginationButtons();
  
  // Scroll to top of stores section
  document.querySelector('#storeTableBody').closest('.card').scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
}

function updateStorePaginationInfo() {
  const totalStores = filteredStores.length;
  const startItem = totalStores === 0 ? 0 : (currentStorePage - 1) * storesPerPage + 1;
  const endItem = Math.min(currentStorePage * storesPerPage, totalStores);
  
  document.getElementById('storeShowingStart').textContent = startItem;
  document.getElementById('storeShowingEnd').textContent = endItem;
  document.getElementById('totalStores').textContent = totalStores;
  
  // Update table info
  const searchTerm = document.getElementById('searchStores').value;
  const tableInfo = document.getElementById('storeTableInfo');
  
  if (searchTerm) {
    tableInfo.textContent = `Filtered from ${allStores.length} total stores`;
  } else {
    tableInfo.textContent = `Total: ${totalStores} stores`;
  }
}

function openEditModal(id, city, location, email, hours) {
  document.getElementById('editStoreId').value = id;
  document.getElementById('editStoreCity').value = city;
  document.getElementById('editStoreLocation').value = location;
  document.getElementById('editStoreEmail').value = email;
  document.getElementById('editStoreHours').value = hours;

  const editModal = new bootstrap.Modal(document.getElementById('editStoreModal'));
  editModal.show();
}

// Function to refresh store table after operations
function refreshStoreTable() {
  fetchStores();
}
