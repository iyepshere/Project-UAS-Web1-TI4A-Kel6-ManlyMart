<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>

    <style>
            * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    header {
        background-color: #333;
        padding: 20px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    nav ul li {
        display: inline;
    }
    nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
    }

    nav ul li a.active {
        background-color: #555;
    }

    h1 {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color:black;
    }

    .welcome {
        width: 80%;
        margin: 20px auto;
    }

    h2 {
        font-family: 'Comic Sans MS';
        margin-bottom: 10px;
    }

    .hero-image {
        background-image: url('hero-image.jpg');
        background-size: cover;
        background-position: center;
        height: 400px;
        position: relative;
    }

    .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
    }

    .hero-text h1 {
        font-size: 48px;
    }

    .hero-text p {
        font-size: 24px;
        margin-top: 20px;
    }

    .btn {
        display: inline-block;
        background-color: #555;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        margin-top: 20px;
    }

    .content {
        padding: 20px;
        text-align: center;
    }

    .fitur {
        background-color: peru;
    }

    .image-scroll {
        background-color: #f9f9f9;
        padding: 40px 20px;
        text-align: center;
    }

    .image-scroll h2 {
        margin-bottom: 20px;
    }

    .scroll-container {
        overflow-x: scroll;
        white-space: nowrap;
    }

    .scroll-container img {
        display: inline-block;
        width: 300px;
        height: 200px;
        margin-right: 10px;
    }

    .slider {
            overflow: hidden;
            width: 100%;
        }
        
        .slider img {
            display: block;
            width: 100%;
            height: 600px;
        }
    
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .keterangan {
            flex: 2;
            text-align: left;
        }

        .keterangan h4 {
            color: black;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: initial;
            text-decoration-color: initial;
        }

        .keterangan h4:hover {
            color: blue;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: initial;
            text-decoration-color: initial;
        }

        .keterangan a:hover {
            color: blue;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: initial;
            text-decoration-color: initial;
        }

        .waktu {
            color: grey;
            font-size: 12px;
        }

        .isiberita{
            font-size: 15px;
            line-height: 20px;
            text-align: justify;
        }

        .news-item {
            width: 30%;
            margin: 10px;
        }

        .news-item img {
            width: 100%;
            height: auto;
            border: 10px;
            border-radius: 5px;
        }

        .news-item h3 {
            text-align: center;
        }

        
        .kolom ul li{
            list-style-type: none;
            margin-top: 5px;
            margin: 0;
            padding: 1px;
            display: inline-block;
            margin-right: 10px;
            color: white;
        }

        .bawah {
            color: #fff;
            font-size: 12px;
            font-weight: light;
            font-family:sans-serif;
        }


        label {
            font-size: 15px;
            font-style: italic;
            text-align: left;
            line-height: 17px;
            color: black;
            margin: 0;
            padding: 5px 0;
            display: block;
        }

        .logo {
            float: left;
            width: 70px; /* Sesuaikan dengan lebar logo yang diinginkan */
            height: auto; /* Menyesuaikan tinggi logo secara proporsional */
        }

        h1 {
            color: #333;

        }

        h2 {
            color: #555;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"],
        button {
            padding: 8px 16px;
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button {
            background-color: #777;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .segaris {
            display: inline;
        }

        .fut {
            color:lightgrey;
            font-size: 12px;
        }

        footer {
        background-color: #333;
        color: #fff;
        padding: 5px;
        text-align: center;
    }    

        h1 {
            color: #333;
            font-family: sans-serif;
        }

        h2 {
            color: #555;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="checkbox"] {
            margin-top: 5px;
        }

        input[type="submit"],
        button {
            padding: 8px 16px;
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button {
            background-color: #777;
        }

        .riwayat {
            color: black;
            list-style-type: none;
            margin: 0;
            padding: 0;
            margin-bottom: 10px;
        }

        .riwayat ul {
            color: black;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: initial;
            text-decoration-color: initial;
        }

        .riwayat ul:hover {
            color: peru;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: initial;
            text-decoration-color: initial;
        }

        .riwayat a:hover {
            color: peru;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: initial;
            text-decoration-color: initial;
        }

        .flex-container {
            display: flex;
            align-items: center;
        }

        .checkbox-label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="beranda.php" class="active">Beranda</a></li>
                <li><a href="kategori.php">Kategori</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="profile.php">Profile Settings</a></li>
            </ul>
        </nav>
    </header>
<center>
    <h1>Profil Pengguna</h1>
    </center>
    
    <div class="welcome">
        <div class="container">
            <div class="keterangan">
    <h2>Informasi Pengguna</h2>
    <form>
        <label for="nama-lengkap">Nama Lengkap:</label>
        <input type="text" id="nama-lengkap" name="nama-lengkap"><br>

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="telepon">Nomor Telepon:</label>
        <input type="tel" id="telepon" name="telepon"><br>

        <label for="alamat">Alamat Pengiriman:</label>
        <textarea id="alamat" name="alamat"></textarea><br>

        <label for="foto-profil">Foto Profil:</label>
        <input type="file" id="foto-profil" name="foto-profil"><br>
        <br>
        <input type="submit" value="Simpan">
    </form>

    <h2>Keamanan</h2>
    <form>
        <label for="kata-sandi">Ubah Kata Sandi:</label>
        <input type="password" id="kata-sandi" name="kata-sandi"><br>
<br>
<div class="flex-container">
        <label for="verifikasi-dua-langkah">Verifikasi Dua Langkah:</label>
        <input type="checkbox" id="verifikasi-dua-langkah" name="verifikasi-dua-langkah"><br>
    </div>
<br>
        <button type="button">Keluar dari Semua Perangkat</button>
    </form>

    <h2>Notifikasi</h2>
    <form>
        <div class="flex-container">
            <label class="checkbox-label" for="email-notifikasi">Pemberitahuan Email     :</label>
            <input type="checkbox" id="email-notifikasi" name="email-notifikasi">
        </div>

        <div class="flex-container">
            <label class="checkbox-label" for="app-notifikasi">Pemberitahuan Aplikasi:</label>
            <input type="checkbox" id="app-notifikasi" name="app-notifikasi">
        </div>

        <div class="flex-container">
            <label class="checkbox-label" for="newsletter">Langganan Newsletter  :</label>
            <input type="checkbox" id="newsletter" name="newsletter">
        </div>
        <br>
        <input type="submit" value="Simpan">
    </form>

    <h2>Preferensi Produk</h2>
    <form>
        <label for="ukuran-pakaian">Ukuran Pakaian:</label>
        <select id="ukuran-pakaian" name="ukuran-pakaian">
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
            <option value="xl">XXL</option>
        </select><br>
<br>
        <label for="jenis-produk">Jenis Produk yang Disukai:</label>
        <input type="checkbox" id="jenis-produk" name="jenis-produk">Pakaian           <input type="checkbox" id="jenis-produk" name="jenis-produk">Sepatu<br>
        <input type="checkbox" id="jenis-produk" name="jenis-produk">Celana            <input type="checkbox" id="jenis-produk" name="jenis-produk">Tas<br>
        <input type="checkbox" id="jenis-produk" name="jenis-produk">Aksesoris         <input type="checkbox" id="jenis-produk" name="jenis-produk">Mens'care<br>
        <input type="checkbox" id="jenis-produk" name="jenis-produk">Lainnya<br>
<br>
        <label for="merek">Merek yang Disukai:</label>
        <input type="checkbox" id="merek" name="merek">Batik Keris          <input type="checkbox" id="merek" name="merek">Tutusepatu<br>
        <input type="checkbox" id="merek" name="merek">Black Jack          <input type="checkbox" id="merek" name="merek">Adidas<br>
        <input type="checkbox" id="merek" name="merek">Lainnya<br>
        <br>
        <input type="submit" value="Simpan">
    </form>
    </div>

    <div class="keterangan">
    <h2>Riwayat Pembelian</h2>
    <form class="riwayat">
    <ul>
        <li><a href="#">Daftar pesanan dan status</a></li>
        <li><a href ="#">Ulasan produk</a></li>
    </ul>
    </form>

    <h2>Pembayaran</h2>
    <form>
        <label for="metode-pembayaran">Metode Pembayaran:</label>
        <input type="text" id="metode-pembayaran" name="metode-pembayaran"><br>
<br>
        <label for="preferensi-pembayaran">Preferensi Pembayaran:</label>
        <input type="text" id="preferensi-pembayaran" name="preferensi-pembayaran"><br>
        <br>
        <input type="submit" value="Simpan">
    </form>

    <h2>Pusat Bantuan</h2>
    <form class="riwayat">
    <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Hubungi Kami</a></li>
    </ul>
    </form>

    <h2>Privasi dan Kebijakan</h2>
    <form class="riwayat">
    <ul>
        <li><a href="#">Kebijakan Privasi</a></li>
        <li><a href="#">Persyaratan Penggunaan</a></li>
    </ul>
    </form>
    </div>
    </div>
    </div>
<footer>
  			<div class="kolom"><center><ul>
			   <li><a href="#"><img src="https://freepngimg.com/thumb/social_media/74488-instagram-icons-media-medtempnow-computer-social-logo.png" alt="instagram" height="25px"></li></a>
			   <li><a href="#"><img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1500309678/twitterbird_RGB_sd2xx3.png" alt="twitter" height="25px"></li></a>
			   <li><a href="#"><img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-facebook-social-media-icon-png-image_6315968.png" alt="facebook" height="25px"></li></a>
			   <li><a href="#"><img src="https://www.nesabamedia.com/wp-content/uploads/2021/02/WhatsApp-Plus-Logo-1.png" alt="whatsapp" height="25px"></li></a>
			   </ul></center></div>
			<div class="kolom"><ul>
				<li><p class="bawah">E-mail: manlymart@gmail.com</p></li>
				<li><p class="bawah">Telepon: 021-27486200</p></li>
			</ul></div>
            <div class="kolom"><p class="fut">Hak Cipta &copy; 2023 Manly Mart. All rights reserved.</p></div>
  		</footer>
  </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
