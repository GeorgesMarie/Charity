// Get the current page URL
const currentUrl = window.location.href;

// Select all the navigation links
const navLinks = document.querySelectorAll('.nav-link');

// Loop through the links and check if the link's href matches the current URL
navLinks.forEach((link) => {
  if (link.href === currentUrl) {
    // Add the 'active' class to highlight the active link
    link.classList.add('active');
    link.setAttribute("aria-current", "page");
  }
});
