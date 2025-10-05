// Main JavaScript file for Drift Wood website

document.addEventListener("DOMContentLoaded", function () {
  // Mobile menu toggle
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", function () {
      mobileMenu.classList.toggle("hidden");
    });
  }

  // Smooth scrolling for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // Add scroll effect to header
  const header = document.querySelector("header");
  if (header) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > 100) {
        header.classList.add("shadow-xl");
      } else {
        header.classList.remove("shadow-xl");
      }
    });
  }

  // Form validation helper
  function validateForm(form) {
    const inputs = form.querySelectorAll(
      "input[required], textarea[required], select[required]"
    );
    let isValid = true;

    inputs.forEach((input) => {
      if (!input.value.trim()) {
        input.classList.add("border-red-500");
        isValid = false;
      } else {
        input.classList.remove("border-red-500");
      }
    });

    return isValid;
  }

  // Add form validation to all forms
  const forms = document.querySelectorAll("form");
  forms.forEach((form) => {
    form.addEventListener("submit", function (e) {
      if (!validateForm(this)) {
        e.preventDefault();
        alert("Please fill in all required fields.");
      }
    });
  });

  // Loading animation
  function showLoading(element) {
    element.innerHTML =
      '<div class="animate-spin rounded-full h-6 w-6 border-b-2 border-white"></div>';
  }

  // Utility functions
  window.DriftWood = {
    showLoading: showLoading,
    validateForm: validateForm,
  };
});





