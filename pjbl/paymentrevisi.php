<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NY. GIEK Homemade - Order Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&family=MuseoModerno:wght@500&family=Inter:wght@400&display=swap" rel="stylesheet">
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
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        /* Navigation (unchanged) */
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
            background-color: #280137;
            height: 60px;
            width: 100%;
            top: 70px;
            display: flex;
            z-index: 999;
        }

        .main {
            background: #333;

        }
       .main-container {
            position: relative;
            width: 100%;
            background: #333;
            background-image: url(dish_dish.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 2rem 0;

        }
        
        .main-container-image {
            width: 100%;
            height: 100%;
            display: inline-block;
            object-fit: cover;
            filter: brightness(0.8);
        }

          .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient( rgba(0,0,0,0.75) 100%, rgba(0,0,0,0) 95%);
            z-index: 1;
            opacity: 70%;
        }
        
        .text-overlay {
            color: white;
            margin: 2rem 0;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .main-title {
            text-align: center;
            color:rgb(255, 255, 255);
            font-size: clamp(28px, 5vw, 48px);
            font-weight: 700;
            margin-bottom: 2px;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(46, 18, 48, 0.1);
            letter-spacing: -0.5px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            font-size: 18px;
            margin-bottom: 30px;
            font-weight: 400;
        }
        
        /* Main Title - Enhanced */
        .main-title {
            text-align: center;
            color:rgb(255, 255, 255);
            font-size: clamp(28px, 5vw, 48px);
            font-weight: 700;
            margin-bottom: 2px;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(46, 18, 48, 0.1);
            letter-spacing: -0.5px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            font-size: 18px;
            margin-bottom: 30px;
            font-weight: 400;
        }

         .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient( rgba(0,0,0,0.75) 100%, rgba(0,0,0,0) 95%);
            z-index: 1;
        }

        

        /* Content Layout - Enhanced Responsive */
        .content-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        /* Left Section - Form Enhanced */
        .form-section {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            color: #2E1230;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            letter-spacing: 0.3px;
        }
        .map-button {
        height: 32.7px;
        font-family: Maven Pro;
        font-weight: 500;
        font-size: 14px;
        background: #ddd;
        border: none;
        padding: 0 10px;
        cursor: pointer;
        margin-top: 8px;
    }

    #mapPopup {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        height: 70%;
        background: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    #map {
        width: 100%;
        height: 90%;
    }

    .map-confirm-button {
        width: 100%;
        height: 10%;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
    }

    .ongkir-display {
        margin-top: 10px;
        color: #2E1230;
        font-weight: 600;
        font-family: Maven Pro;
        font-size: 16px;
    }
        .form-input {
            width: 100%;
            padding: 14px 16px;
            background: #f8f9fa;
            border: 1px solid rgb(195, 195, 195);
            border-radius: 12px;
            font-size: 15px;
            font-family: Maven Pro, sans-serif;
            color: #2E1230;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .form-input:focus {
            outline: none;
            background: white;
            border-color: #2E1230;
            box-shadow: 0 0 0 3px rgba(46, 18, 48, 0.1);
        }

        .form-input:hover {
            background: #f1f3f4;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        /* Right Section - Order Summary Enhanced */
        .order-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .section-title {
            text-align: center;
            color: #2E1230;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: -0.3px;
        }

        .order-summary {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 30px;
            border-radius: 15px;
            border: 2px dashed #dee2e6;
            min-height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-style: italic;
            font-size: 16px;
            text-align: center;
        }

        .summary-row {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(46, 18, 48, 0.05);
            transition: all 0.3s ease;
        }

        .summary-row:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        }

        .summary-label {
            color: #2E1230;
            font-size: 16px;
            font-weight: 600;
        }

        .summary-value {
            background: linear-gradient(135deg, #f8f9fa 0%);
            padding: 10px 16px;
            border-radius: 12px;
            color: #2E1230;
            font-weight: 700;
            min-width: 120px;
            text-align: right;
            border: 1px solid rgba(46, 18, 48, 0.1);
        }

        .order-id-row {
            background: linear-gradient(135deg,rgb(0, 0, 0) 0%);
            padding: 15px 20px;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 4px 15px rgba(46, 18, 48, 0.3);
        }

        .id-label {
            font-size: 16px;
            font-weight: 600;
            opacity: 0.9;
        }

        .id-value {
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 14px;
            border-radius: 8px;
            font-weight: 700;
            backdrop-filter: blur(10px);
        }

        /* Confirm Button - Enhanced */
        .confirm-button {
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

         .confirm-button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

     .confirm-button:hover::before {
      left: 100%;
    }

        .confirm-button:hover {
            background: #3d1a4f;
      transform: translateY(-1px);
      box-shadow: 0 8px 20px rgba(40, 1, 55, 0.25);
        }

        .confirm-button:active {
            button:active {
      transform: translateY(0);
            }
        }

        /* Footer - Enhanced */
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
            text-decoration: none;
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




        /* Animation classes */
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
    <!-- Navigation (unchanged) -->
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
    
    <!-- Purple bar (unchanged) -->
    <div class="purple-bar"></div>

    <!-- Main Container -->
        <div class="main">
        <div class="main-container">
            <div class="gradient-overlay"></div>
        <div class="text-overlay">
            <h1 class="main-title">ALREADY KNOW WHAT YOU WILL CHOOSE?</h1>
            <p class="call-to-action">Complete your order details below and we'll prepare it with love</p>
        </div>
        <div class="gradient-overlay"></div>
    </div>
    </div>

        
    
        <div class="content-layout">
            <!-- Left Section - Form -->
            <div class="form-section">
                <form id="orderForm">
                    <div class="form-group">
                        <label class="form-label"> Nama Penerima</label>
                        <input type="text" class="form-input" placeholder="Masukan nama lengkap Anda" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label"> Nomor Telepon</label>
                        <input type="tel" class="form-input" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="form-group">
    <label class="form-label">Alamat Pengiriman</label>
    <button class="map-button" onclick="openMapPopup()">Set Map</button>
    </div>

    <!-- Hidden Inputs -->
    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">
    <input type="hidden" id="ongkir" name="ongkir">

    <!-- Pop-up Map -->
    <div id="mapPopup">
    <div id="map"></div>
    <button class="map-confirm-button" onclick="confirmMapLocation()">Konfirmasi Lokasi</button>
    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> Tanggal Pengiriman</label>
                            <input type="date" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> Jam Pengiriman</label>
                            <input type="time" class="form-input" required>
                        </div>
                        <div class="form-group">
                        <label class="form-label"> Note</label>
                        <textarea name="message" class="form-input" placeholder="What can we help you with?" required></textarea>
                    </div>
                    </div>
                </form>
            </div>




            <!-- Right Section - Order Summary -->
            <div class="order-section">
                <div class="section-title"> Total Pesanan</div>

                <div id="item-list" class="order-summary"></div>
                <div class="summary-row">
                    <span class="summary-label">Subtotal</span>
                    <h3><span class="summary-value" id="sub-total-amount"></span></h3>
                </div>

                <div class="summary-row">
                    <span class="summary-label"> Ongkir</span>
                    <div class="summary-value" id="ongkir-display">IDR 0</div>
                </div>

                <div class="summary-row">
                    <span class="summary-label">Total</span>
                    <div class="summary-value" id="ttotal">IDR 0</div>
                </div>


                <div class="order-id-row">
                    <span class="id-label"> Order ID</span>
                    <div class="id-value"></div>
                </div>

                <button type="button" class="confirm-button" onclick="kirimPesanan()">
                     Konfirmasi Pesanan
                </button>
                </div>
                
                

                
            </div>
        </div>
    </div>

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
        
        window.addEventListener('DOMContentLoaded', () => { 
    const orderId = localStorage.getItem('orderId');
    const selectedItems = JSON.parse(localStorage.getItem('selectedItems')) || [];

    // Tampilkan ID Pesanan
    if (orderId) {
        document.querySelector('.id-value').textContent = orderId;
    }

    // Tampilkan daftar item yang dipilih
    const itemListContainer = document.getElementById('item-list');
    let total = 0;

    selectedItems.forEach(item => {
        const itemTotal = item.quantity * item.price;
        total += itemTotal;

        const itemHTML = `
            <div class="item">
                <div class="item-name">${item.name}</div>
                <div class="item-qty-price">${item.quantity} × IDR ${item.price.toLocaleString()}</div>
                <div class="item-total">IDR ${itemTotal.toLocaleString()}</div>
            </div>
        `;

        itemListContainer.innerHTML += itemHTML;
    });

    // Tampilkan subtotal
    document.getElementById('sub-total-amount').textContent = 'IDR ' + total.toLocaleString();

});

        // Set minimum date to today
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.querySelector('input[type="date"]');
            const today = new Date().toISOString().split('T')[0];
            dateInput.min = today;
        });
        let map, marker;
        const origin = { lat: -7.009364591165463, lng: 110.32954672001527 }; // Titik awal Semarang

        function openMapPopup() {
        document.getElementById('mapPopup').style.display = 'block';

        const savedLat = parseFloat(document.getElementById("latitude").value);
        const savedLng = parseFloat(document.getElementById("longitude").value);

        const initialPosition = (!isNaN(savedLat) && !isNaN(savedLng)) ? { lat: savedLat, lng: savedLng } : origin;

        map = new google.maps.Map(document.getElementById("map"), {
            center: initialPosition,
            zoom: 13,
        });

        marker = new google.maps.Marker({
            position: initialPosition,
            map: map,
            draggable: true
        });

        map.addListener("click", function (e) {
            marker.setPosition(e.latLng);
            updateCoords(e.latLng);
        });

        marker.addListener("dragend", function () {
            updateCoords(marker.getPosition());
        });
        }

        function updateCoords(latLng) {
        document.getElementById("latitude").value = latLng.lat();
        document.getElementById("longitude").value = latLng.lng();
        }

        function confirmMapLocation() {
        document.getElementById('mapPopup').style.display = 'none';
        const lat = parseFloat(document.getElementById("latitude").value);
        const lng = parseFloat(document.getElementById("longitude").value);

        if (!isNaN(lat) && !isNaN(lng)) {
            const userLocation = new google.maps.LatLng(lat, lng);
            const baseLocation = new google.maps.LatLng(origin.lat, origin.lng);

            const distance = google.maps.geometry.spherical.computeDistanceBetween(userLocation, baseLocation) / 1000;
            const ongkir = Math.ceil(distance * 2000);

            document.getElementById("ongkir").value = ongkir;
            document.getElementById("ongkir-display").innerText = `IDR ${ongkir.toLocaleString()}`;

            // Ambil nilai subtotal dari elemen yang sudah diisi sebelumnya
        const subtotalText = document.getElementById('sub-total-amount').textContent.replace(/[^0-9]/g, '');
        const subtotal = parseInt(subtotalText) || 0;

        // Hitung total baru dan tampilkan ke elemen dengan id="ttotal"
        const total2 = subtotal + ongkir;
        document.getElementById("ttotal").innerText = `IDR ${total2.toLocaleString()}`;
    

        }
        }
        // Order confirmation function
        function kirimPesanan() {
            // Get form data
            const form = document.getElementById('orderForm');
            const formData = new FormData(form);
            
            // Basic validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#EF4444';
                } else {
                    field.style.borderColor = '#E5E7EB';
                }
            });
            
            if (!isValid) {
                alert('Mohon lengkapi semua field yang diperlukan!');
                return;
            }
            
            
            
            alert(`Pesanan berhasil dikonfirmasi!\nOrder ID: ${orderId}\n\nTerima kasih atas pesanan Anda!`);
        }
</script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCymXsxxOwZHOzPhpnCA6LX05KmESPXdrI&libraries=geometry"></script>
    </script>
</body>
</html>