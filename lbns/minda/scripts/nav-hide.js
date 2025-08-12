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