document.addEventListener("DOMContentLoaded", function () {
    fetchCategories();
  });
  
  function fetchCategories() {
    fetch('././php/categories/fetch.php')
      .then(response => response.json())
      .then(data => {
        const tbody = document.getElementById("categoryTableBody");
        tbody.innerHTML = "";
  
        if (data.length === 0) {
          tbody.innerHTML = `<tr><td colspan="3" class="text-center text-white">No categories found.</td></tr>`;
          return;
        }
  
        data.forEach(cat => {
          const row = document.createElement("tr");
          row.innerHTML = `
            <td>${cat.Product_Category_ID}</td>
            <td>${cat.Product_Category_Name}</td>
            <td>
              <button class="btn btn-sm btn-outline-warning" onclick="openEditCategoryModal(${cat.Product_Category_ID}, '${cat.Product_Category_Name}')">
                <i class="bi bi-pencil-fill"></i> Edit
              </button>
            </td>
          `;
          tbody.appendChild(row);
        });
      })
      .catch(error => console.error('Error fetching categories:', error));
  }
  
  function openEditCategoryModal(id, name) {
    document.getElementById('editCategoryID').value = id;
    document.getElementById('editCategoryName').value = name;
    const modal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
    modal.show();
  }
  
  