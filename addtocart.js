// 1- add unique data to each product

//2 add an empty cart array
const cart = [];

// 3. select the 'add to cart'buttons
const cartButtons = document.querySelectorAll(".cart-button");

cartButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    const productElement = event.target.closest(".product-card");

    const product = {
      id: productElement.dataset.id,
      name: productElement.dataset.name,
      price: parseFloat(productElement.dataset.price),
      quantity: 1,
      image: productElement.dataset.image,
    };
    addToCart(product);
  });
});

// 4 add product to cart
function addToCart(product) {
  const existingProduct = cart.find((item) => item.id === product.id);

  if (existingProduct) {
    existingProduct.quantity += 1;
  } else {
    cart.push(product);
  }
  localStorage.setItem("cart", JSON.stringify(cart));

  updateCart();
}

// 5 render the cart
function updateCart() {
  const cartContainer = document.querySelector(".cart-items");

  const cartHtml = cart
    .map(
      (item) => `
    <div class="cart-item">
      <h4>${item.name}</h4>
      <p>Quantity: ${item.quantity}</p>
      <p>Price: £${(item.price * item.quantity).toFixed(2)}</p>
      <button onclick="removeFromCart('${item.id}')">Remove</button>
      <img src="${item.image}" alt="${item.name}" />
    </div>`
    )
    .join("");

  cartContainer.innerHTML = cartHtml;
}

// 6 Remove items from cart
function removeFromCart(id) {
  const index = cart.findIndex((item) => item.id === id);
  if (index !== -1) {
    cart.splice(index, 1);
  }
  updateCart();
  updateTotal();
}

// 7 Display the total
function updateTotal() {
  const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
  document.querySelector(".cart-total").textContent = `Total: £${total.toFixed(
    2
  )}`;
}
