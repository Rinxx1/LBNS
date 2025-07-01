document.addEventListener("DOMContentLoaded", function () {
    fetchCategories();
    initializeCategoryPaginationControls();
  });
  
  // Global variables for category pagination
  let allCategories = [];
  let filteredCategories = [];
  let currentCategoryPage = 1;
  let categoriesPerPage = 5;
  
  function fetchCategories() {
    fetch('./php/categories/fetch.php')
      .then(response => response.json())
      .then(data => {
        allCategories = data;
        filteredCategories = [...allCategories];
        displayCategories();
        updateCategoryPaginationInfo();
        generateCategoryPaginationButtons();
      })
      .catch(error => {
        console.error('Error fetching categories:', error);
        const tbody = document.getElementById("categoryTableBody");
        tbody.innerHTML = `<tr><td colspan="3" class="text-center text-white">Error loading categories.</td></tr>`;
      });
  }
  
  function initializeCategoryPaginationControls() {
    // Categories per page change handler
    document.getElementById('categoriesPerPage').addEventListener('change', function() {
      categoriesPerPage = parseInt(this.value);
      currentCategoryPage = 1;
      displayCategories();
      updateCategoryPaginationInfo();
      generateCategoryPaginationButtons();
    });
  
    // Search functionality for categories
    document.getElementById('searchCategories').addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase().trim();
      
      if (searchTerm === '') {
        filteredCategories = [...allCategories];
      } else {
        filteredCategories = allCategories.filter(category => 
          category.Product_Category_Name.toLowerCase().includes(searchTerm) ||
          category.Product_Category_ID.toString().includes(searchTerm)
        );
      }
      
      currentCategoryPage = 1;
      displayCategories();
      updateCategoryPaginationInfo();
      generateCategoryPaginationButtons();
    });
  }
  
  function displayCategories() {
    const tbody = document.getElementById("categoryTableBody");
    tbody.innerHTML = '';
  
    if (filteredCategories.length === 0) {
      tbody.innerHTML = `<tr><td colspan="3" class="text-center text-white">No categories found.</td></tr>`;
      return;
    }
  
    // Calculate start and end indices for current page
    const startIndex = (currentCategoryPage - 1) * categoriesPerPage;
    const endIndex = startIndex + categoriesPerPage;
    const currentCategories = filteredCategories.slice(startIndex, endIndex);
  
    currentCategories.forEach((category, index) => {
      const row = document.createElement('tr');
      row.style.animationDelay = `${index * 0.1}s`;
      row.classList.add('fade-in-row');
      
      row.innerHTML = `
        <td class="fw-semibold">${category.Product_Category_ID}</td>
        <td>${category.Product_Category_Name}</td>
        <td>
          <div class="btn-group btn-group-sm" role="group">
            <button class="btn btn-outline-warning" 
              onclick="openEditCategoryModal(${category.Product_Category_ID}, '${category.Product_Category_Name}')"
              title="Edit Category">
              <i class="bi bi-pencil-fill"></i>
            </button>
            <button class="btn btn-outline-danger" 
              onclick="deleteCategory(${category.Product_Category_ID})"
              title="Delete Category">
              <i class="bi bi-trash-fill"></i>
            </button>
          </div>
        </td>`;
      tbody.appendChild(row);
    });
  }
  
  function generateCategoryPaginationButtons() {
    const totalPages = Math.ceil(filteredCategories.length / categoriesPerPage);
    const paginationContainer = document.getElementById('categoryPaginationContainer');
    
    if (totalPages <= 1) {
      paginationContainer.innerHTML = '';
      return;
    }
  
    let paginationHTML = '';
  
    // Previous button
    paginationHTML += `
      <li class="page-item ${currentCategoryPage === 1 ? 'disabled' : ''}">
        <a class="page-link" href="#" onclick="changeCategoryPage(${currentCategoryPage - 1})" aria-label="Previous">
          <i class="bi bi-chevron-left"></i>
        </a>
      </li>
    `;
  
    // Page numbers
    const maxVisiblePages = 5;
    let startPage = Math.max(1, currentCategoryPage - Math.floor(maxVisiblePages / 2));
    let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
  
    // Adjust start page if we're near the end
    if (endPage - startPage < maxVisiblePages - 1) {
      startPage = Math.max(1, endPage - maxVisiblePages + 1);
    }
  
    // First page and ellipsis
    if (startPage > 1) {
      paginationHTML += `
        <li class="page-item">
          <a class="page-link" href="#" onclick="changeCategoryPage(1)">1</a>
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
        <li class="page-item ${i === currentCategoryPage ? 'active' : ''}">
          <a class="page-link" href="#" onclick="changeCategoryPage(${i})">${i}</a>
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
          <a class="page-link" href="#" onclick="changeCategoryPage(${totalPages})">${totalPages}</a>
        </li>
      `;
    }
  
    // Next button
    paginationHTML += `
      <li class="page-item ${currentCategoryPage === totalPages ? 'disabled' : ''}">
        <a class="page-link" href="#" onclick="changeCategoryPage(${currentCategoryPage + 1})" aria-label="Next">
          <i class="bi bi-chevron-right"></i>
        </a>
      </li>
    `;
  
    paginationContainer.innerHTML = paginationHTML;
  }
  
  function changeCategoryPage(page) {
    const totalPages = Math.ceil(filteredCategories.length / categoriesPerPage);
    
    if (page < 1 || page > totalPages) return;
    
    currentCategoryPage = page;
    displayCategories();
    updateCategoryPaginationInfo();
    generateCategoryPaginationButtons();
    
    // Scroll to top of categories section
    document.querySelector('#categoryTableBody').closest('.card').scrollIntoView({ 
      behavior: 'smooth',
      block: 'start'
    });
  }
  
  function updateCategoryPaginationInfo() {
    const totalCategories = filteredCategories.length;
    const startItem = totalCategories === 0 ? 0 : (currentCategoryPage - 1) * categoriesPerPage + 1;
    const endItem = Math.min(currentCategoryPage * categoriesPerPage, totalCategories);
    
    document.getElementById('categoryShowingStart').textContent = startItem;
    document.getElementById('categoryShowingEnd').textContent = endItem;
    document.getElementById('totalCategories').textContent = totalCategories;
    
    // Update table info
    const searchTerm = document.getElementById('searchCategories').value;
    const tableInfo = document.getElementById('categoryTableInfo');
    
    if (searchTerm) {
      tableInfo.textContent = `Filtered from ${allCategories.length} total categories`;
    } else {
      tableInfo.textContent = `Total: ${totalCategories} categories`;
    }
  }
  
  function openEditCategoryModal(id, name) {
    document.getElementById('editCategoryID').value = id;
    document.getElementById('editCategoryName').value = name;
    const modal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
    modal.show();
  }
  
  // Function to refresh category table after operations
  function refreshCategoryTable() {
    fetchCategories();
  }
  
  // Delete category function (you may need to implement this)
  function deleteCategory(categoryId) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        // Implement delete functionality here
        // After successful deletion, call refreshCategoryTable()
        console.log('Delete category:', categoryId);
      }
    });
  }

