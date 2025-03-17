document.addEventListener("DOMContentLoaded", () => {
  initializePriceSlider();
  setupCartFunctionality();
});

/**
 * update de prijsweergave.
 */
function initializePriceSlider() {
  const priceSlider = document.getElementById("priceSlider");
  const minPrice = document.getElementById("minPrice");
  const maxPrice = document.getElementById("maxPrice");

  if (!priceSlider) return;

  noUiSlider.create(priceSlider, {
    start: [20000, 250000],
    connect: true,
    range: { min: 20000, max: 250000 },
    step: 1000,
  });

  priceSlider.noUiSlider.on("update", (values) => {
    minPrice.textContent = parseInt(values[0]).toLocaleString();
    maxPrice.textContent = parseInt(values[1]).toLocaleString();
  });
}

/**
 * Beheer de winkelwagen-functionaliteit.
 */
function setupCartFunctionality() {
  let cartCount = 0;
  const cartCountElement = document.getElementById("cart-count");
  const addToCartButtons = document.querySelectorAll(".product-card button");

  if (!cartCountElement) return;

  const updateCartCount = () => {
    cartCountElement.textContent = cartCount;
  };

  addToCartButtons.forEach((button) => {
    button.addEventListener("click", () => {
      cartCount++;
      updateCartCount();
    });
  });
}
