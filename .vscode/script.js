document.addEventListener("DOMContentLoaded", function () {
    const cartCountElement = document.getElementById("cart-count");
    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    // Haal de winkelwagenwaarde op uit localStorage
    let cartCount = parseInt(localStorage.getItem("cartCount") || "0", 10);
    cartCountElement.textContent = cartCount; // Update de UI

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function () {
            cartCount++;
            cartCountElement.textContent = cartCount;
            localStorage.setItem("cartCount", cartCount); // Opslaan in localStorage
        });
    });
});


