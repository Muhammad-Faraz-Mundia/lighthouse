let lastScrollTop = 0;

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("scroll", function() {
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    const scrollThreshold = windowHeight * 0.8;

    const elements = document.querySelectorAll(".fade-in-animation");
   
    elements.forEach(element => {
      const distanceToTop = element.getBoundingClientRect().top;
      if (distanceToTop <= scrollThreshold) {
        element.classList.add("in-viewport");
         console.log("test");
      } else {
        element.classList.remove("in-viewport");
      }
    });

    lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop; // For Mobile or negative scrolling
  });
});


jQuery('.hamburger-menu').on('click', function() {
    jQuery('nav').toggleClass('hidden');
});