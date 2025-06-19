document.getElementById('searchBtn').addEventListener('click', function () {
  const searchQuery = document.getElementById('searchInput').value.trim();
  const urlParams = new URLSearchParams(window.location.search);

  if (searchQuery) {
    urlParams.set('search', searchQuery);
  } else {
    urlParams.delete('search');
  }

  // Keep existing category filter if present
  const category = urlParams.get('category') || 'all';
  window.location.href = `shop?${urlParams.toString()}`;
});

