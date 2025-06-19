document.addEventListener("DOMContentLoaded", function () {
  fetchBlogs();
});

function fetchBlogs() {
  fetch('./php/blog/fetch.php')
    .then(response => response.json())
    .then(data => {
      const tbody = document.getElementById("blogTableBody");
      tbody.innerHTML = "";

      if (data.length === 0) {
        tbody.innerHTML = `<tr><td colspan="4" class="text-center text-white">No blogs found.</td></tr>`;
        return;
      }

      data.forEach(blog => {
        const row = document.createElement("tr");
        row.innerHTML = `
          <td>${blog.Blog_Name}</td>
          <td>${blog.Blog_Desc}</td>
          <td><a href="${blog.Blog_Link}" target="_blank">View</a></td>
          <td>
            <button class="btn btn-sm btn-outline-warning me-2 edit-btn" 
              data-id="${blog.Blog_ID}"
              data-title="${blog.Blog_Name}"
              data-desc="${blog.Blog_Desc}"
              data-link="${blog.Blog_Link}"
              data-image="${blog.Blog_Image_Loc || ''}">
              <i class="bi bi-pencil-fill"></i> Edit
            </button>
            <button class="btn btn-sm btn-outline-danger" onclick="deleteBlog(${blog.Blog_ID})">
              <i class="bi bi-trash-fill"></i> Delete
            </button>
          </td>
        `;
        tbody.appendChild(row);
      });

      // Attach event listeners after DOM is updated
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
    })
    .catch(error => {
      console.error('Error fetching blogs:', error);
    });
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
