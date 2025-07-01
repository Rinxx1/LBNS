// Global variables for blog pagination
let allBlogs = [];
let filteredBlogs = [];
let currentBlogPage = 1;
let blogsPerPage = 5;

document.addEventListener("DOMContentLoaded", function () {
  fetchBlogs();
  initializeBlogPaginationControls();
});

function fetchBlogs() {
  fetch('./php/blog/fetch.php')
    .then(response => response.json())
    .then(data => {
      allBlogs = data;
      filteredBlogs = [...allBlogs];
      displayBlogs();
      updateBlogPaginationInfo();
      generateBlogPaginationButtons();
    })
    .catch(error => {
      console.error('Error fetching blogs:', error);
      const tbody = document.getElementById("blogTableBody");
      tbody.innerHTML = `<tr><td colspan="4" class="text-center text-white">Error loading blogs.</td></tr>`;
    });
}

function initializeBlogPaginationControls() {
  // Blogs per page change handler
  document.getElementById('blogsPerPage').addEventListener('change', function() {
    blogsPerPage = parseInt(this.value);
    currentBlogPage = 1;
    displayBlogs();
    updateBlogPaginationInfo();
    generateBlogPaginationButtons();
  });

  // Search functionality for blogs
  document.getElementById('searchBlogs').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase().trim();
    
    if (searchTerm === '') {
      filteredBlogs = [...allBlogs];
    } else {
      filteredBlogs = allBlogs.filter(blog => 
        blog.Blog_Name.toLowerCase().includes(searchTerm) ||
        blog.Blog_Desc.toLowerCase().includes(searchTerm) ||
        blog.Blog_Link.toLowerCase().includes(searchTerm)
      );
    }
    
    currentBlogPage = 1;
    displayBlogs();
    updateBlogPaginationInfo();
    generateBlogPaginationButtons();
  });
}

function displayBlogs() {
  const tbody = document.getElementById("blogTableBody");
  tbody.innerHTML = '';

  if (filteredBlogs.length === 0) {
    tbody.innerHTML = `<tr><td colspan="4" class="text-center text-white">No blogs found.</td></tr>`;
    return;
  }

  // Calculate start and end indices for current page
  const startIndex = (currentBlogPage - 1) * blogsPerPage;
  const endIndex = startIndex + blogsPerPage;
  const currentBlogs = filteredBlogs.slice(startIndex, endIndex);

  currentBlogs.forEach((blog, index) => {
    const row = document.createElement('tr');
    row.style.animationDelay = `${index * 0.1}s`;
    row.classList.add('fade-in-row');
    
    // Truncate description for better display
    const truncatedDesc = blog.Blog_Desc.length > 50 
      ? blog.Blog_Desc.substring(0, 50) + '...' 
      : blog.Blog_Desc;
    
    // Truncate title if too long
    const truncatedTitle = blog.Blog_Name.length > 30 
      ? blog.Blog_Name.substring(0, 30) + '...' 
      : blog.Blog_Name;
    
    row.innerHTML = `
      <td class="fw-semibold" title="${blog.Blog_Name}">${truncatedTitle}</td>
      <td class="fw truncate-text" title="${blog.Blog_Desc}">${truncatedDesc}</td>
      <td>
        <a href="${blog.Blog_Link}" target="_blank" class="blog-link" title="Open blog in new tab">
          <i class="bi bi-box-arrow-up-right me-1"></i>View
        </a>
      </td>
      <td>
        <div class="btn-group btn-group-sm" role="group">
          <button class="btn btn-outline-warning edit-btn" 
            data-id="${blog.Blog_ID}"
            data-title="${blog.Blog_Name}"
            data-desc="${blog.Blog_Desc}"
            data-link="${blog.Blog_Link}"
            data-image="${blog.Blog_Image_Loc || ''}"
            title="Edit Blog">
            <i class="bi bi-pencil-fill"></i>
          </button>
          <button class="btn btn-outline-danger" 
            onclick="deleteBlog(${blog.Blog_ID})"
            title="Delete Blog">
            <i class="bi bi-trash-fill"></i>
          </button>
        </div>
      </td>
    `;

    tbody.appendChild(row);
  });

  // Attach event listeners to edit buttons after DOM is updated
  document.querySelectorAll(".edit-btn").forEach(btn => {
    btn.addEventListener("click", function () {
      const id = this.dataset.id;
      const title = this.dataset.title;
      const desc = this.dataset.desc;
      const link = this.dataset.link;
      const image = this.dataset.image;
      openEditBlogModal(id, title, desc, link, image);
    });
  });
}

