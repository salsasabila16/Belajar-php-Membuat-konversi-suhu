const temperatureInput = document.getElementById("temperature");
const unitSelect = document.getElementById("unit");
const celsiusText = document.getElementById("celsius");
const fahrenheitText = document.getElementById("fahrenheit");
const kelvinText = document.getElementById("kelvin");
const reamurText = document.getElementById("reamur");
const statusText = document.getElementById("status");
const body = document.body;

function convertTemperature() {
  let temp = parseFloat(temperatureInput.value);

  if (isNaN(temp)) {
    temp = 0;
  }

  let celsius;
  let fahrenheit;
  let kelvin;
  let reamur;
  /* Konversi suhu */
  if (unitSelect.value === "celsius") {
    celsius = temp;
    fahrenheit = (temp * 9) / 5 + 32;
    kelvin = temp + 273.15;
    reamur = (temp * 4) / 5;
  } else if (unitSelect.value === "fahrenheit") {
    celsius = ((temp - 32) * 5) / 9;
    fahrenheit = temp;
    kelvin = celsius + 273.15;
    reamur = (celsius * 4) / 5;
  } else if (unitSelect.value === "kelvin") {
    celsius = temp - 273.15;
    fahrenheit = (celsius * 9) / 5 + 32;
    kelvin = temp;
    reamur = (celsius * 4) / 5;
  } else if (unitSelect.value === "reamur") {
    celsius = (temp * 5) / 4;
    fahrenheit = (celsius * 9) / 5 + 32;
    kelvin = celsius + 273.15;
    reamur = temp;
  }

  celsiusText.innerHTML = celsius.toFixed(2) + " °C";
  fahrenheitText.innerHTML = fahrenheit.toFixed(2) + " °F";
  kelvinText.innerHTML = kelvin.toFixed(2) + " K";
  reamurText.innerHTML = reamur.toFixed(2) + " °R";

  body.classList.remove("freezing", "cold", "normal", "warm", "hot");

  if (celsius <= -20) {
    body.classList.add("freezing");
    statusText.innerHTML = "Sangat Dingin 🥶";
  } else if (celsius <= 10) {
    body.classList.add("cold");
    statusText.innerHTML = "Dingin 🧊";
  } else if (celsius <= 25) {
    body.classList.add("normal");
    statusText.innerHTML = "Normal 🌤️";
  } else if (celsius <= 35) {
    body.classList.add("warm");
    statusText.innerHTML = "Hangat ☀️";
  } else {
    body.classList.add("hot");
    statusText.innerHTML = "Panas 🔥";
  }
}

temperatureInput.addEventListener("input", convertTemperature);
unitSelect.addEventListener("change", () => {
  document.querySelectorAll(".result").forEach((item) => {
    item.classList.remove("active");
  });

  if (unitSelect.value === "celsius") {
    document.querySelector("#celsius").parentElement.classList.add("active");
  } else if (unitSelect.value === "fahrenheit") {
    document.querySelector("#fahrenheit").parentElement.classList.add("active");
  } else if (unitSelect.value === "kelvin") {
    document.querySelector("#kelvin").parentElement.classList.add("active");
  } else if (unitSelect.value === "reamur") {
    document.querySelector("#reamur").parentElement.classList.add("active");
  }

  convertTemperature();
});

convertTemperature();
