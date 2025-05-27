<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ny Giek Catering Website</title>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .main-title, .sub-title {
            font-family: 'MuseoModerno', cursive;
        }
        
        .main-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 0;
        }
        
        .sub-title {
            font-size: 6.5rem;
            font-weight: 700;
            margin-top: 0; 
            line-height: 0.5;
        }
        

        .tagline {
            font-family: Arial, sans-serif; 
            font-size: 1.5rem;
        }
        
        .header-container {
            position: relative;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            padding: 2rem;
        }
        
        body {
            background-color: #f5f5f5;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
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
        
        .banner-container {
            position: relative;
            width: 100%;
            height: 230px;
            overflow: hidden;
            background: #333;
        }
        
        .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
        }
        
        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0) 95%);
            z-index: 1;
        }
        
        .text-overlay {
            position: absolute;
            top: 50%;
            left: 60px;
            transform: translateY(-50%);
            color: white;
            z-index: 2;
        }
        
        .main-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
            position: relative;
        }
        
        .sub-title {
            font-size: 36px;
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 20px;
        }
        
        .call-to-action {
            font-size: 24px;
        }
        
        .content {
            padding: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            position: relative;
        }
        
        .featured-product {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .featured-product img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .starburst {
            position: absolute;
            top: 40px;
            right: 55px;
            width: 150px;
            height: 150px;
            background-color: #800808;
            font-weight: bold;
            transform: rotate(15deg);
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: rotate(15deg) scale(1); }
            50% { transform: rotate(15deg) scale(1.05); }
        }


        .starburst:before, .starburst:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color:  #800808;
        }

        .starburst:before {
            transform: rotate(30deg);
        }

        .starburst:after {
            transform: rotate(60deg);
        }

        .starburst-points {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #800808;
            transform: rotate(45deg);
        }
        
        .starburst-points:before, .starburst-points:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #800808;
        }

        .starburst-points:before {
            transform: rotate(30deg);
        }

        .starburst-points:after {
            transform: rotate(60deg);
        }

        .starburst-text {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            text-align: center;
            z-index: 1;
            transform: rotate(-15deg); 
        }

        .starburst-text .coming {
            font-size: 28px;
            margin: 0 0 -5px;
        }

        .starburst-text .very {
            font-size: 32px;
            margin: -5px 0;
        }

        .starburst-text .soon {
            font-size: 42px;
            margin: -5px 0 0;
        }

        .menu-items {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .menu-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: flex;
            padding: 15px;
            position: relative;
        }

        .menu-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: flex;
            padding: 15px;
            position: relative;
            transition: transform 0.5s cubic-bezier(0.18, 1.3, 0.3, 1);, box-shadow 0.4s ease;
        }
        
        .menu-card:hover {
            transform: translateY(-15px); transform: scale(1.08) rotate(3deg);
            cursor: pointer;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        
        .menu-card img {
            width: 100px;
            height: 100px;
            border-radius: 5px;
            object-fit: cover;
        }
        
        .menu-details {
            padding-left: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .menu-details h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .menu-details p {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .menu-details button {
            background-color: #333;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            width: fit-content;
        }
        
        .red-blob {
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background-color: #280137;
            border-radius: 50%;
            z-index: -1;
        }
        
        .white-overlay {
            position: absolute;
            top: 0;
            right: 0;
            width: 70%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.42);
            clip-path: polygon(30% 0, 100% 0, 100% 100%, 0% 100%);
            z-index: -1;
        }
        

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        
        .popup-content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            max-width: 600px;
            width: 90%;
            position: relative;
            transform: scale(0.7);
            opacity: 0;
            transition: transform 0.4s ease, opacity 0.4s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .popup-overlay.active {
            display: flex;
        }
        
        .popup-overlay.active .popup-content {
            transform: scale(1);
            opacity: 1;
        }
        
        .close-popup {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #555;
            background: none;
            border: none;
            transition: color 0.3s ease;
        }
        
        .close-popup:hover {
            color: #800808;
        }
        
        .popup-image {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px;
            float: left;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .popup-details h2 {
            margin-top: 0;
            color: #333;
            font-size: 24px;
        }
        
        .popup-price {
            font-size: 1.2em;
            font-weight: bold;
            color: #800808;
            margin-bottom: 15px;
        }
        
        .popup-description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .ingredients {
            margin-top: 20px;
            clear: both;
        }
        
        .ingredients h3 {
            margin-bottom: 10px;
            color: #333;
            font-size: 18px;
        }
        
        .ingredients ul {
            padding-left: 20px;
            color: #555;
        }
        
        .detail-btn {
            background-color: rgb(92, 37, 103);
            color: white;
            border: none;
            padding: 10px 10px;
            border-radius: 3px;
            margin-top: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .detail-btn:hover {
            background-color:rgb(0, 0, 0);
        }

        .add-to-cart {
            background-color:rgb(92, 37, 103);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        
        .add-to-cart:hover {
            background-color:rgb(0, 0, 0);
        }

        footer {
      background-color: #e0e0e0;
      text-align: center;
      padding: 35px;
      font-size: 14px;
    }

    .purple-bar {
            background-color: #280137; 
            height: 60px;
            width: 100%;
    }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo_nygiek.png" alt="Restaurant Logo">
        </div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Menu</a>
            <a href="#">Contact</a>
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
    
    <div class="banner-container">
        <img src="dish_dish.jpg" alt="Food background" class="banner-image">
        <div class="gradient-overlay"></div>
        <div class="text-overlay">
            <h1 class="main-title">Find Your Taste</h1>
            <h2 class="sub-title">Your Good Taste</h2>
            <p class="call-to-action">Choose! Choose! Choose!</p>
        </div>
    </div>
    
    <div class="content">
        <div class="featured-product">
            <img src="tumpeng_peng.png" alt="Featured Dish">
            <div class="starburst">
  <div class="starburst-points"></div>
  <div class="starburst-text">
    <div class="coming">COMING</div>
    <div class="very">VERY</div>
    <div class="soon">SOON!</div>
  </div>
</div>
        </div>
        
        <div class="menu-items">
            <div class="menu-card" data-id="rice-bowl">
                <img src="rice_bowl.png" alt="Rice Bowl">
                <div class="menu-details">
                    <h3>Rice Bowl</h3>
                    <p>IDR 10.000</p>
                    <button class="detail-btn">more detail</button>
                </div>
            </div>
            
            <div class="menu-card" data-id="ayam-bakar">
                <img src="ayam_bakar.png" alt="Ayam Bakar">
                <div class="menu-details">
                    <h3>Ayam Bakar</h3>
                    <p>IDR 65.000</p>
                    <button class="detail-btn">more detail</button>
                </div>
            </div>
            
            <div class="menu-card" data-id="ayam-ingkung">
                <img src="ayam_ingkung.png" alt="Ayam Ingkung">
                <div class="menu-details">
                    <h3>Ayam Ingkung</h3>
                    <p>IDR 65.000</p>
                    <button class="detail-btn">more detail</button>
                </div>
            </div>
            
            <div class="menu-card" data-id="snack">
                <img src="snack_pasar.png" alt="Snack">
                <div class="menu-details">
                    <h3>Snack</h3>
                    <p>IDR 10.000</p>
                    <button class="detail-btn">more detail</button>
                </div>
            </div>
        </div>
        
        <div class="red-blob"></div>
        <div class="white-overlay"></div>
    </div>
    
    <div class="popup-overlay" id="popup">
        <div class="popup-content">
            <button class="close-popup">&times;</button>
            <img class="popup-image" src="" alt="Food Detail">
            <div class="popup-details">
                <h2 id="popup-title">Food Title</h2>
                <div class="popup-price" id="popup-price">IDR 0</div>
                <div class="popup-description" id="popup-description">
                    A delicious dish made with the finest ingredients. Savory and satisfying.
                </div>
                <div class="ingredients">
                    <h3>Ingredients:</h3>
                    <ul id="popup-ingredients">
                        <li>Main ingredient</li>
                        <li>Spices</li>
                        <li>Vegetables</li>
                    </ul>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    
    <script>
        const menuItems = {
            'rice-bowl': {
                title: 'Rice Bowl',
                price: 'IDR 10.000',
                description: 'Hidangan nasi yang disajikan di dalam mangkuk dengan berbagai macam lauk yang dapat kamu custom sesuai keinginan.',
                image: 'rice_bowl.png',
                ingredients: ['white rice ', 'a protein', 'veggie', 'sauces']
            },
            'ayam-bakar': {
                title: 'Ayam Bakar',
                price: 'IDR 65.000',
                description: 'Ayam yang telah dimarinasi dan dibakar diatas bara arang Dibakar dengan bumbu-bumbu rahasia dari kami yang mebuatnya semakin lezat.',
                image: 'ayam_bakar.png',
                ingredients: ['Chicken', 'Indonesian spices', 'Sweet soy sauce', 'Sambal', 'Steamed rice']
            },
            'ayam-ingkung': {
                title: 'Ayam Ingkung',
                price: 'IDR 65.000',
                description: 'Ayam jawa utuh yang dimasak dalam panci besar dengan rempah-rempah dan bumbu tradisional khas Indonesia.',
                image: 'ayam_ingkung.png',
                ingredients: ['Whole chicken', 'Coconut milk', 'Javanese spices', 'Bay leaves', 'Lemongrass', 'Turmeric', 'Galangal']
            },
            'snack': {
                title: 'Snack Platter',
                price: 'IDR 10.000',
                description: 'Camilan dengan berbagai macam jenisyang dapat kamu custom sesuai keinginan.',
                image: 'snack_pasar.png',
                ingredients: ['Spring rolls', 'Tempeh chips', 'Cassava chips', 'Peanuts', 'Tofu fritters', 'Assorted dipping sauces']
            }
        };
        
        const detailButtons = document.querySelectorAll('.detail-btn');
        const popup = document.getElementById('popup');
        const closePopup = document.querySelector('.close-popup');
        
        detailButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation(); 
                
                const menuCard = this.closest('.menu-card');
                const itemId = menuCard.dataset.id;
                const item = menuItems[itemId];
                
                document.getElementById('popup-title').textContent = item.title;
                document.getElementById('popup-price').textContent = item.price;
                document.getElementById('popup-description').textContent = item.description;
                document.querySelector('.popup-image').src = item.image;
                
                const ingredientsList = document.getElementById('popup-ingredients');
                ingredientsList.innerHTML = '';
                item.ingredients.forEach(ingredient => {
                    const li = document.createElement('li');
                    li.textContent = ingredient;
                    ingredientsList.appendChild(li);
                });
                
                popup.classList.add('active');
            });
        });
        
        closePopup.addEventListener('click', function() {
            popup.classList.remove('active');
        });
        
        popup.addEventListener('click', function(event) {
            if (event.target === popup) {
                popup.classList.remove('active');
            }
        });
        
        document.querySelectorAll('.menu-card').forEach(card => {
            card.addEventListener('click', function() {
                const itemId = this.dataset.id;
                const item = menuItems[itemId];
                
                document.getElementById('popup-title').textContent = item.title;
                document.getElementById('popup-price').textContent = item.price;
                document.getElementById('popup-description').textContent = item.description;
                document.querySelector('.popup-image').src = item.image;
                
                const ingredientsList = document.getElementById('popup-ingredients');
                ingredientsList.innerHTML = '';
                item.ingredients.forEach(ingredient => {
                    const li = document.createElement('li');
                    li.textContent = ingredient;
                    ingredientsList.appendChild(li);
                });
                
                popup.classList.add('active');
            });
        });
    </script>
    <footer>
  <p>Puri Bukit Ngaliyan no. B32</p>
  <p>nygiekhom4de@gmail.com</p>
</footer>
</body>
</html>