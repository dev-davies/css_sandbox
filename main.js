document.addEventListener("DOMContentLoaded", () => {
  /* -------------------------------------------------------------
       1. Sticky Header
    ------------------------------------------------------------- */
  const header = document.querySelector(".header");

  const handleScroll = () => {
    if (window.scrollY > 50) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  };

  window.addEventListener("scroll", handleScroll);

  /* -------------------------------------------------------------
       2. Mobile Menu Toggle
    ------------------------------------------------------------- */
  const menuBtn = document.querySelector(".header__menu-btn");
  const mobileMenu = document.querySelector(".mobile-menu");

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener("click", () => {
      // Toggle active state on button (for animation) and menu
      const isActive = mobileMenu.classList.toggle("active");
      menuBtn.setAttribute("aria-expanded", isActive);

      // Optional: Prevent body scroll when menu is open
      document.body.style.overflow = isActive ? "hidden" : "";
    });
  }

  /* -------------------------------------------------------------
       3. Reveal Animation (Intersection Observer)
    ------------------------------------------------------------- */
  const observerOptions = {
    root: null, // viewport
    threshold: 0.15, // Trigger when 15% of element is visible
    rootMargin: "0px",
  };

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("fade-in-up");
        observer.unobserve(entry.target); // Only animate once
      }
    });
  }, observerOptions);

  // Select sections to animate
  const revealElements = document.querySelectorAll("section, .footer");
  revealElements.forEach((el) => {
    el.classList.add("reveal-init"); // Add base opacity: 0 css class
    revealObserver.observe(el);
  });
});
