# Temperature Converter — Premium Weather Dashboard

Real-time temperature converter with dynamic sky backgrounds and glassmorphism UI.

## Features

| Feature | Detail |
|---|---|
| **Real-time conversion** | Instant updates on every keystroke — no page reload |
| **4 units** | Celsius, Fahrenheit, Kelvin, Réaumur |
| **Dynamic background** | 9 sky gradient themes that cross-fade smoothly |
| **CSS clouds** | Pure CSS only — `border-radius` + `::before` + `::after` |
| **Condition labels** | 9 labels with emoji (🥶 to ☠️) |
| **Glassmorphism card** | `backdrop-filter: blur` + floating animation |
| **Session memory** | Remembers last used values (PHP `$_SESSION`) |
| **Responsive** | Mobile, tablet, desktop |

## Conversion Formulas

| From → To | Formula |
|---|---|
| Celsius → Fahrenheit | F = C × 9/5 + 32 |
| Fahrenheit → Celsius | C = (F − 32) × 5/9 |
| Celsius → Kelvin | K = C + 273.15 |
| Kelvin → Celsius | C = K − 273.15 |
| Celsius → Réaumur | R = C × 4/5 |
| Réaumur → Celsius | C = R × 5/4 |

## Temperature Themes

| Range (°C) | Background | Condition |
|---|---|---|
| < −20 | Dark purple–deep blue night sky | 🥶 Extremely Cold |
| −20 to 0 | Deep navy | ❄️ Freezing |
| 0 to 10 | Dark blue | 🧥 Cold |
| 10 to 20 | Cyan-blue | 😊 Cool |
| 20 to 25 | Bright sky blue | 😌 Comfortable |
| 25 to 30 | Blue-to-yellow | ☀️ Warm |
| 30 to 35 | Orange gradient | 🔥 Hot |
| 35 to 40 | Orange-red gradient | 🥵 Very Hot |
| > 40 | Deep crimson | ☠️ Extreme Heat |

## File Structure

```
konversi-suhu/
├── index.php           Main page — PHP session init + full HTML
├── proses.php          API: save_session, clear_session, convert (JSON)
├── assets/
│   ├── css/style.css   All styles: sky themes, CSS clouds, glassmorphism card
│   └── js/script.js    Real-time conversion, background cross-fade, session save
└── README.md
```

## Running the Project

### PHP built-in server (quickest)
```bash
cd /path/to/konversi-suhu
php -S localhost:8000
# Open http://localhost:8000
```

### XAMPP / Laragon / WAMP
Copy the `konversi-suhu/` folder to `htdocs/` (XAMPP) or `www/` (Laragon), then open:
```
http://localhost/konversi-suhu/
```

## Requirements
- PHP 8.0+ (PHP 7.4 minimum — uses `match` expression in `proses.php`)
- Modern browser (Chrome 88+, Firefox 79+, Safari 14+, Edge 88+)
- No Composer, no npm, no framework

## Tech Stack
- **PHP** (native, no framework) — session persistence, server-side conversion API
- **HTML5** — semantic markup, ARIA labels
- **CSS3** — Custom Properties, `backdrop-filter`, `@keyframes`, CSS Grid, Flexbox
- **JavaScript** (vanilla, no library) — real-time conversion, two-layer gradient cross-fade, `sendBeacon` session sync
- **Google Fonts** — Poppins (300–800)
