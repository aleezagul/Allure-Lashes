<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Shopping Cart</title>
  <link rel="stylesheet" href="cartstyle.css" />
</head>

<body>
  <?php include 'nav.php';?>


  <div class="cart-container">

    <section class="cart-items">

    </section>

    <section class="cart-summary">
      <h2>Summary</h2>
      <hr class="item-divider" />
      <div class="cart-summary-details">
        <p class="cart-total-title">Total</p>
        <p class="cart-total"> £0.00</p>

      </div>
      <hr class="item-divider" />
      <div class="notes-section">
        <label for="customer-notes"></label>
        <textarea id="customer-notes" class="notes-box" placeholder="Add extra notes here"></textarea>
      </div>
      <div class="summary-buttons">
        <button class="checkout">Checkout</button>
        <button class="continue-shopping"><a href="index.php">Continue shopping</a></button>
      </div>
    </section>
  </div>


  <script>
  document.addEventListener("DOMContentLoaded", () => {
    // Fetch saved cart data from localStorage
    const savedCart = JSON.parse(localStorage.getItem("cart")) || [];

    // Select the cart items container
    const cartItemsContainer = document.querySelector(".cart-items");

    // Generate HTML for cart items
    const cartHtml = savedCart.map(item => `
    <div class="cart-item-wrapper">
      <img src="${item.image}" alt="${item.name}" />
      <div class="item-info">
        <h1>${item.name}</h1>
        <div class="quantity-selector">
          <button class="decrement" aria-label="decrease quantity">-</button>
          <span class="quantity-display">${item.quantity}</span>
          <button class="increment" aria-label="increase quantity">+</button>
        </div>
      </div>
      <div class="item-price">
        <p>£${(item.price * item.quantity).toFixed(2)}</p>
        <button class="remove">remove</button>
      </div>
    </div>
    <hr class="item-divider" />
  `).join("");

    // Add the generated HTML to the cart items container
    cartItemsContainer.innerHTML = cartHtml;

    // Update the total price
    const total = savedCart.reduce(
      (sum, item) => sum + item.price * item.quantity,
      0
    );
    document.querySelector(".cart-total").textContent = ` £${total.toFixed(2)}`;
  });
  </script>


</body>
<?php include 'footer.php';?>

</html>