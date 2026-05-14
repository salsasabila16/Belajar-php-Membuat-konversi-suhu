<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Konversi Suhu</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
</head>
<body class="normal">
  <div class="cloud cloud1"></div>
  <div class="cloud cloud2"></div>
  <div class="cloud cloud3"></div>
  <div class="cloud cloud4"></div>

  <div class="container">

    <div class="card">

      <h1>🌡️ Konversi Suhu</h1>
      <div class="input-group">
        <input type="number" id="temperature" placeholder="0">

        <select id="unit">
          <option value="celsius">°C</option>
          <option value="fahrenheit">°F</option>
          <option value="kelvin">K</option>
          <option value="reamur">°R</option>
        </select>
      </div>

      <div class="status" id="status">
        Normal 🌤️
      </div>

      <div class="result active">
        <span>Celsius</span>
        <h2 id="celsius">0.00 °C</h2>
      </div>

      <div class="result">
        <span>Fahrenheit</span>
        <h2 id="fahrenheit">0.00 °F</h2>
      </div>

      <div class="result">
        <span>Kelvin</span>
        <h2 id="kelvin">0.00 K</h2>
      </div>

      <div class="result">
        <span>Reamur</span>
        <h2 id="reamur">0.00 °R</h2>
      </div>
    </div>
  </div>
  <script src="script.js"></script>

</body>
</html>