<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sultan's Car Empire</title>
  

 
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css">


  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
  <script>
    function openNav() {
      document.querySelector(".sidebar").style.width = "160px";
    }

    function closeNav() {
      document.querySelector(".sidebar").style.width = "0";
    }
  </script>
</head>

<style></style>

<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div class="aanhef-options">
      <label for="AUDI"><input type="radio" id="AUDI" name="aanhef" value="AUDI" required /> AUDI.</label>
      <label for="BMW"><input type="radio" id=BMW" name="BMW" value="BMW" /> BMW.</label>
    </div>

    <!-- Prijslider -->
    <div class="price-filter">
      <label>Prijs: €<span id="minPrice">20.000</span> - €<span id="maxPrice">250.000</span></label>
      <div id="priceSlider"></div>
    </div>
  </div>

  <!-- Navbar -->
  <div class="navbar">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ Menu</span>
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
    <a href="indexbestel.html"><i class="fa fa-fw fa-shopping-cart"></i> Checkout (<span id="cart-count">0</span>)</a>
    <img src="/assets/img/logo.png" alt="Logo">
  </div>

  <div class="container">

    <div class="product-card">
      <h2>Audi RS5</h2>
      <h3>20.000km stand</h3>
      <h4>Sportback 2.9 TFSI 450pk quattro Pano B&O Carbon H</h4>
      <img src="image_.png" alt="Audi RS5">
      <div class="prijs">€80.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>



    <div class="product-card">
      <h2>BMW M5</h2>
      <h3>50.000km stand</h3>
      <h4>Touring xDrive Competition | Facelift, Goodwood Green,8L</h4>
      <img src="image_copy_.png" alt="BMW M5">
      <div class="prijs">€162.500</div>
      <button class="add-to-cart">Add to cart</button>

    </div>


    <div class="product-card">
      <h2>AUDI RS3</h2>
      <h3>70.000km stand</h3>
      <h4>Sportback 2.5 TFSI quattro - RS Dynamic + l Cerami</h4>
      <img src="image_copy_2.png" alt="Audi RS3">
      <div class="prijs">€40.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>




    <div class="product-card">
      <h2>BMW 118</h2>
      <h3>120.000km stand</h3>
      <h4>1-serie 118i M Sport - Camera - Sportleder - Stoel</h4>
      <img src="image_copy_3.png" alt="BMW 118">
      <div class="prijs">€20.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>



    <div class="product-card">
      <h2>RS6</h2>
      <h3>12.000km stand</h3>
      <h4>RS6 JOHANN ABT SIGNATURE EDITION NR. 36/64 800 PK</h4>
      <img src="image_copy_4.png" alt="RS6">
      <div class="prijs">€207.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>



    <div class="product-card">
      <h2>BMW X4</h2>
      <h3>62.000km stand</h3>
      <h4>XDrive20i High Executive - M-sport - Pano - Maxton - Cam|</h4>
      <img src="image_copy_5.png" alt="BMW X4">
      <div class="prijs">€40.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>



    <div class="product-card">
      <h2>TT</h2>
      <h3>200.000km stand</h3>
      <h4>2.0 TFSI TTS quattro Pro Line + | Virtual cockpit</h4>
      <img src="image_copy_6.png" alt="BMW X4">
      <div class="prijs">€15.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>


    <div class="product-card">
      <h2>Audi RS5</h2>
      <h3>20.000km stand</h3>
      <h4>Sportback 2.9 TFSI 450pk quattro Pano B&O Carbon H</h4>
      <img src="image_.png" alt="Audi RS5">
      <div class="prijs">€80.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>
    

    <div class="product-card">
      <h2>RS6</h2>
      <h3>12.000km stand</h3>
      <h4>RS6 JOHANN ABT SIGNATURE EDITION NR. 36/64 800 PK</h4>
      <img src="image_copy_4.png" alt="RS6">
      <div class="prijs">€207.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

      
    <div class="product-card">
      <h2>BMW M5</h2>
      <h3>50.000km stand</h3>
      <h4>Touring xDrive Competition | Facelift, Goodwood Green,8L</h4>
      <img src="image_copy_.png" alt="BMW M5">
      <div class="prijs">€162.500</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    <div class="product-card">
      <h2>AUDI RS3</h2>
      <h3>70.000km stand</h3>
      <h4>Sportback 2.5 TFSI quattro - RS Dynamic + l Cerami</h4>
      <img src="image_copy_2.png" alt="Audi RS3">
      <div class="prijs">€40.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    
    <div class="product-card">
      <h2>BMW 118</h2>
      <h3>120.000km stand</h3>
      <h4>1-serie 118i M Sport - Camera - Sportleder - Stoel</h4>
      <img src="image_copy_3.png" alt="BMW 118">
      <div class="prijs">€20.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    <div class="product-card">
      <h2>BMW X4</h2>
      <h3>62.000km stand</h3>
      <h4>XDrive20i High Executive - M-sport - Pano - Maxton - Cam|</h4>
      <img src="image_copy_5.png" alt="BMW X4">
      <div class="prijs">€40.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    <div class="product-card">
      <h2>TT</h2>
      <h3>200.000km stand</h3>
      <h4>2.0 TFSI TTS quattro Pro Line + | Virtual cockpit</h4>
      <img src="image_copy_6.png" alt="BMW X4">
      <div class="prijs">€15.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    <div class="product-card">
      <h2>Audi RS5</h2>
      <h3>20.000km stand</h3>
      <h4>Sportback 2.9 TFSI 450pk quattro Pano B&O Carbon H</h4>
      <img src="image_.png" alt="Audi RS5">
      <div class="prijs">€80.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    <div class="product-card">
      <h2>BMW M5</h2>
      <h3>50.000km stand</h3>
      <h4>Touring xDrive Competition | Facelift, Goodwood Facelift, Goodwood Green,8L</h4>
      <img src="image_copy_.png" alt="BMW M5">
      <div class="prijs">€162.500</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    <div class="product-card">
      <h2>AUDI RS3</h2>
      <h3>70.000km stand</h3>
      <h4>Sportback 2.5 TFSI quattro - RS Dynamic + l Cerami</h4>
      <img src="image_copy_2.png" alt="Audi RS3">
      <div class="prijs">€40.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    
    <div class="product-card">
      <h2>BMW 118</h2>
      <h3>120.000km stand</h3>
      <h4>1-serie 118i M Sport - Camera - Sportleder - Stoel</h4>
      <img src="image_copy_3.png" alt="BMW 118">
      <div class="prijs">€20.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    <div class="product-card">
      <h2>Audi RS5</h2>
      <h3>20.000km stand</h3>
      <h4>Sportback 2.9 TFSI 450pk quattro Pano B&O Carbon H</h4>
      <img src="image_.png" alt="Audi RS5">
      <div class="prijs">€80.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>



    <div class="product-card">
      <h2>BMW M5</h2>
      <h3>50.000km stand</h3>
      <h4>Touring xDrive Competition | Facelift, Goodwood Green,8L</h4>
      <img src="image_copy_.png" alt="BMW M5">
      <div class="prijs">€162.500</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

    
    <div class="product-card">
      <h2>BMW 118</h2>
      <h3>120.000km stand</h3>
      <h4>1-serie 118i M Sport - Camera - Sportleder - Stoel</h4>
      <img src="image_copy_3.png" alt="BMW 118">
      <div class="prijs">€20.000</div>
      <button class="add-to-cart">Add to cart</button>

    </div>

