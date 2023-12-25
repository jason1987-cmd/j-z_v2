<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory System</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #607274;
      color: white;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #logo {
      max-width: 100px; /* Adjust the maximum width of your logo */
      height: auto;
      vertical-align: middle;
      border-radius: 50%; /* Make the logo round */
    }

    #header-text {
      display: inline-block;
      margin-left: 10px;
      vertical-align: middle;
    }

    nav {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 0 10px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
    }

    /* Mobile responsiveness */
    @media only screen and (max-width: 600px) {
      header {
        flex-direction: column;
        text-align: center;
      }

      #logo {
        margin-bottom: 10px;
      }

      nav {
        justify-content: center;
        margin-top: 10px;
      }

      nav a {
        margin: 0 10px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div>
      <img src="logo.jpg" alt="Your Logo" id="logo">
      <h1 id="header-text">J&Z Milktea House</h1>
    </div>
    <nav>
      <a href="user_manual.php">User Manual</a>
      <a href="docs_v4.pdf">Document</a>
      <a href="g5.php">Group 5</a>
    </nav>
  </header>

  <!-- Rest of your HTML content goes here -->

</body>
</html>
