<!-- save as: index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Join Our Audience</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      padding: 50px;
      text-align: center;
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 8px;
      max-width: 400px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, button {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <h2>Subscribe for Updates</h2>
  <form action="insertttt.php" method="get">
    <input type="text" name="name" placeholder="Your Name" required />
    <input type="email" name="email" placeholder="Your Email" required />
    <input type="text" name="interest" placeholder="Your Interest (e.g. Marketing)" required />
    <button type="submit">Join Now</button>
  </form>
</body>
</html>
