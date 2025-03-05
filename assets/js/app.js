document.addEventListener("DOMContentLoaded", function () {
    const priceSlider = document.getElementById("priceSlider");
    const maxPrice = document.getElementById("maxPrice");

    priceSlider.addEventListener("input", function () {
        maxPrice.textContent = priceSlider.value;
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("bestelformulier");

  form.addEventListener("submit", function (event) {
      let isValid = true;

      function validateInput(id, errorMessage) {
          const input = document.getElementById(id);
          const errorSpan = document.getElementById(id + "Error");

          if (!input.checkValidity()) {
              errorSpan.textContent = errorMessage;
              input.classList.add("invalid");
              isValid = false;
          } else {
              errorSpan.textContent = "";
              input.classList.remove("invalid");
          }
      }

      validateInput("naam", "Naam is verplicht.");
      validateInput("email", "Voer een geldig e-mailadres in.");
      validateInput("telefoon", "Voer een geldig telefoonnummer in (min. 10 cijfers).");
      validateInput("adres", "Adres is verplicht.");
      validateInput("auto", "Selecteer een auto.");
      validateInput("aantal", "Voer een geldig aantal in (minimaal 1).");

      if (!isValid) {
          event.preventDefault();
      }
  });

  // Live validatie tijdens invoeren van de velden
  const inputs = document.querySelectorAll('input, select');
  inputs.forEach(input => {
      input.addEventListener('input', function () {
          const errorSpan = document.getElementById(input.id + "Error");
          if (input.checkValidity()) {
              errorSpan.textContent = "";
              input.classList.remove("invalid");
          } else {
              errorSpan.textContent = input.validationMessage;
              input.classList.add("invalid");
          }
      });
  });
});

