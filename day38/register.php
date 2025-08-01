<!DOCTYPE html>
<html>
<head>
  <title>Digital Marketing Registration Form</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #f8f9fa, #e0f7fa);
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      background-color: #ffffff;
      margin: 50px auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #00796b;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin: 12px 0 6px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
    }

    .button {
      display: block;
      width: 100%;
      background-color: #00796b;
      color: white;
      padding: 12px;
      margin-top: 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #004d40;
    }

    .note {
      text-align: center;
      font-size: 13px;
      color: #666;
      margin-top: 10px;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Digital Marketing Registration</h2>
  <form action="insert.php" method="get">
    <label for="name">name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">email </label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="course">Course </label>
    <select id="course" name="course">
      <option value="">--Select--</option>
      <option value="SEO">SEO</option>
      <option value="Social Media Marketing">Social Media Marketing</option>
      <option value="Content Marketing">Content Marketing</option>
      <option value="Email Marketing">Email Marketing</option>
      <option value="Google Ads">Google Ads</option>
    </select>

    <label for="experience"> experience</label>
    <select id="experience" name="experience">
      <option value="No">No</option>
      <option value="Yes">Yes</option>
    </select>

    <button class="button" type="submit">Register</button>

    <div class="note">We will get back to you within 24 hours after registration.</div>
  </form>
</div>

</body>
</html>