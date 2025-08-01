<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Booking Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      padding: 20px;
    }
    .booking-form {
      max-width: 500px;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin: auto;
    }
    .booking-form h2 {
      margin-bottom: 20px;
    }
    .booking-form label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    .booking-form input,
    .booking-form select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    .booking-form button {
      margin-top: 20px;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .booking-form button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
    <from action="insert.php" method="get">
    <h2>Hotel Booking Form</h2>

    <label for="name">name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">email</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="checkin">checkin</label>
    <input type="date" id="checkin" name="checkin" required>

    <label for="checkout">checkout</label>
    <input type="date" id="checkout" name="checkout" required>

    <label for="roomType">roomtype</label>
    <select id="roomType" name="roomType" required>
      <option value="">Select a room type</option>
      <option value="single">Single</option>
      <option value="double">Double</option>
      <option value="suite">Suite</option>
    </select>

    <label for="guests">Guest</label>
    <input type="number" id="guest" name="guest" min="1" max="10" required>

    <button type="submit">Book Now</button>
  </from>
  
</body>
</html>