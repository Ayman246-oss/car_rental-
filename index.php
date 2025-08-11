<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AS Showroom - Car Rental</title>
  <style>
    /* Reset and base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: linear-gradient(to bottom, #0a5bc4, #3b91f8);
      color: white;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    header {
      width: 100%;
      max-width: 1200px;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #004aad;
      box-shadow: 0 3px 6px rgba(0,0,0,0.3);
    }
    header h1 {
      font-weight: 700;
      font-size: 1.8rem;
      letter-spacing: 2px;
      cursor: default;
    }
    nav {
      display: flex;
      gap: 25px;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      padding: 7px 15px;
      border-radius: 5px;
      transition: background 0.3s ease;
    }
    nav a:hover {
      background: rgba(255, 255, 255, 0.2);
    }
    main {
      margin: 40px auto;
      width: 100%;
      max-width: 1100px;
      background: rgba(255 255 255 / 0.15);
      border-radius: 15px;
      padding: 25px 30px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    }
    h2 {
      margin-bottom: 20px;
      font-weight: 700;
      font-size: 2rem;
      text-align: center;
      text-shadow: 1px 1px 3px #002d6a;
    }
    form {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .input-group {
      flex: 1 1 250px;
      min-width: 250px;
      display: flex;
      flex-direction: column;
    }
    .input-group label {
      margin-bottom: 8px;
      font-weight: 600;
      font-size: 1rem;
      text-shadow: 1px 1px 2px #003b90;
    }
    .input-group input, .input-group select {
      padding: 10px 15px;
      border-radius: 6px;
      border: none;
      font-size: 1rem;
      outline: none;
      box-shadow: inset 0 0 5px #0072ff;
    }
    .checkbox-group {
      flex: 1 1 100%;
      display: flex;
      justify-content: center;
      gap: 30px;
      margin-top: 10px;
      font-weight: 600;
      font-size: 0.9rem;
      text-shadow: 1px 1px 2px #003b90;
    }
    .checkbox-group label {
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .checkbox-group input[type="checkbox"] {
      width: 18px;
      height: 18px;
      cursor: pointer;
    }
    button {
      background-color: #0077ff;
      color: white;
      font-size: 1.1rem;
      font-weight: 700;
      border: none;
      border-radius: 8px;
      padding: 14px 35px;
      cursor: pointer;
      margin-top: 20px;
      box-shadow: 0 5px 12px #004aad;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #005fcc;
    }
    footer {
      width: 100%;
      background: #004aad;
      color: white;
      text-align: center;
      padding: 15px 0;
      margin-top: auto;
      font-size: 0.9rem;
      box-shadow: inset 0 3px 6px rgba(0,0,0,0.3);
    }
    @media (max-width: 600px) {
      nav {
        flex-direction: column;
        gap: 10px;
      }
      form {
        flex-direction: column;
        gap: 15px;
      }
      .checkbox-group {
        flex-direction: column;
        gap: 10px;
      }
      .input-group {
        min-width: auto;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>AS Showroom</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#">Car Rentals</a>
      <a href="#">Attractions</a>
      <a href="#">Airport Taxis</a>
    </nav>
  </header>
  <main>
    <h2>Car Rental – Search, Compare & Save</h2>
    <form>
      <div class="input-group">
        <label for="pickup-location">Pick-up Location</label>
        <input type="text" id="pickup-location" name="pickup-location" placeholder="Airport, city or station" required />
      </div>
      <div class="input-group">
        <label for="pickup-date">Pick-up Date</label>
        <input type="date" id="pickup-date" name="pickup-date" required />
      </div>
      <div class="input-group">
        <label for="pickup-time">Pick-up Time</label>
        <input type="time" id="pickup-time" name="pickup-time" required />
      </div>
      <div class="input-group">
        <label for="dropoff-date">Drop-off Date</label>
        <input type="date" id="dropoff-date" name="dropoff-date" required />
      </div>
      <div class="input-group">
        <label for="dropoff-time">Drop-off Time</label>
        <input type="time" id="dropoff-time" name="dropoff-time" required />
      </div>
      <div class="checkbox-group">
        <label><input type="checkbox" name="drop-different-location" /> Drop car off at different location</label>
        <label><input type="checkbox" name="driver-age" checked /> Driver aged between 30 - 65?</label>
      </div>
      <div style="width: 100%; text-align: center;">
        <button type="submit">Search</button>
      </div>
    </form>
  </main>
  <footer>
    &copy; 2025 AS Showroom. All rights reserved.
  </footer>
</body>
</html>
