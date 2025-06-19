document.addEventListener("DOMContentLoaded", function () {
  fetchProducts();
});

function fetchProducts() {
  fetch('./php/products/fetch.php')
    .then(res => res.json())
    .then(data => {
      const tbody = document.getElementById("productTableBody");
      tbody.innerHTML = '';

      if (data.length === 0) {
        tbody.innerHTML = `<tr><td colspan="5" class="text-center text-white">No products found.</td></tr>`;
        return;
      }

      data.forEach(product => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${product.Product_Name}</td>
          <td>${product.Product_Desc}</td>  
          <td>${product.Product_Weight}g</td>
          <td>₱${parseFloat(product.Product_Price).toFixed(2)}</td>
          <td>
            <button class="btn btn-sm btn-outline-warning me-2"
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
              )'>
              <i class="bi bi-pencil-fill"></i> Edit
            </button>
            <button class="btn btn-sm btn-outline-danger" onclick="deleteProduct(${product.Product_ID})">
              <i class="bi bi-trash-fill"></i> Delete
            </button>
          </td>`;
        tbody.appendChild(row);
      });
    })
    .catch(error => {
      console.error("Error fetching products:", error);
    });
}
