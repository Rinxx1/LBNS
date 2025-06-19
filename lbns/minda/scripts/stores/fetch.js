document.addEventListener("DOMContentLoaded", function () {
  fetchStores();
});

function fetchStores() {
  fetch('./php/stores/fetch.php')
    .then(response => response.json())
    .then(data => {
      const tbody = document.getElementById("storeTableBody");
      tbody.innerHTML = ""; // Clear previous rows

      if (data.length === 0) {
        tbody.innerHTML = `<tr><td colspan="5" class="text-center text-white">No stores found.</td></tr>`;
        return;
      }

      data.forEach(store => {
        const row = document.createElement("tr");

        row.innerHTML = `
          <td>${store.Store_City}</td>
          <td style="display:none;">${store.Store_Location}</td>
          <td>${store.Store_Email}</td>
          <td>${store.Store_OpeningHours}</td>
          <td>
            <button 
              class="btn btn-sm btn-outline-warning me-2 edit-store-btn"
              data-id="${store.Store_ID}"
              data-city="${store.Store_City}"
              data-location="${encodeURIComponent(store.Store_Location)}"
              data-email="${store.Store_Email}"
              data-hours="${store.Store_OpeningHours}"
            >
              <i class="bi bi-pencil-fill"></i> Edit
            </button>
            <button class="btn btn-sm btn-outline-danger" onclick="deleteStore(${store.Store_ID})">
              <i class="bi bi-trash-fill"></i> Delete
            </button>
          </td>
        `;

        tbody.appendChild(row);
      });

      // ✅ Now attach listeners AFTER rows are added
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
    })
    .catch(error => {
      console.error('Error fetching stores:', error);
    });
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
