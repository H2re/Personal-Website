<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome | My Website</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #6dd5fa, #2980b9);
      color: white;
      text-align: center;
    }
    header {
      padding: 100px 20px 60px;
    }
    h1 {
      font-size: 3.5em;
      margin-bottom: 20px;
    }
    p {
      font-size: 1.5em;
    }
    .cta-button {
      margin-top: 30px;
      padding: 15px 30px;
      font-size: 1.2em;
      color: white;
      background-color: #34495e;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .cta-button:hover {
      background-color: #2c3e50;
    }
    footer {
      margin-top: 100px;
      padding: 20px;
      font-size: 0.9em;
      background-color: rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to My Website</h1>
    <p>Your gateway to amazing content and projects.</p>
    <a class="cta-button" href="about.php">Learn More</a>
  </header>

  <footer>
    &copy; <?php echo date("Y"); ?> My Website. All rights reserved.
  </footer>

</body>
</html>