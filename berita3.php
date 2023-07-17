<?php
session_start();

if (!isset($_SESSION['username'])) {
    header ("location: beranda.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Black Jack Store - Humblezing Jacket</title>
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

    .atas ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        background-color: #333; 
        padding: 10px; 
    }

    .atas ul li {
        display: inline-block;
        margin-right: 10px;
    }

    .atas ul li a {
        text-decoration: none;
        padding: 5px 10px; 
        color: #fff;
    }

    .atas ul li a:hover {
        background-color: #aaaaaa; 
    }

    
    .fut {
        color: grey;
        font-size: 13px;
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
            width: 80px; /* Sesuaikan dengan lebar logo yang diinginkan */
            height: auto; /* Menyesuaikan tinggi logo secara proporsional */
        }

        button {
            padding: 10px;
            border: none;
            border-radius:7px;
            text-align: right;
            float: right;
            background-color: yellow;
        }


        .kolom ul li{
            list-style-type: none;
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

        footer {
        background-color: #333;
        color: #fff;
        padding: 5px;
        text-align: center;
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
<div class="welcome">
    <section class="content">
        <div class="container">
        <div class="keterangan">
        <img src="https://i.pinimg.com/originals/33/c6/06/33c606f9180751a1e370e3a906c31a24.jpg" alt="Logo" class="logo">
        <h1>Black Jack Store</h1>
        online 1 jam lalu - Jakarta
        <div class="isiberita">
            <center>
            <img src="https://cdn-brilio-net.akamaized.net/news/2021/01/26/199364/1395832-1000xauto-fashion-pria.jpg" width="500" alt="Gambar Berita 1"><br>
            <h1>"Humblezing Jacket"</h1>
            </center>
            <br>
            <h2>Rp 250.000,00</h2>
            <div class="color-options">
            <h4>Pilih Warna:</h4>
            <label><input type="radio" name="color" value="hijauarmy"> Hijau Army</label>
            <label><input type="radio" name="color" value="creamygum"> Creamy Gum</label>
            <label><input type="radio" name="color" value="blackmamba"> Black Mamba</label>
            </div>
            <div class="size-options">
            <h4>Pilih Ukuran:</h4>
            <label><input type="radio" name="size" value="S"> S</label>
            <label><input type="radio" name="size" value="M"> M</label>
            <label><input type="radio" name="size" value="L"> L</label>
            <label><input type="radio" name="size" value="XL"> XL</label>
            </div>
            <div class="quantity">
            <h4>Jumlah:</h4>
            <label><input type="number" id="quantity" name="quantity" min="1" value="1"></label>
            </div>
            <h4>Detail:</h4>
            <p>Kondisi : Baru<br>
            <br>
            Fabric : Waterresistant Polyster<br>
            <br>
            Lining : Cool Mesh<br>
            <br>
            Pockets : Four Side Zip Pockets and Inside Pocket<br>
            <br>
            Closure : Hidden Snap Buttons and Zipper Closure<br>
            <br>
            Detail Size: Chest, Length, Sleeve in cm<br>
            | S = '59', '65', '59' | M = '62', '67', '60' |<br>
            | L = '64', '69', '61' | XL = '67', '70', '62'<br>
            <br>
            Untuk tukar size dapat dilakukan apabila sudah konsultasi tinggi dan berat badan
            sebelum order dilakukan.</p>
            <button onclick="addToCart()">Tambahkan ke Keranjang</button>
</div>
</div>
        </div>
        </div>
    </div>
    </section>
</div>
<script>function selectColor(color) {
    // Mengatur warna yang dipilih
    console.log("Warna dipilih:", color);
    }

    function selectSize(size) {
    // Mengatur ukuran yang dipilih
    console.log("Ukuran dipilih:", size);
    }

    function addToCart() {
    var quantity = document.getElementById('quantity').value;

    console.log("Jumlah produk:", quantity);

    // Logika untuk menambahkan produk ke keranjang belanja
    console.log("Produk ditambahkan ke keranjang");
    }
</script>
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
