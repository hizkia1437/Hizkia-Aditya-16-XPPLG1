<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Palanquin:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" />
  <style>
    * {
      box-sizing: border-box;
    }
    
    body {
            font-family: 'Maven Pro', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: white;
            box-shadow: 0px 2px 5px #280137;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgb(255, 255, 255);
        }
        
        .logo {
            width: 40px;
            height: 40px;
            background-color: #722a8a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .logo img {
            width: 30px;
            height: 30px;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        
        .nav-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }
    
            .nav-links a:hover {
      color: #722a8a;
    }

    .nav-icons svg {
      cursor: pointer;
      transition: stroke 0.3s ease;
    }

    .nav-icons svg:hover {
      stroke: #722a8a;
    }

        .cart-icon {
            position: relative;
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #722a8a;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

.purple-bar {
    position: fixed;
  background-color: #280137;
  height: 30px;
  width: 100%;
  top: 70px;
  left: 0;
  right: 0;
  display: flex;
  z-index: 999;
}
    
    .main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 130px);
      padding: 40px 20px;
      position: relative;
      margin-top: 120px;
    }

    .contact-section {
      display: flex;
      justify-content: space-between;
      padding: 40px 20px;
      background: rgb(246, 246, 246);
      gap: 40px;
      margin-top: 120px;

    }

    .map-contact {
      font-family: 'Maven Pro', sans-serif;
      text-align: center;
      color:rgb(0, 0, 0);
      text-align: left;
      font-weight: 200;
      margin-bottom: 2px;
      line-height: 1.2;
      text-shadow: 0 2px 4px rgba(46, 18, 48, 0.1);
      letter-spacing: -0.5px;
      flex: 1;
    }

    .form-contact {
      flex: 1;
      background: white;
      padding: 20px;
      border: 1px solid rgba(46, 18, 48, 0.1);
      border-radius: 1rem;
      transition: all 0.3s ease;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea {
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 12px;
    }

    input:hover {
            background: #f1f3f4;
        }

    input:focus {
      outline: none;
      border-color: #280137;
      background: white;
      box-shadow: 0 0 0 3px rgba(40, 1, 55, 0.1);
      transform: translateY(-1px);
    }

    button {
      padding: 14px;
      background: #280137;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: all 0.3s ease;
      margin-top: 8px;
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
            .footer {
            background:rgb(220, 220, 220);
            padding: 30px 20px;
            margin-top: 60px;
        }

        .footer-content {
            max-width: 1440px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-link {
            color:rgb(125, 125, 125);
            font-size: 15px;
            transition: color 0.3s;
        }

        .footer-link:hover {
            color:rgb(92, 34, 186);
        }
  </style>
</head>
<body>

<nav class="navbar">
        <div class="logo">
            <img src="logo_nygiek.png" alt="Restaurant Logo">
        </div>
        <div class="nav-links">
            <a href="homepagerevisi.php">Home</a>
            <a href="#about">About Us</a>
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

<main class="contact-section">
  <div class="map-contact">
    <h2>CONTACT US</h2>
    <p>Ingin menghubungi kami? Kirim lewat kolom di samping. Kami akan melayani anda. Atau temukan kami di titik lokasi yang telah kami cantumkan.</p>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.675947008193!2d110.34636621427374!3d-7.822338394373125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708cc52df472ef%3A0x3bbf4710f2b0d04e!2sPuri%20Bukit%20Ngaliyan!5e0!3m2!1sid!2sid!4v1717182234035!5m2!1sid!2sid" 
      width="100%" 
      height="200" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

  <div class="form-contact">
    <form method="POST" action="../be/send_mail.php">
      <input type="text" name="first_name" placeholder="First Name" required>
      <input type="text" name="last_name" placeholder="Last Name" required>
      <input type="text" name="number" placeholder="Number" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <textarea name="message" placeholder="What can we help you with?" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
</main>

    <footer class="footer">
        <div class="footer-content">
            <a href="https://maps.app.goo.gl/FPjzMnxeX7L2Dwrd7" target="_blank" class="footer-link">
                Puri Bukit Ngaliyan no. B32
            </a>
            <a href="mailto:nygiekhomem4de@gmail.com" class="footer-link">
                nygiekhomem4de@gmail.com
            </a>
    </div>
</footer>

</body>
</html>