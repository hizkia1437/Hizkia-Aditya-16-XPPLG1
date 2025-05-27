<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <title>Document</title>
        <style>

            .container {
                    width: 1438px;
                    height: 1024px;
                    position: relative;
                    background: white;
                    overflow: hidden;
            }
             

            .logo {
                width: 55px;
                height: 55px;
                left: 32px;
                top: 0.5px;
                position: absolute;
            }   
            .home {
                left: 200px;
                top: 15px;
                position: absolute;
                color: #2E1230;
                font-size: 20px;
                font-family: Inter;
                font-size: 20px;
                word-wrap: break-word;
            }

            .aboutus {
                left: 312px;
                top: 15px;                
                position: absolute;
                color: #2E1230;
                font-size: 20px;                
                font-family: Inter;
                font-size: 20px;
                word-wrap: break-word;
            }

            .menu {
                left: 442px;
                top: 15px;
                position: absolute;
                color: #2E1230;
                font-size: 20px;
                font-family: Inter;
                font-size: 20px;
                word-wrap: break-word;
            }

            .contact {
                left: 532px;
                top: 15px;
                position: absolute;
                color: #2E1230;
                font-size: 20px;
                font-family: Inter;
                font-size: 20px;
                word-wrap: break-word;
            }

            .jumlahitems {
                left: 1050px;
                top: 15px;
                position: absolute;
                color: #2E1230;
                font-family: Inter;
                font-size: 20px;
                word-wrap: break-word;
            }

            .guest {
                width: 50px;
                height: 50px;
                left: 580px;
                top: 2px;
                position: absolute;
            }

            .ungu {
                width: 1330px;
                height: 64px;
                left: -32px;
                top: 57px;
                position: absolute;
                background: #301932;
            }

            .item {
                height: 95px;
                width: 625px;
                background:rgb(49, 46, 46);
                top: 155px;
                left:100px;
                color: white;
                padding: 20px;
                margin-bottom: 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: absolute;
            }

            .item2 {
                height: 95px;
                width: 625px;
                background:rgb(49, 46, 46);
                top: 255px;
                left:100px;
                color: white;
                padding: 20px;
                margin-bottom: 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: absolute;
            }

            .item3 {
                height: 95px;
                width: 625px;
                background:rgb(49, 46, 46);
                top: 355px;
                left:100px;
                color: white;
                padding: 20px;
                margin-bottom: 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: absolute;
            }

            .item3 {
                height: 95px;
                width: 625px;
                background:rgb(49, 46, 46);
                top: 355px;
                left:100px;
                color: white;
                padding: 20px;
                margin-bottom: 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: absolute;
            }

            .item4 {
                height: 95px;
                width: 625px;
                background:rgb(49, 46, 46);
                top: 455px;
                left:100px;
                color: white;
                padding: 20px;
                margin-bottom: 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: absolute;
            }

            .namamenu {
                font-size: 18px;
                font-weight: bold;
            }

            .hargamenu {
                font-size: 14px;
            }

            .counter {
                background:rgb(255, 254, 254);
                padding: 10px 35px;
                border-radius: 50px;
                display: flex;
                align-items: center;
            }
            .counter button {
                background: black;
                color: white;
                border: none;
                padding: 10px 15px;
                font-size: 18px;
                margin: 0 5px;
                border-radius: 100%;
                cursor: pointer;
            }

            .checkout {
                    position: absolute;
                    top: 555px;
                    left: 555px;
                    height: 350px;
                    width: 300px;
                    text-align: center;
                    margin: 50px 0;
            }
            
            .checkout button {
                    background: black;
                    color: white;
                    padding: 5px 100px;
                    font-size: 35px;
                    border-radius: 55px;
                    border: none;
                    cursor: pointer;
            }
        </style> 
    </head>

        <div class="container"></div>

        <div class="logo">
            <img class="logo" src="LOGO.jpg"/>
        </div>

        <button>
            <div class="home">Home</div>
        </button>

        <button>
            <div class="aboutus">About Us</div>
        </button>

        <button>
            <div class="menu">Menu</div>
        </button>

        <button>
            <div class="contact">Contact</div>
        </button>

        <div class="jumlahitems">0 item(s)</div>

        <div class="ungu"></div>

        <button>
            <div class="guest">
                <img class="guest" src="GUEST.jpg"/>
            </div>
        </button>

        <div class="item">
            <div>
                <div class="namamenu">Ayam Bakar</div>
                <div class="hargamenu">IDR 65000</div>
            </div>
            <div class="counter">
                <button onclick="decrease(this)">−</button>
                <span>0</span>
                <button onclick="increase(this)">+</button>
            </div>
        </div>
        
        <div class="item2">
            <div>
                <div class="namamenu">Ayam Ingkung</div>
                <div class="hargamenu">IDR 65000</div>
            </div>
            <div class="counter">
                <button onclick="decrease(this)">−</button>
                <span>0</span>
                <button onclick="increase(this)">+</button>
            </div>
        </div>

        <div class="item3">
            <div>
                <div class="namamenu">Rice Bowl</div>
                <div class="hargamenu">IDR 10000</div>
            </div>
            <div class="counter">
                <button onclick="decrease(this)">−</button>
                <span>0</span>
                <button onclick="increase(this)">+</button>
            </div>
        </div>

        <div class="item4">
            <div>
                <div class="namamenu">Snack</div>
                <div class="hargamenu">IDR 10000</div>
            </div>
            <div class="counter">
                <button onclick="decrease(this)">−</button>
                <span>0</span>
                <button onclick="increase(this)">+</button>
            </div>
        </div>

        <div class="checkout">
            <button>CHECKOUT!</button>
        </div>

        <script>
            function increase(button) {
                const span = button.parentElement.querySelector('span');
                span.textContent = parseInt(span.textContent) + 1;
                updateItemsCount();
        }

            function decrease(button) {
                const span = button.parentElement.querySelector('span');
                const current = parseInt(span.textContent);
                if (current > 0) span.textContent = current - 1;
                updateItemsCount();
        }

            function updateItemsCount() {
                const spans = document.querySelectorAll('.counter span');
                let total = 0;
                spans.forEach(span => {
                total += parseInt(span.textContent);
                });
                document.querySelector('header div:last-child').textContent = ${total} Item(s);
        }
  </script>
</body>
</html>