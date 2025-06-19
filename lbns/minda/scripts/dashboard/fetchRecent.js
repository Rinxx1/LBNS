document.addEventListener("DOMContentLoaded", function () {
    fetch('./php/dashboard/fetchRecent.php')
      .then(res => res.json())
      .then(data => {
        const tbody = document.getElementById("recentProductsBody");
        tbody.innerHTML = '';
  
        if (data.length === 0) {
          tbody.innerHTML = `<tr><td colspan="4" class="text-center">No recent products found.</td></tr>`;
          return;
        }
  
        data.forEach(product => {
          const row = document.createElement("tr");
          row.innerHTML = `
            <td>${product.Product_Name}</td>
            <td>${product.Product_Desc}</td>
            <td>${product.Product_Weight}g</td>
            <td>₱${parseFloat(product.Product_Price).toFixed(2)}</td>
          `;
          tbody.appendChild(row);
        });
      })
      .catch(error => {
        console.error("Error fetching recent products:", error);
      });
  });
  