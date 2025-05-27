<!DOCTYPE html>
<html>
<head>
    <style>
      body {
            font-family: 'Maven Pro', sans-serif;
            background-color: #f0f0f0;
        }
        .page {
            width: 1440px;
            height: 1024px;
            left: 35px;
            position: absolute;
            background: white;
            overflow: hidden
        }
        .perpan-atas {
            width: 2407.07px;
            height: 1146.41px;
            left: -500.38px;
            top: -811.10px;
            position: absolute;
            background: #F4F4F4;
            border-radius: 9999px
        }
        .already-know {
            width: 1361.36px;
            height: 169.15px;
            left: 50.32px;
            top: 157.99px;
            position: absolute;
            text-align: center;
            color: #2E1230;
            font-size: 48px;
            font-family: MuseoModerno;
            font-weight: 500;
            word-wrap: break-word
        }

        .perpan-bawah {
            width: 1500px;
            height: 200px;
            left: -20px;
            top: 940px;
            position: absolute;
            background: #B7B7B7;
            border-radius: 10px
        }

        .puri {
            width: 412.90px;
            left: 127.60px;
            top: 968px;
            position: absolute;
            color: black;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 400;
            word-wrap: break-word;
            text-decoration: none;
        }

        .nygiekhom4degmailcom {
            width: 335.41px;
            left: 1018.16px;
            top: 967px;
            position: absolute;
            color: black;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 400;
            word-wrap: break-word;
            text-decoration: none;
        }

        .total-pesanan {
            left: 766.13px;
            top: 355.56px;
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }

        .btn-qr-wrapper {
            width: 187.21px;
            height: 46.14px;
            left: 626.39px;
            top: 250.19px;
            position: absolute;
        }

        .btn-qr {
            width: 100%;
            height: 100%;
            background: #1B1F26;
            border-radius: 10px;
            border: none;
            padding: 0;
            margin: 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Maven Pro', sans-serif;
            font-size: 24px;
            font-weight: 500;
            color: #F0F0F0;
            text-align: center;
        }

        /* Popup Overlay */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.6);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        /* Popup Content */
        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.3s ease;
        }

        /* Animasi aktif */
        .popup-overlay.show .popup-content {
            opacity: 1;
            transform: scale(1);
        }

        .popup-content img {
            width: 200px;
            height: 200px;
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        .box-kiri {
            width: 630.11px;
            height: 531.03px;
            left: 47.07px;
            top: 355.56px;
            position: absolute;
            background: white;
            box-shadow: 0px 4px 8.300000190734863px 1px rgba(0, 0, 0, 0.25)
        }

        .box-subtotal {
            width: 634px;
            height: 59px;
            left: 766px;
            top: 564.91px;
            position: absolute;
            background: white;
            box-shadow: 0px 4px 8.300000190734863px 1px rgba(0, 0, 0, 0.25)
        }

        .box-ongkir {
            width: 634px;
            height: 59px;
            left: 766px;
            top: 639.91px;
            position: absolute;
            background: white;
            box-shadow: 0px 4px 8.300000190734863px 1px rgba(0, 0, 0, 0.25)
        }

        .box-total {
            width: 634px;
            height: 59px;
            left: 766px;
            top: 714.91px;
            position: absolute;
            background: white;
            box-shadow: 0px 4px 8.300000190734863px 1px rgba(0, 0, 0, 0.25)
        }

        .box-id {
            width: 634px;
            height: 43px;
            left: 766px;
            top: 784.91px;
            position: absolute;
            background: white;
            box-shadow: 0px 4px 8.300000190734863px 1px rgba(0, 0, 0, 0.25)
        }

        .id {
            left: 797px;
            top: 793.91px;
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }

        

        .nama {
            left: 71.53px;
            top: 367.95px;
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }
        .input-nama {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: transparent;
            padding: 0 10px;
            font-size: 18px;
            font-family: Maven Pro;
            font-weight: 500;
            color: #2E1230; /* atau warna teks yang kamu inginkan */
            }
        .box-nama {
            width: 512px;
            height: 32.70px;
            left: 71.53px;
            top: 400.92px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }
        .no-telepon {
            left: 71.20px;
            top: 448.51px;
            position: absolute;
            text-align: center;
            color: #5A505B;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }
        .box-telepon {
            width: 512px;
            height: 32.70px;
            left: 71.53px;
            top: 481.48px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }
        .input-telepon {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: transparent;
            padding: 0 10px;
            font-size: 18px;
            font-family: Maven Pro;
            font-weight: 500;
            color: #2E1230; /* atau sesuaikan dengan tema warna teks kamu */
        }
        .alamat {
            left: 71.53px;
            top: 529.06px;
            position: absolute;
            text-align: center;
            color: #5A505B;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }
        .box-alamat {
            width: 512px;
            height: 32.70px;
            left: 71.53px;
            top: 562.03px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }
        .input-alamat {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: transparent;
            padding: 0 10px;
            font-size: 18px;
            font-family: Maven Pro;
            font-weight: 500;
            color: #2E1230;
        }

        .tanggal {
            left: 68.53px;
            top: 609.61px;
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }
        .box-tanggal {
            width: 128px;
            height: 32.70px;
            left: 71.53px;
            top: 644.64px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }
        .input-tanggal {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: transparent;
            padding: 0 6px;
            font-size: 16px;
            font-family: Maven Pro;
            font-weight: 500;
            color: #2E1230;
        }
        .jam {
            left: 68.53px;
            top: 694px; /* sesuaikan sesuai layout */
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word;
        }

        .box-jam {
            width: 120px;
            height: 32.70px;
            left: 71.53px;
            top: 729px; /* sesuaikan sesuai layout */
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.7px -5px rgba(0, 0, 0, 0.25) inset;
        }
        .input-jam {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: transparent;
            padding: 0 6px;
            font-size: 16px;
            font-family: Maven Pro;
            font-weight: 500;
            color: #2E1230;
        }

        

        .bukti-pembayaran {
            left: 68.53px;
            top: 772.40px;
            position: absolute;
            text-align: center;
            color: #5A505B;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }
        .box-upload {
            width: 187.21px;
            height: 55.14px;
            left: 68.53px;
            top: 805.37px;
            position: absolute;
            background: #F0F0F0;
            border-radius: 10px
        }
        
        .input-file {
            color: #1B1F26;
            text-decoration: none;
        }
        .upload {
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #B7B7B7;
            font-size: 18px;
            font-family: Maven Pro;
            font-weight: 500;
            pointer-events: none; /* agar klik tetap diarahkan ke label */
        }

        .box-idr-subtotal {
            width: 458.89px;
            height: 32.70px;
            left: 926.93px;
            top: 578.38px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }

        .box-idr-ongkir {
            width: 458.89px;
            height: 32.70px;
            left: 926.20px;
            top: 653.26px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }

        .box-idr-total {
            width: 458.89px;
            height: 32.70px;
            left: 922.90px;
            top: 728.13px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }

        .box-no-id {
            width: 460px;
            height: 29px;
            left: 922px;
            top: 791.91px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }

        .box-total-pesanan {
            width: 623.56px;
            height: 155.06px;
            left: 769.43px;
            top: 393.46px;
            position: absolute;
            background: #EFEFEF;
            box-shadow: 3px -2px 6.699999809265137px -5px rgba(0, 0, 0, 0.25) inset
        }

        .subtotal {
            left: 801.16px;
            top: 580.73px;
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }

        .ongkir {
            left: 800.43px;
            top: 655.60px;
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }

        .total {
            left: 797.13px;
            top: 730.48px;
            position: absolute;
            text-align: center;
            color: #6A6A6A;
            font-size: 24px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }

        .btn-konfirmasi-wrapper {
            width: 634px;
            height: 50px;
            left: 766px;
            top: 836.91px;
            position: absolute;
        }

        .btn-konfirmasi {
            width: 100%;
            height: 100%;
            background: #1B1F26;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Maven Pro', sans-serif;
            font-size: 24px;
            font-weight: 600;
            color: white;
        }

        /* Popup Overlay (Konfirmasi) */
        .popup-over {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        /* Box Popup */
        .popup-box {
            background-color: white;
            padding: 30px;
            width: 90%;
            max-width: 500px;
            border-radius: 10px;
            text-align: center;
            font-family: 'Maven Pro', sans-serif;
        }

        .popup-box h2 {
            font-size: 20px;
            font-weight: bold;
            color: #2E112D;
            margin-bottom: 15px;
        }

        .popup-box p {
            font-size: 14px;
            color: #333;
            line-height: 1.5;
        }

        .popup-box .signature {
            margin-top: 20px;
            font-weight: 600;
            text-align: right;
        }

        .popup-box button {
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #1B1F26;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .btn-home {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #1B1F26;
            color: white;
            font-size: 16px;
            text-decoration: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .idr-subtotal {
            width: 400px;
            height: 28px;
            left: 935px;
            top: 580px;
            position: absolute
        }

        .c3 {
            left: 5px;
            top: 5px;
            position: absolute;
            text-align: center;
            color: black;
            font-size: 16px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }

        .c4 {
            left: 58px;
            top: 5px;
            position: absolute;
            text-align: center;
            color: black;
            font-size: 16px;
            font-family: Maven Pro;
            font-weight: 500;
            word-wrap: break-word
        }

        .idr-ongkir {
            width: 400px;
            height: 28px;
            left: 935px;
            top: 655px;
            position: absolute
        }

        .idr-total {
            width: 400px;
            height: 28px;
            left: 935px;
            top: 730px;
            position: absolute
        }

        .perpan-atas2 {
            width: 1453.44px;
            height: 100px;
            left: 0px;
            top: -22px;
            position: absolute;
            background: white
        }

        .home, .about, .menu, .contact {
            position: absolute;
            top: 17px;
            color: #2E1230;
            font-size: 20px;
            font-family: Inter, sans-serif;
            font-weight: 400;
            word-wrap: break-word;
            cursor: pointer;
            text-decoration: none; /* Hilangkan underline */
        }
        button {
            all: unset;
            display: block;
        }

        /* Atur posisi masing-masing */
        .home { left: 222px; }
        .about { left: 312px; }
        .menu { left: 434px; }
        .contact { left: 521px; }


        .logo {
            width: 50px;
            height: 50px;
            left: 92px;
            top: 3px;
            position: absolute
        }

        .logo5 {
            width: 45px;
            height: 45px;
            left: 3px;
            top: 2px;
            position: absolute
        }

        .cart {
            width: 41px;
            height: 43px;
            left: 1297px;
            top: 4.91px;
            position: absolute
        }

        .c57 {
            width: 41px;
            height: 43px;
            left: 0px;
            top: 0px;
            position: absolute
        }

        .c58 {
            width: 41px;
            height: 34px;
            left: 0px;
            top: 9px;
            position: absolute;
            overflow: hidden
        }

        .c60 {
            width: 16px;
            height: 20px;
            left: 21px;
            top: 7px;
            position: absolute;
            background: #5D0EDB;
            overflow: hidden;
            border-radius: 100px
        }

        .c61 {
            left: 3px;
            top: 1px;
            position: absolute;
            color: white;
            font-size: 16px;
            font-weight: 600;
            
        }

        .profile {
            width: 1786px;
            height: 64px;
            left: -32px;
            top: 57px;
            position: absolute;
            background: #301932
        }

        .profilelog {
            width: 40px;
            max-width: 100%;
            max-height: 100%;
            left: 1350px;
            top: 10px;
            position: absolute;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .profilelog:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<div class="page">
    <div class="perpan-atas"></div>
    <div class="already-know">ALREADY KNOW WHAT YOU WILL CHOOSE?</div>
    <div class="perpan-bawah"></div>
    <a href="https://maps.app.goo.gl/FPjzMnxeX7L2Dwrd7" target="_blank" class="puri">Puri Bukit Ngaliyan no. B32</a>
    <a href="mailto:nygiekhomem4de@gmail.com" class="nygiekhom4degmailcom">nygiekhomem4de@gmail.com</a>
    <div class="total-pesanan">Total Pesanan</div>
    <div class="btn-qr-wrapper">
        <button class="btn-qr" onclick="showPopup()">lihat code QR</button>
    </div>

    <!-- Popup -->
    <div class="popup-overlay" id="qrPopup">
        <div class="popup-content">
            <button class="popup-close" onclick="hidePopup()">✕</button>
            <h2>Scan QR Code</h2>
            <img src="qr5.png" alt="QR Code">
        </div>
    </div>
    <div class="box-kiri"></div>
    <div class="box-subtotal"></div>
    <div class="box-ongkir"></div>
    <div class="box-total"></div>
    <div class="box-id"></div>
    <form id="Orderform">
    <div class="nama">Nama Penerima</div>
    <div class="box-nama">
        <input type="text" class="input-nama" placeholder="Masukan Nama" required>
    </div>
    <div class="no-telepon">Nomor Telepon</div>
    <div class="box-telepon">
        <input type="tel" class="input-telepon" placeholder="Nomor Telepon" required>
    </div>
    <div class="alamat">Alamat Pengiriman</div>
    <div class="box-alamat">
        <input type="text" class="input-alamat" placeholder="Alamat Pengiriman" required>
    </div>
    <div class="tanggal">Tanggal Pengiriman</div>
    <div class="box-tanggal">
    <input type="date" class="input-tanggal" required>
    </div>

    <div class="jam">Jam Pengiriman</div>
    <div class="box-jam">
        <input type="time" class="input-jam" required>
    </div>

    <div class="bukti-pembayaran">Kirim bukti pembayaran</div> 
    <label for="file-upload" class="box-upload" style="cursor: pointer;">
        <div class="upload" id="uploadStatus">Upload file</div>
    </label>
    <input type="file" id="file-upload" class="input-file required-input" hidden>

    <div class="box-idr-subtotal"></div>
    <div class="box-idr-ongkir"></div>
    <div class="box-idr-total"></div>
    <div class="box-no-id"></div>
    <div class="box-total-pesanan"></div>
    
    <div class="subtotal">Subtotal</div>
    <div class="ongkir">Ongkir</div>
    <div class="total">Total</div>
    <div class="id">ID</div>
    <div class="btn-konfirmasi-wrapper">
        <button type="submit" class="btn-konfirmasi" onclick="kirimPesanan()">Konfirmasi</button>
    </div>

    <!-- Popup Konfirmasi Pesanan -->
    <div class="popup-overlay" id="popupKonfirmasi">
        <div class="popup-box">
            <h2>PESANAN TERKIRIM</h2>
            <p>Terima kasih karena telah mempercayakan kebutuhan anda kepada kami. Pesanan anda telah kami terima dan sedang kami persiapkan dengan sepenuh hati.</p>
            <p>Kami berkomitmen untuk memberikan pelayanan terbaik dan sajian yang lezat sesuai harapan anda. Jika ada hal yang perlu atau penyesuaian pada pesanan, jangan ragu untuk menghubungi kami.</p>
            <p class="signature">Salam, <br>NY. GIEK Homemade</p>
            <a href="/" class="btn-home">back to home</a>
        </div>
    </div>
    <div class="idr-subtotal">
        <div class="c3">IDR</div>
        <div class="c4">0</div>
    </div>
    <div class="idr-ongkir">
        <div class="c3">IDR</div>
        <div class="c4">0</div>
    </div>
    <div class="idr-total">
        <div class="c3">IDR</div>
        <div class="c4">0</div>
    </div>
    <div class="perpan-atas2"></div>
    <a href="#home" class="home">Home</a>    
    <button class="about">About Us</button>     
    <a href="#menu" class="menu">Menu</a>     
    <a href="#contact" class="contact">Contact</a> 

    <div class="logo">
        <img class="logo5" src="logo5.png" />
    </div>
    <a href="#cart" class="cart"> 
    <div class="c57">
        <img class="c58" src="cart5.png" />
        <div class="c60">
            <div class="c61">0</div>
        </div>
    </div>
    </a>
    <div class="profile"></div>
    <a href="#profile">
    <img class="profilelog" src="profile.png" />
    </a>
</div>
<script>
        function showPopup() {
            const popup = document.getElementById("qrPopup");
            popup.style.display = "flex";
            // Give the browser a moment before applying the animation class
            setTimeout(() => {
                popup.classList.add("show");
            }, 10);
        }

        function hidePopup() {
            const popup = document.getElementById("qrPopup");
            popup.classList.remove("show");
            // Wait for animation to finish before hiding
            setTimeout(() => {
                popup.style.display = "none";
            }, 300);
        }
        const fileInput = document.getElementById('file-upload');
        const uploadStatus = document.getElementById('uploadStatus');

        fileInput.addEventListener('change', function () {
        if (fileInput.files.length > 0) {
            uploadStatus.textContent = "File diunggah ✔️";
            uploadStatus.style.color = "#4CAF50"; // opsional: ganti warna jadi hijau
        } else {
            uploadStatus.textContent = "Upload file";
            uploadStatus.style.color = "#B7B7B7";
        }

        // Panggil ulang validasi input jika kamu punya:
        if (typeof checkInputs === 'function') {
            checkInputs();
        }
        });

        function kirimPesanan() {
            // Simulasi pengiriman pesanan
            setTimeout(() => {
                document.getElementById("popupKonfirmasi").style.display = "flex";
            }, 300);
        }

        function kembaliKeBeranda() {
            // Tutup popup atau redirect ke halaman utama
            document.getElementById("popupKonfirmasi").style.display = "none";
            // window.location.href = "/"; // aktifkan ini jika ingin redirect
        }
    </script>
</html>