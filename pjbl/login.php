<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="logo-nav">
        <div class="logo-circle">
        <img src="images/logo.png" alt="Logo" height="45px" width="45px"/>
        </div>
        <nav class="nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="user-icon">
        <!-- User icon SVG -->
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716
                   C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214
                   5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3
                   12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                   stroke="black" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </header>

  <!-- Banner -->
  <div class="banner"></div>

  <!-- Main Content -->
  <main class="main">
    <div class="login-container">
      <!-- Logo Section -->
      <div class="left-box">
        <img src="images/logo.png" alt="Logo" class="logo-img" />
      </div>

      <!-- Login Form -->
      <div class="right-box">
        <h2>Login</h2>
        <form method="post" action="process_login.php">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />

          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />

          <button type="submit">Login</button>
        </form>

        <div class="register-link">
          <a href="signup.php">Create an account</a>
        </div>
      </div>
    </div>
  </main>

</body>
</html>
