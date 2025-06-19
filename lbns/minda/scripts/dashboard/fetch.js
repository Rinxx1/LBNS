document.addEventListener("DOMContentLoaded", function () {
    fetch('././php/dashboard/fetch.php')
      .then(res => res.json())
      .then(data => {
        document.getElementById("productCount").textContent = data.products;
        document.getElementById("categoryCount").textContent = data.categories;
        document.getElementById("storeCount").textContent = data.stores;
        document.getElementById("blogCount").textContent = data.blogs;
      })
      .catch(err => {
        console.error("Dashboard fetch error:", err);
      });
  });
  