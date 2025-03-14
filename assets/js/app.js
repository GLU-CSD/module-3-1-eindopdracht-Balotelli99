const priceSlider = document.getElementById("priceSlider");
const minPrice = document.getElementById("minPrice");
const maxPrice = document.getElementById("maxPrice");

// Initialiseer noUiSlider
noUiSlider.create(priceSlider, {
  start: [20000, 250000],
  connect: true,
  range: {
    'min': 20000,
    'max': 250000
  }
});

// Update de prijsweergave bij wijziging van de slider
priceSlider.noUiSlider.on('update', function (values) {
  minPrice.textContent = values[0];
  maxPrice.textContent = values[1];
});

// Winkelwagen teller
let cartCount = 0;

function updateCartCount() {
  document.getElementById("cart-count").textContent = cartCount;
}

// Zorg dat alles pas werkt als de pagina geladen is
document.addEventListener("DOMContentLoaded", function () {
  const addToCartButtons = document.querySelectorAll(".product-card button");

  addToCartButtons.forEach(button => {
    button.addEventListener("click", function () {
      cartCount++;
      updateCartCount();
    });
  });
});
