<!-- Save as: email_form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Subscribe to Our Newsletter</title>
  <style>
    body {
      background: #f2f2f2;
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      display: inline-block;
      width: 300px;
    }
    input[type="text"], input[type="email"] {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    button {
      padding: 10px 20px;
      background: #0066cc;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background: #004a99;
    }
  </style>
</head>
<body>

  <h2>Stay Updated!</h2>
  <p>Subscribe to receive marketing tips and updates.</p>

  <form action="inserttttt.php" method="get">
    <input type="text" name="name" placeholder="Your Name" required />
    <input type="email" name="email" placeholder="Your Email" required />
    <button type="submit">Subscribe</button>
  </form>

</body>
</html>
