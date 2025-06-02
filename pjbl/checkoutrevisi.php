<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Palanquin:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" />
    <title>Restaurant Menu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Maven Pro', sans-serif;
            background: #f8f9ff;
            min-height: 100vh;
        }

        /* Header */
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
        /* Main Content */
        .main-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
            position: relative;
            z-index: 10;
        }

        .welcome-section {
            text-align: center;
            margin-top: 115px;
            margin-bottom: 3rem;
        }

        .welcome-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .welcome-subtitle {
            font-size: 1.1rem;
            color: #64748b;
            font-weight: 400;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 380px;
            gap: 3rem;
            align-items: start;
        }

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

        /* Menu Section */
        .menu-grid {
            display: grid;
            gap: 0.5rem;
        }

        .menu-item {
            background: white;
            border-radius: 12px;
            padding: 0.3rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(107, 70, 193, 0.15);
            border-color:rgb(130, 70, 193);
        }

        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .item-info h3 {
            font-size: 1rem;
            margin-left: 15px;
            margin-top: 9px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        .item-price {
            font-size: 1rem;
            margin-left: 15px;
            margin-top: 2px;
            font-weight: 600;
            color:rgb(141, 141, 141);
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: #f8fafc;
            padding: 0.5rem 1rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .qty-btn {
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 50%;
            background:rgb(0, 0, 0);
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .qty-btn:hover {
            background:rgb(33, 0, 91);
            transform: scale(1.05);
        }

        .qty-btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
            transform: none;
        }

        .qty-display {
            font-weight: 600;
            color: #1e293b;
            min-width: 24px;
            text-align: center;
            font-size: 1rem;
        }

        /* Checkout Section */
        .checkout-panel {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            border: 1px solid #e2e8f0;
            position: sticky;
            top: 100px;
        }

        .checkout-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .checkout-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .order-summary {
            margin-bottom: 1.5rem;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-item-info {
            flex: 1;
        }

        .order-item-name {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        .order-item-details {
            font-size: 0.875rem;
            color: #64748b;
        }

        .order-item-total {
            font-weight: 600;
            color:rgb(0, 0, 0);
        }

        .order-total {
            padding: 0.5rem 0;
            border-top: 1px solid rgb(0, 0, 0);
            margin-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 1.125rem;
            font-weight: 700;
            color: #1e293b;
        }

        .total-amount {
            font-size: 1.25rem;
            font-weight: 700;
            color:rgb(128, 0, 0);
        }

        .checkout-btn {
            width: 100%;
            background: #280137;
            color: white;
            border: none;
            padding: 1rem 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 6px;
            overflow: hidden;
            position: relative;
        }

    .checkout-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

    .checkout-btn:hover::before {
      left: 100%;
    }
    
    .checkout-btn:hover {
      background: #3d1a4f;
      transform: translateY(-1px);
      box-shadow: 0 8px 20px rgba(40, 1, 55, 0.25);
    }

    .checkout-btn:active {
      transform: translateY(0);
    }

        .checkout-btn:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(107, 70, 193, 0.4);
        }

        .checkout-btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .empty-cart {
            text-align: center;
            padding: 2rem 1rem;
            color: #94a3b8;
            font-style: italic;
        }

        .empty-cart-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .checkout-panel {
                position: static;
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }
            
            .nav-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-menu {
                gap: 1rem;
            }
            
            .main-container {
                padding: 0 1rem;
                margin: 1rem auto;
            }
            
            .welcome-title {
                font-size: 2rem;
            }
            
            .menu-item {
                padding: 1rem;
            }
            
            .item-header {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }
            
            .quantity-controls {
                justify-content: center;
            }
        }
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
                <div class="cart-count" id="cartBadge" style="display: none;">0</div>
            </div>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </nav>
    <div class="purple-bar"></div>

    <div class="header-right">
        <div class="cart-info">
            <div class="cart-icon">
                🛒
                <span class="cart-badge" id="cartBadge2" style="display: none;">0</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-container">
        <div class="welcome-section">
            <h1 class="welcome-title">Welcome to Our Restaurant</h1>
            <p class="welcome-subtitle">Discover our delicious Indonesian cuisine</p>
        </div>

        <div class="content-grid">
            <!-- Menu Items -->
            <div class="menu-section">
                <div class="menu-grid">
                    <div class="menu-item">
                        <div class="item-header">
                            <div class="item-info">
                                <h3>Ayam Bakar</h3>
                                <div class="item-price">IDR 65,000</div>
                            </div>
                            <div class="quantity-controls">
                                <button class="qty-btn" onclick="decrease(this)" data-price="65000" data-name="Ayam Bakar">−</button>
                                <span class="qty-display">0</span>
                                <button class="qty-btn" onclick="increase(this)" data-price="65000" data-name="Ayam Bakar">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-header">
                            <div class="item-info">
                                <h3>Ayam Ingkung</h3>
                                <div class="item-price">IDR 65,000</div>
                            </div>
                            <div class="quantity-controls">
                                <button class="qty-btn" onclick="decrease(this)" data-price="65000" data-name="Ayam Ingkung">−</button>
                                <span class="qty-display">0</span>
                                <button class="qty-btn" onclick="increase(this)" data-price="65000" data-name="Ayam Ingkung">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-header">
                            <div class="item-info">
                                <h3>Rice Bowl</h3>
                                <div class="item-price">IDR 10,000</div>
                            </div>
                            <div class="quantity-controls">
                                <button class="qty-btn" onclick="decrease(this)" data-price="10000" data-name="Rice Bowl">−</button>
                                <span class="qty-display">0</span>
                                <button class="qty-btn" onclick="increase(this)" data-price="10000" data-name="Rice Bowl">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-header">
                            <div class="item-info">
                                <h3>Snack</h3>
                                <div class="item-price">IDR 10,000</div>
                            </div>
                            <div class="quantity-controls">
                                <button class="qty-btn" onclick="decrease(this)" data-price="10000" data-name="Snack">−</button>
                                <span class="qty-display">0</span>
                                <button class="qty-btn" onclick="increase(this)" data-price="10000" data-name="Snack">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkout Panel -->
            <div class="checkout-panel">
                <div class="checkout-header">
                    <h2 class="checkout-title">Your Order</h2>
                </div>
                
                <div class="order-summary" id="orderSummary">
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <p>Your cart is empty<br>Add items to get started</p>
                    </div>
                </div>
                
                <button class="checkout-btn" id="checkoutBtn" disabled>
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>

    <script>
        let cart = {};

        function increase(button) {
            const controls = button.parentElement;
            const display = controls.querySelector('.qty-display');
            const itemName = button.dataset.name;
            const price = parseInt(button.dataset.price);
            
            const currentQty = parseInt(display.textContent);
            const newQty = currentQty + 1;
            display.textContent = newQty;
            
            // Update cart
            if (!cart[itemName]) {
                cart[itemName] = { quantity: 0, price: price };
            }
            cart[itemName].quantity = newQty;
            
            updateDisplay();
        }

        function decrease(button) {
            const controls = button.parentElement;
            const display = controls.querySelector('.qty-display');
            const itemName = button.dataset.name;
            
            const currentQty = parseInt(display.textContent);
            if (currentQty > 0) {
                const newQty = currentQty - 1;
                display.textContent = newQty;
                
                // Update cart
                if (cart[itemName]) {
                    if (newQty === 0) {
                        delete cart[itemName];
                    } else {
                        cart[itemName].quantity = newQty;
                    }
                }
                
                updateDisplay();
            }
        }

        function updateDisplay() {
            updateCartBadge();
            updateOrderSummary();
        }

        function updateCartBadge() {
            const badge = document.getElementById('cartBadge');
            let totalItems = 0;
            
            Object.values(cart).forEach(item => {
                totalItems += item.quantity;
            });
            
            if (totalItems > 0) {
                badge.textContent = totalItems;
                badge.style.display = 'flex';
            } else {
                badge.style.display = 'none';
            }
        }

        function updateOrderSummary() {
            const orderSummary = document.getElementById('orderSummary');
            const checkoutBtn = document.getElementById('checkoutBtn');
            
            if (Object.keys(cart).length === 0) {
                orderSummary.innerHTML = `
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <p>Your cart is empty<br>Add items to get started</p>
                    </div>
                `;
                checkoutBtn.disabled = true;
                return;
            }
            
            let summaryHTML = '';
            let total = 0;
            
            Object.entries(cart).forEach(([itemName, item]) => {
                const itemTotal = item.quantity * item.price;
                total += itemTotal;
                summaryHTML += `
                    <div class="order-item">
                        <div class="order-item-info">
                            <div class="order-item-name">${itemName}</div>
                            <div class="order-item-details">${item.quantity} × IDR ${item.price.toLocaleString()}</div>
                        </div>
                        <div class="order-item-total">IDR ${itemTotal.toLocaleString()}</div>
                    </div>
                `;
            });
            
            summaryHTML += `
                <div class="order-total">
                    <span class="total-label">Total</span>
                    <span class="total-amount">IDR ${total.toLocaleString()}</span>
                </div>
            `;
            
            orderSummary.innerHTML = summaryHTML;
            checkoutBtn.disabled = false;
        }

        // Checkout handler
        document.getElementById('checkoutBtn').addEventListener('click', function() {
            if (Object.keys(cart).length > 0) {
                const total = Object.values(cart).reduce((sum, item) => sum + (item.quantity * item.price), 0);
                alert(`Thank you for your order!\nTotal: IDR ${total.toLocaleString()}\n\nYour order has been placed successfully.`);
                
                // Reset everything
                cart = {};
                document.querySelectorAll('.qty-display').forEach(display => {
                    display.textContent = '0';
                });
                updateDisplay();
            }
        });

        // Initialize
        updateDisplay();
    </script>
    
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
</body>
</html>