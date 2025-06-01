<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Palanquin:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Maven Pro', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
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
            width: 100%;
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
  margin-top: 70px;
  display: flex;
  z-index: 1000;
}
        
        /* Hero Section */
        .hero-section {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            padding-top: 100px;
            overflow: hidden;
            background: rgb(246, 250, 210);
        }

        .bg-circle-1 {
            position: absolute;
            top: 20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg,rgb(180, 194, 121), rgb(180, 194, 121));
            border-radius: 50%;
            opacity: 0.4;
            animation: float 6s ease-in-out infinite;
        }

        .bg-circle-2 {
            position: absolute;
            top: 10%;
            right: -15%;
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, rgb(180, 194, 121), rgb(180, 194, 121));
            border-radius: 50%;
            opacity: 0.4;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(20px); }
            50% { transform: translateY(-30px); }
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            gap: 4rem;
        }

        .hero-text h1 {
            font-family: 'MuseoModerno', sans-serif;
            position: relative;
            left: 50px;
            font-size: 4rem;
            font-weight: 700;
            color:rgb(0, 0, 0);
            margin-bottom: 8rem;
            line-height: 1.1;   
        }

        .hero-text h1 {
            font-family: 'MuseoModerno', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            color:rgb(0, 0, 0);
            margin-bottom: 0rem;
        }

        .hero-text .subtitle {
            font-family: 'Palanquin', sans-serif;
            position: relative;
            left: 50px;
            font-size: 1.5rem;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .hero-text .tagline {
            font-family: 'Palanquin', sans-serif;
            position: relative;
            left: 50px;
            font-size: 1.2rem;
            color: #888;
            margin-bottom: 2rem;
            font-style: italic;
        }

        .hero-buttons {
            position: relative;
            left: 50px;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }


        .btn-primary {
            background: linear-gradient(135deg, #280137, #280137);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            filter: contrast(1.1) saturate(1.2);
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 70%;
            height: 100%;
            opacity: 50%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.8),
                rgba(176, 176, 176, 0.9),
                rgba(63, 63, 63, 0.8),
                transparent
            );
            transform: skewX(-20deg);
            transition: left 0.7s ease;
            z-index: 1;
        }

         .btn-primary:hover {
      background: #280137;
      transform: translateY(-1px);
      box-shadow: 0 8px 20px rgba(40, 1, 55, 0.25);
    }

    .btn-primary:active {
      transform: translateY(0);
    }


        .btn-primary:hover::after {
            left: 120%;
        }

        .btn-secondary {
            background: transparent;
            color: #301932;
            padding: 15px 30px;
            border: 2px solid #301932;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-secondary:hover {
            background: #280137;
            color: white;
        }

        .hero-image {
            position: relative;
             margin-left: -50px;
        }

        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            animation: spin 120s linear infinite;
        }


@keyframes spin {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg,#280137, #280137);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
        }

        .cta-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0rem;
            position: relative;
            z-index: 1;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: 2px;
            padding: 0rem 0;
            margin: 0;
        }

        .cta-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.5;
            background-size: 50px 50px;
        }

        /* About Us ini bos */
        .about-section {
            padding: 6rem 0;
            background:rgba(234, 234, 234, 0.97);
            position: relative;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .about-header {
            text-align: left;
            margin-bottom: 4rem;
        }

        .about-header h2 {
            font-size: 3rem;
            color: #2e1230;
            margin-bottom: 0rem;
        }

        .about-header .subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .about-content {
            display: grid;
            gap: 1rem;
            align-items: center;
            margin-bottom: 3rem;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }

        .about-text {
            position: relative;
            background: white;
            padding: 3rem;
            border-radius: 15px;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .about-image {
            position: absolute;
            top: 20px;
            right: 50px;
            width: 525.9px;
            overflow: hidden;
            cursor: pointer;
      }
        .about-image img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            border-radius: 15px;
        }

        .about-image::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 30%,
                rgba(255, 255, 255, 0.5) 50%,
                transparent 70%
            );
            transform: rotate(45deg) translate(-100%, -100%);
            transition: transform 0.8s ease;
            z-index: 1;
        }

        .about-image:hover::after {
            transform: rotate(45deg) translate(50%, 50%);
        }

        .order-button {
            background: linear-gradient(135deg,rgb(40, 1, 55));
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 5px 5px rgba(48, 25, 50, 0.3);
            margin-top: 2rem;
        }

        .order-button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

    .order-button:hover::before {
      left: 100%;
    }
    
    .order-button:hover {
      background: #3d1a4f;
      transform: translateY(-1px);
      box-shadow: 0 8px 20px rgba(40, 1, 55, 0.25);
    }

    .order-button:active {
      transform: translateY(0);
    }


        /* Our Mission */
        .mission-section {
            padding: 6rem 0;
            background: rgb(40, 1, 55);
        }

        .mission-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .mission-header h3 {
            font-size: 2rem;
            color:rgb(255, 255, 255);
            margin-bottom: 1rem;
        }

        .mission-description {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: rgb(255, 255, 255);
            line-height: 1.8;
        }

        .mission-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .mission-card {
            text-align: center;
            padding: 3rem 2rem;
            background:rgb(246, 250, 210)   ;
            padding: 15px 30px;
            border: 1px solid rgb(203, 214, 171);
            border-radius: 15px;
            transition: transform 0.3s ease;
        }
        

        .mission-card:hover {
            transform: translateY(-8px);
        }

        .mission-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .mission-card h4 {
            font-size: 1.3rem;
            color: #2e1230;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .mission-card p {
            color: #666;
            line-height: 1.6;
            font-size: 1rem;
        }

        /* Image Template Section */
