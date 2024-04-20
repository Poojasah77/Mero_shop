const infobar = document.getElementById("infobar");
const buyButton = document.getElementById("buy-button");
buyButton.addEventListener("click", () => {
  buyAll();
});

// Initialize cart
let cart = {
  items: 0,
  total: 0,
  cartItems: [],
};

// Function to display products
function displayProducts() {
  infobar.style.display = "none";
  updateCartButton();
}

// Function to add product to cart (you can implement this as needed)
function addToCart(product) {
  infobar.style.display = "block";
  // Update cart
  cart.items += 1;
  cart.total += Number(product.price);
  cart.cartItems.push(product);

  console.log(product.price);

  updateCartButton();

  const info = `Product ${product.id} added to cart`;
  infobar.textContent = info;
  setTimeout(() => {
    infobar.textContent = "";
    infobar.style.display = "none";
  }, 3000);
}

// Function to update cart button
function updateCartButton() {
  const cartButton = document.getElementById("cart-button");
  cartButton.textContent = `Cart (${
    cart.items
  }) - Total Price: Rs. ${cart.total.toFixed(2)}`;
}

function buyAll() {
  if (cart.items === 0) {
    alert("Cart is empty");
    return;
  }

  const cartItems = cart.cartItems;
  const cartTotal = cart.total;

  // Reset cart
  cart = {
    items: 0,
    total: 0,
    cartItems: [],
  };

  updateCartButton();

  // Display message
  const info = `You have bought ${
    cartItems.length
  } items for Rs. ${cartTotal.toFixed(2)}`;

  window.alert(info);

  // // call php update database
  // let data = JSON.stringify(cartItems);

  // // Make a POST request to buyall.php
  // fetch("buyall.php", {
  //   method: "POST",
  //   headers: {
  //     "Content-Type": "application/json",
  //   },
  //   body: data,
  // })
  //   .then((response) => response.json())
  //   .then((data) => console.log(data))
  //   .catch((error) => {
  //     console.error("Error:", error);
  //   });
}

// Display products when the page loads
window.onload = displayProducts;
