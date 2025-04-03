<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sultan's Car Empire - Bestellen</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

  <div class="bestelnavbar">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
    <img src="/assets/img/logo.png" alt="Logo">
  </div>

  <div class="bestelcontainer">
    <h2>Bestelformulier</h2>
    <form id="bestelformulier">

      <div class="form-group">
        <label>Aanhef:</label>
        <div class="aanhef-options">
          <label><input type="radio" name="aanhef" value="dhr" required> Dhr.</label>
          <label><input type="radio" name="aanhef" value="mevr"> Mevr.</label>
          <label><input type="radio" name="aanhef" value="anders"> Anders</label>
        </div>
      </div>

      <div class="form-group">
        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" placeholder="Uw voornaam" required>
      </div>

      <div class="form-group">
        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" placeholder="Uw achternaam" required>
      </div>

      <div class="form-group">
        <label for="adres">Straatnaam & Huisnummer:</label>
        <input type="text" id="adres" name="adres" placeholder="Straatnaam + Nr." required>
      </div>

      <div class="form-group">
        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" placeholder="1234 AB" required>
      </div>

      <div class="form-group">
        <label for="land">Land:</label>
        <select id="land" name="land" required>
          <option value="">Selecteer een land</option>
          <option value="Nederland">Nederland</option>
          <option value="Duitsland">Duitsland</option>
          <option value="België">België</option>
        </select>
      </div>

      <div class="form-group">
        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" placeholder="Uw e-mail" required>
      </div>

      <div class="form-group">
        <label for="telefoon">Telefoonnummer:</label>
        <input type="tel" id="telefoon" name="telefoon" placeholder="+31 6 12345678" required>
      </div>

      <div class="form-group">
        <label for="auto">Gekozen auto:</label>
        <select id="auto" name="auto" required>
          <option value="">Selecteer een auto</option>
          <option value="Audi RS5">Audi RS5</option>
          <option value="BMW M5">BMW M5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="aantal">Aantal:</label>
        <input type="number" id="aantal" name="aantal" min="1" required>
      </div>

      <div class="form-group checkbox-group">
        <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
        <label for="voorwaarden">Ik ga akkoord met de <a href="voorwaarden.html" target="_blank">algemene voorwaarden</a></label>
      </div>

      <button type="submit" class="btn-submit">Bestelling plaatsen</button>

    </form>
  </div>

<!-- Footer -->
<footer class="betselfooter"><!-- Aangepaste Footer -->
  <footer class="bestelfooter">
    <div class="bestelfooter-container">
      
      <div class="bestelfooter-section">
        <h3>VEILIG BETALEN</h3>
        <p>Betaal in alle veiligheid met onze partners</p>
        <div class="bestelpayment-methods">
          <img src="mastercard.png" alt="Mastercard">
          <img src="visa.png" alt="Visa">
          <img src="paypal.png" alt="PayPal">
        </div>
      </div>
  
      <div class="bestelfooter-section">
        <h3>LEVERINGSKOSTEN</h3>
        <p>Transport tarieven</p>
      </div>
  
      <div class="bestelfooter-section">
        <h3>KLANTENSERVICE</h3>
        <p>- Wachtwoord vergeten</p>
        <p>- Veilig Betaling</p>
        <p>- Levering</p>
        <p>- Annuleren, retourneren en ruilen</p>
      </div>
  
      <div class="bestelfooter-section">
        <h3>OVER ONS</h3>
        <p>- Over ons</p>
        <p>- Contactformulier</p>
        <p>- Algemene voorwaarden</p>
        <p>- Privacy beleid</p>
      </div>
    </div>
  
    <!-- Sub-footer voor copyright -->
    <div class="bestelfooter-copyright">
      <p>&copy; 2025 Sultan's Car Empire. Alle rechten voorbehouden.</p>
    </div>
  </footer>
</body>
</html>