.image-template-section img {
  max-width: 100%;
  height: auto;
}
        /* Find Us Section */
        .find-us-section {
            padding: 6rem 0;
            background: white;
        }

        .find-us-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .find-us-header h3 {
            font-size: 2.5rem;
            color: #2e1230;
            margin-bottom: 1rem;
        }

        .map-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #301932, #2e1230);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
            max-width: 1200px;
            margin: 0 auto 2rem auto;
            padding: 0 2rem;
        }

        .footer-item a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .footer-item a:hover {
            color: #d4af37;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .navbar {
                padding: 0 1rem;
                height: 80px;
            }

            .nav-links {
                display: none;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-text h2 {
                font-size: 2rem;
            }

            .hero-section {
                padding-top: 80px;
            }

            .cta-section h2 {
                font-size: 1.8rem;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }

            .about-text {
                padding: 2rem;
            }

            .mission-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .template-image {
                height: 300px;
            }

            .about-header h2,
            .mission-header h3,
            .find-us-header h3 {
                font-size: 2rem;
            }

            .hero-buttons {
                justify-content: center;
            }
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
        /* Container utility */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading animation */
        .loading {
            opacity: 0;
            animation: fadeIn 1s ease-in forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
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
    <!-- Hero Section -->
    <section id="home" class="hero-section loading">
        <div class="hero-bg-elements">
            <div class="bg-circle-1"></div>
            <div class="bg-circle-2"></div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text">
                <h1>HOMEMADE</h1>
                <h1>CATERING</h1>
                <p class="subtitle">By: Ny Giek</p>
                <p class="tagline">"Cita rasa seperti masakan mama"</p>
                
                <div class="hero-buttons">
                    <a href="menu.php" class="btn-primary">
                        <span>Food Menu</span>
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z"/>
                        </svg>
                    </a>
                    <a href="#about" class="btn-secondary">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-image">
                <img src="displayfoody.png" class="displayfood" alt="Delicious homemade food">
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-bg-pattern"></div>
        <div class="cta-content">
            <h2>WANNA EAT SOMETHING?</h2>
        </div>
    </section>

    <!-- About Section - Fixed and Properly Spaced -->
    <section id="about" class="about-section">
        <div class="about-container">
            <div class="about-header">
                                <div class="about-image">
                    <img src="fotokelompok.png" alt="Ny Giek Team">
                </div>
                <h2>Nice To Meet You</h2>
                <p class="subtitle">Kami adalah perancang website homemade catering by Ny Giek</p>
            </div>
            
            <div class="about-content">
                <div class="about-text">
                    <p>
                    <p>Selamat datang di "Ny Giek" catering, layanan catering yang mengutamakan kualitas, cita rasa, dan kepuasan pelanggan. Kami selalu berusaha menyajikan hidangan lezat dan bergizi dengan bahan-bahan pilihan yang segar. Dengan pengalaman lebih dari 5 tahun di industri kuliner, kami siap melayani kebutuhan catering Anda, mulai dari acara pribadi, pesta, hingga pertemuan bisnis.</p>
                    
                    <p>Kami percaya bahwa setiap acara istimewa membutuhkan hidangan yang tak terlupakan. Oleh karena itu, tim kami selalu berinovasi dengan resep baru sembari tetap mempertahankan cita rasa tradisional yang disukai oleh masyarakat Indonesia. Selain itu, kami juga menawarkan berbagai menu yang dapat disesuaikan dengan kebutuhan, sesuai budget yang anda miliki. Apapun jenis acara anda, kami berkomitmen untuk memberikan pengalaman kuliner yang baik dengan pelayanan yang ramah dan terpercaya.</p>
                    
                    <p><strong>Kami menunggu pesanan anda.</strong></p>
                    
                    <a href="menu.php" class="order-button">Order Now!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="container">
            <div class="mission-header">
                <h3>Our Mission</h3>
                <p class="mission-description">
                    Kami percaya bahwa setiap acara istimewa membutuhkan hidangan yang tak terlupakan. 
                    Oleh karena itu, tim kami selalu berinovasi dengan resep baru sembari tetap mempertahankan cita rasa tradisional.
                </p>
            </div>
            
            <div class="mission-grid">
                <div class="mission-card">
                    <h4>Sharpen Skills</h4>
                    <p>Sharpen skills and entrepreneurial spirit to serve you better with continuous improvement and dedication</p>
                </div>
                
                <div class="mission-card">
                    <h4>Digital Innovation</h4>
                    <p>Build practical websites to manage and access our services with modern technology and user-friendly interfaces</p>
                </div>
                
                <div class="mission-card">
                    <h4>Quality Products</h4>
                    <p>Provide quality products to customers with love and care, ensuring every dish meets our high standards</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Image Template Section -->
    <section class="image-template-section">
       <img src="qualityblv.png" alt="5stars">
    </section>

    <!-- Find Us Section -->
    <section id="contact" class="find-us-section loading">
        <div class="container">
            <div class="find-us-header">
                <h3>Find Us</h3>
            </div>
            
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.5459034484156!2d110.3242466748618!3d-7.011291992990138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70611d4461da81%3A0x23c819a627a525d!2sNy%20Giek%20Homemade%20food's%20%26%20drink's!5e1!3m2!1sid!2sid!4v1747786204483!5m2!1sid!2sid" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll animation for mission cards
        function animateOnScroll() {
            const missionCards = document.querySelectorAll('.mission-card');
            const triggerHeight = window.innerHeight * 0.8;
        }

            missionCards.forEach(card) => {
                const cardTop = card.getBoundingClientRect().top
            }