<!-- Footer -->
<footer class="footer"><!-- Aangepaste Footer -->
  <footer class="footer">
    <div class="footer-container">
      
      <div class="footer-section">
        <h3>VEILIG BETALEN</h3>
        <p>Betaal in alle veiligheid met onze partners</p>
        <div class="payment-methods">
          <img src="mastercard.png" alt="Mastercard">
          <img src="visa.png" alt="Visa">
          <img src="paypal.png" alt="PayPal">
        </div>
      </div>
  
      <div class="footer-section">
        <h3>LEVERINGSKOSTEN</h3>
        <p>Transport tarieven</p>
      </div>
  
      <div class="footer-section">
        <h3>KLANTENSERVICE</h3>
        <p>- Wachtwoord vergeten</p>
        <p>- Veilig Betaling</p>
        <p>- Levering</p>
        <p>- Annuleren, retourneren en ruilen</p>
      </div>
  
      <div class="footer-section">
        <h3>OVER ONS</h3>
        <p>- Over ons</p>
        <p>- Contactformulier</p>
        <p>- Algemene voorwaarden</p>
        <p>- Privacy beleid</p>
      </div>
    </div>
  
    <!-- Sub-footer voor copyright -->
    <div class="footer-copyright">
      <p>&copy; 2025 Sultan's Car Empire. Alle rechten voorbehouden.</p>
    </div>
  </footer>
  

  <!-- JavaScript voor prijslider en winkelwagen -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      
      const priceSlider = document.getElementById("priceSlider");
      const minPrice = document.getElementById("minPrice");
      const maxPrice = document.getElementById("maxPrice");

      noUiSlider.create(priceSlider, {
        start: [20000, 250000],
        connect: true,
        range: { 'min': 20000, 'max': 250000 },
        step: 1000
      });

      priceSlider.noUiSlider.on('update', function (values) {
        minPrice.textContent = parseInt(values[0]).toLocaleString();
        maxPrice.textContent = parseInt(values[1]).toLocaleString();
      });

      // Winkelwagen functionaliteit
      let cartCount = 0;
      const cartCountElement = document.getElementById("cart-count");
      const addToCartButtons = document.querySelectorAll(".add-to-cart");

      addToCartButtons.forEach(button => {
        button.addEventListener("click", function () {
          cartCount++;
          cartCountElement.textContent = cartCount;
        });
      });
    });
  </script>

</body>
</html>
