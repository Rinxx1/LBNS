  //navbar scroll effect
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');
  
  window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrollTop > lastScrollTop) {
      // Scrolling down - hide navbar
      navbar.classList.add('navbar-hidden');
    } else {
      // Scrolling up - show navbar
      navbar.classList.remove('navbar-hidden');
    }
  
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });

// Check if loading has already occurred before
if (!localStorage.getItem('loadingShown')) {
  // Show the loader
  document.querySelector('.loading-wrapper').style.display = "flex";

  setTimeout(() => {
    document.querySelector('.loading-wrapper').style.opacity = "0";
    setTimeout(() => {
      document.querySelector('.loading-wrapper').style.display = "none";

      // Set the flag so it's not shown again
      localStorage.setItem('loadingShown', 'true');
    }, 800);
  }, 2500);
} else {
  // Skip loader if already shown
  document.querySelector('.loading-wrapper').style.display = "none";
}

 

