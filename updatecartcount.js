document.addEventListener("DOMContentLoaded", function () {
  // This ensures that the code runs after the entire DOM has loaded

  // Select the cart count element
  const cartCountElement = document.querySelector(".cart-count");

  // Function to update the cart count
  function updateCartCount() {
    // Get the current cart count from localStorage or set it to 0 if none exists
    const currentCartCount = localStorage.getItem("cartCount") || 0;
    // Update the cart count element with the value
    cartCountElement.textContent = currentCartCount;
  }

  // Event listener for adding items to the cart
  document.querySelectorAll(".cart-button").forEach((button) => {
    button.addEventListener("click", function () {
      // Increment the cart count by 1 each time a product is added
      let cartCount = parseInt(localStorage.getItem("cartCount") || "0");
      cartCount++; // Increase the cart count

      // Save the updated count to localStorage
      localStorage.setItem("cartCount", cartCount);

      // Update the displayed cart count on the page
      updateCartCount();
    });
  });

  // Initialize the cart count on page load
  updateCartCount();
});
