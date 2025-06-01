<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Palanquin:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Maven Pro', sans-serif;
      background-color: #f5f5f5;
      padding-top: 100px;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
    }
    
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 40px;
      background-color: white;
      box-shadow: 0px 2px 5px #280137;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }
    
    .logo {
      width: 35px;
      height: 35px;
      background-color: #280137;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }
    
    .logo img {
      width: 25px;
      height: 25px;
    }
    
    .purple-bar {
      background-color: #280137;
      height: 30px;
      width: 100%;
      top: 55px;
      display: flex;
      z-index: 999;
      position: fixed;
    }
    
    .nav-links {
      display: flex;
      gap: 25px;
    }
    
    .nav-links a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s ease;
      font-size: 14px;
    }

    .nav-links a:hover {
      color: #722a8a;
    }
    
    .nav-icons {
      display: flex;
      gap: 15px;
      align-items: center;
    }
    
    .cart-icon {
      position: relative;
      cursor: pointer;
    }
    
    .cart-count {
      position: absolute;
      top: -8px;
      right: -8px;
      background-color: #722a8a;
      color: white;
      border-radius: 50%;
      width: 16px;
      height: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
    }

    .nav-icons svg {
      cursor: pointer;
      transition: stroke 0.3s ease;
      width: 20px;
      height: 20px;
    }

    .nav-icons svg:hover {
      stroke: #722a8a;
    }
    
    .main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 100px);
      padding: 20px;
      position: relative;
    }

    /* Animated background elements */
    .bg-animation {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      overflow: hidden;
    }

    .bg-circle {
      position: absolute;
      border-radius: 50%;
      background: linear-gradient(45deg, rgba(40, 1, 55, 0.03), rgba(40, 1, 55, 0.08));
      animation: moveAround 20s linear infinite;
    }

    .bg-circle:nth-child(1) {
      width: 200px;
      height: 200px;
      top: 10%;
      left: -100px;
      animation-duration: 25s;
      animation-delay: 0s;
    }

    .bg-circle:nth-child(2) {
      width: 150px;
      height: 150px;
      top: 70%;
      right: -75px;
      animation-duration: 30s;
      animation-delay: 5s;
    }

    .bg-circle:nth-child(3) {
      width: 300px;
      height: 300px;
      bottom: 20%;
      left: -150px;
      animation-duration: 35s;
      animation-delay: 10s;
    }

    .bg-circle:nth-child(4) {
      width: 100px;
      height: 100px;
      top: 30%;
      right: 10%;
      animation-duration: 20s;
      animation-delay: 15s;
    }

    .bg-circle:nth-child(5) {
      width: 250px;
      height: 250px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation-duration: 40s;
      animation-delay: 8s;
    }

    @keyframes moveAround {
      0% {
        transform: translate(0, 0) rotate(0deg);
      }
      25% {
        transform: translate(100px, -50px) rotate(90deg);
      }
      50% {
        transform: translate(50px, 100px) rotate(180deg);
      }
      75% {
        transform: translate(-50px, 50px) rotate(270deg);
      }
      100% {
        transform: translate(0, 0) rotate(360deg);
      }
    }

    /* Floating dots */
    .floating-dots {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
    }

    .dot {
      position: absolute;
      width: 4px;
      height: 4px;
      background-color: rgba(40, 1, 55, 0.2);
      border-radius: 50%;
      animation: floatDot 15s linear infinite;
    }

    .dot:nth-child(1) { top: 20%; left: 20%; animation-delay: 0s; }
    .dot:nth-child(2) { top: 80%; left: 80%; animation-delay: 2s; }
    .dot:nth-child(3) { top: 40%; left: 60%; animation-delay: 4s; }
    .dot:nth-child(4) { top: 60%; left: 30%; animation-delay: 6s; }
    .dot:nth-child(5) { top: 10%; left: 70%; animation-delay: 8s; }
    .dot:nth-child(6) { top: 90%; left: 40%; animation-delay: 10s; }

    @keyframes floatDot {
      0%, 100% {
        transform: translateY(0px) scale(1);
        opacity: 0.2;
      }
      50% {
        transform: translateY(-30px) scale(1.5);
        opacity: 0.6;
      }
    }
    
    .login-container {
      display: flex;
      max-width: 720px;
      width: 100%;
      max-height: 80vh;
      background-color: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(40, 1, 55, 0.1);
      position: relative;
      z-index: 2;
      border: 1px solid rgba(40, 1, 55, 0.05);
    }
    
    .left-box {
      width: 50%;
      padding: 35px 30px;
      background: linear-gradient(135deg, #280137 0%, #3d1a4f 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .left-box::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, #280137, #3d1a4f, #280137);
      border-radius: inherit;
      z-index: -1;
    }

    .left-box::after {
      content: '';
      position: absolute;
      top: 20%;
      right: -20%;
      width: 200px;
      height: 200px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 50%;
      animation: pulse 4s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
        opacity: 0.05;
      }
      50% {
        transform: scale(1.2);
        opacity: 0.1;
      }
    }
    
    .logo-img {
      width: 70px;
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      backdrop-filter: blur(10px);
      position: relative;
      z-index: 2;
      transition: transform 0.3s ease;
    }

    .logo-img img {
      width: 60px;
      height: 60px;
    }

    .logo-img:hover {
      transform: scale(1.05);
    }

    .welcome-text {
      text-align: center;
      position: relative;
      z-index: 2;
    }

    .welcome-text h3 {
      font-size: 18px;
      margin: 0 0 10px 0;
      font-weight: 600;
    }

    .welcome-text p {
      font-size: 13px;
      opacity: 0.9;
      line-height: 1.4;
      margin: 0;
    }
    
    .right-box {
      width: 50%;
      padding: 35px 30px;
      background: white;
    }

    .right-box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: 24px;
      font-weight: 600;
      position: relative;
    }

    .right-box h2::after {
      content: '';
      position: absolute;
      bottom: -6px;
      left: 50%;
      transform: translateX(-50%);
      width: 35px;
      height: 3px;
      background: #280137;
      border-radius: 2px;
    }
    
    form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      position: relative;
      margin-bottom: 18px;
    }
    
    label {
      margin-bottom: 6px;
      font-size: 13px;
      color: #555;
      font-weight: 500;
      display: block;
    }
    
    input {
      padding: 12px 16px;
      border: 1px solid #ccc;
      border-radius: 12px;
      font-size: 14px;
      transition: all 0.3s ease;
      background: #f8f9fa;
      width: 100%;
    }
    
    input:focus {
      outline: none;
      border-color: #280137;
      background: white;
      box-shadow: 0 0 0 3px rgba(40, 1, 55, 0.1);
      transform: translateY(-1px);
    }

    input:hover {
      background: #f1f3f4;
    }

    .password-container {
      position: relative;
    }

    .password-toggle {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #666;
      transition: color 0.3s ease;
      font-size: 14px;
    }

    .password-toggle:hover {
      color: #280137;
    }
    
    button {
      padding: 12px;
      background: #280137;
      color: white;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 600;
      transition: all 0.3s ease;
      margin-top: 6px;
      position: relative;
      overflow: hidden;
    }

    button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

    button:hover::before {
      left: 100%;
    }
    
    button:hover {
      background: #3d1a4f;
      transform: translateY(-1px);
      box-shadow: 0 8px 20px rgba(40, 1, 55, 0.25);
    }

    button:active {
      transform: translateY(0);
    }
    
    .register-link {
      margin-top: 18px;
      text-align: center;
      padding-top: 15px;
      border-top: 1px solid #e1e5e9;
    }
    
    .register-link a {
      font-size: 13px;
      color: #280137;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
      position: relative;
    }

    .register-link a::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background: #280137;
      transition: width 0.3s ease;
    }
    
    .register-link a:hover::after {
      width: 100%;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-section, .order-section > * {
      animation: fadeInUp 0.6s ease forwards;
    }

    .form-section {
      animation-delay: 0.1s;
    }

    .order-section > *:nth-child(1) { animation-delay: 0.2s; }
    .order-section > *:nth-child(2) { animation-delay: 0.3s; }
    .order-section > *:nth-child(3) { animation-delay: 0.4s; }
    .order-section > *:nth-child(4) { animation-delay: 0.5s; }
    .order-section > *:nth-child(5) { animation-delay: 0.6s; }
    .order-section > *:nth-child(6) { animation-delay: 0.7s; }
    .order-section > *:nth-child(7) { animation-delay: 0.8s; }
        
  </style>
</head>
<body>
  <!-- Header -->
  <nav class="navbar">
    <div class="logo">
      <img src="logo_nygiek.png" alt="Restaurant Logo">
    </div>
    <div class="nav-links">
      <a href="homepagerevisi.php">Home</a>
      <a href="homepagerevisi.php">About Us</a>
      <a href="menu.php">Menu</a>
      <a href="contact1.php">Contact</a>
    </div>
    <div class="nav-icons">
      <div class="cart-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div class="cart-count">10</div>
      </div>
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
  </nav>
  <div class="purple-bar"></div>

  <!-- Background Animation -->
  <div class="bg-animation">
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
  </div>

  <div class="floating-dots">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>

  <!-- Main Content -->
  <main class="main">
    <div class="login-container">
      <!-- Welcome Section -->
      <div class="left-box">
        <div class="logo-img">
            <img src="logo_nygiek.png" alt="Logo" />
        </div>

        <div class="welcome-text">
          <h3>Selamat Datang!</h3>
          <p>Masuk ke akun Anda untuk melanjutkan perjalanan kuliner yang luar biasa bersama kami.</p>
        </div>
      </div>

      <!-- Login Form -->
      <div class="right-box">
        <h2>Login</h2>

        <form method="post" action="process_login.php">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="email" required />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="password-container">
              <input type="password" id="password" name="password" placeholder="password" required />
              <span class="password-toggle" onclick="togglePassword()">👁️</span>
            </div>
          </div>

          <button type="submit">Masuk Sekarang</button>
                <a href="homepagerevisi.php" class="button">
        </form>

        <div class="register-link">
          <a href="signup.php">Belum punya akun? Daftar di sini</a>
        </div>
      </div>
    </div>
  </main>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const toggleButton = document.querySelector('.password-toggle');
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleButton.textContent = '🙈';
      } else {
        passwordInput.type = 'password';
        toggleButton.textContent = '👁️';
      }
    }

    // Add smooth focus animations
    document.querySelectorAll('input').forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'scale(1.02)';
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'scale(1)';
      });
    });
  </script>
</body>
</html>