function generateBlogPaginationButtons() {
  const totalPages = Math.ceil(filteredBlogs.length / blogsPerPage);
  const paginationContainer = document.getElementById('blogPaginationContainer');
  
  if (totalPages <= 1) {
    paginationContainer.innerHTML = '';
    return;
  }

  let paginationHTML = '';

  // Previous button
  paginationHTML += `
    <li class="page-item ${currentBlogPage === 1 ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changeBlogPage(${currentBlogPage - 1})" aria-label="Previous">
        <i class="bi bi-chevron-left"></i>
      </a>
    </li>
  `;

  // Page numbers
  const maxVisiblePages = 5;
  let startPage = Math.max(1, currentBlogPage - Math.floor(maxVisiblePages / 2));
  let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

  // Adjust start page if we're near the end
  if (endPage - startPage < maxVisiblePages - 1) {
    startPage = Math.max(1, endPage - maxVisiblePages + 1);
  }

  // First page and ellipsis
  if (startPage > 1) {
    paginationHTML += `
      <li class="page-item">
        <a class="page-link" href="#" onclick="changeBlogPage(1)">1</a>
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
      <li class="page-item ${i === currentBlogPage ? 'active' : ''}">
        <a class="page-link" href="#" onclick="changeBlogPage(${i})">${i}</a>
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
        <a class="page-link" href="#" onclick="changeBlogPage(${totalPages})">${totalPages}</a>
      </li>
    `;
  }

  // Next button
  paginationHTML += `
    <li class="page-item ${currentBlogPage === totalPages ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changeBlogPage(${currentBlogPage + 1})" aria-label="Next">
        <i class="bi bi-chevron-right"></i>
      </a>
    </li>
  `;

  paginationContainer.innerHTML = paginationHTML;
}

function changeBlogPage(page) {
  const totalPages = Math.ceil(filteredBlogs.length / blogsPerPage);
  
  if (page < 1 || page > totalPages) return;
  
  currentBlogPage = page;
  displayBlogs();
  updateBlogPaginationInfo();
  generateBlogPaginationButtons();
  
  // Scroll to top of blogs section
  document.querySelector('#blogTableBody').closest('.card').scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
}

function updateBlogPaginationInfo() {
  const totalBlogs = filteredBlogs.length;
  const startItem = totalBlogs === 0 ? 0 : (currentBlogPage - 1) * blogsPerPage + 1;
  const endItem = Math.min(currentBlogPage * blogsPerPage, totalBlogs);
  
  document.getElementById('blogShowingStart').textContent = startItem;
  document.getElementById('blogShowingEnd').textContent = endItem;
  document.getElementById('totalBlogs').textContent = totalBlogs;
  
  // Update table info
  const searchTerm = document.getElementById('searchBlogs').value;
  const tableInfo = document.getElementById('blogTableInfo');
  
  if (searchTerm) {
    tableInfo.textContent = `Filtered from ${allBlogs.length} total blogs`;
  } else {
    tableInfo.textContent = `Total: ${totalBlogs} blogs`;
  }
}

function openEditBlogModal(id, title, desc, link, image) {
  document.getElementById("editBlogId").value = id;
  document.getElementById("editBlogTitle").value = title;
  document.getElementById("editBlogDesc").value = desc;
  document.getElementById("editBlogLink").value = link;

  const preview = document.getElementById("currentBlogImage");
  if (image) {
    preview.src = `../../../lbns/Images/blogs/${image}`;
    preview.style.display = 'block';
  } else {
    preview.src = '#';
    preview.style.display = 'none';
  }

  const modal = new bootstrap.Modal(document.getElementById("editBlogModal"));
  modal.show();
}

// Function to refresh blog table after operations
function refreshBlogTable() {
  fetchBlogs();
}
