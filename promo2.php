<?php
session_start();

if (!isset($_SESSION['username'])) {
    header ("location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sumber Daya Manusia</title>
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
        background-color: #333;
        color:white;
    }

    .image-scroll {
        background-color: #f9f9f9;
        padding: 40px 20px;
        text-align: center;
    }

    .image-scroll h2 {
        margin-bottom: 20px;
    }

    .image-scroll h3 {
        font-size: 15px;
        font-weight: lighter;
        font-family: sans-serif; 
        text-align: justify;

    }


    .scroll-container {
        overflow-x: scroll;
        white-space: nowrap;
    }

    .scroll-container img {
        display: inline-block;
        width: 200px;
        height: 250px;
        margin-right: 10px;
    }

    .image-scroll img.ikon {
        width: 50px;
        height: auto;
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
            color: saddlebrown;
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

        p {
            color: grey;
            font-size: 13px;
        }

        .coret {
            color: grey;
            font-size: 13px;
            text-decoration: line-through;
        }

        .news-item {
            width: 30%;
            margin: 10px;
        }

        .news-item img {
            width: 100%;
            height: 250px;
            border: 10px;
            border-radius: 5px;
        }

        .news-item h3 {
            text-align: center;
        }

        .profile {
            width: 50%;
            height: auto;
            margin: 20px;
            border: 10px;
            border-radius: 5px;
        }

        .button {
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
        }

        .button a {
            font-size: 15px;
            color: darkgrey; /* Warna teks pada tautan */
        }

        .button:hover {
            background-color: white;
        }

        .button:hover a {
            color: saddlebrown; /* Warna teks saat hover pada tautan */
        }

        .reko-item {
            width: 30%;
            margin: 10px;
        }

        .reko-item img {
            width: 100%;
            height: 280px;
            border: 10px;
            border-radius: 5px;
        }

        .news-item h3 {
            text-align: center;
        }

        .promo img {
            background-color: beige;
            width: 50%;
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
                <li><a href="categories.php">Kategori</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="profile.php">Profile Settings</a></li>
            </ul>
        </nav>
    </header>
    <div class="welcome">
    <section class="content">
        <div class="container">
        <div class="promo">
        <h4>Semua di Bawah Rp 99.900,00!!!</h4>
            <center>
        <img src="https://images.milled.com/2020-09-18/S5plmtZyOabOpKxY/Tlg9CNjVECmW.png" alt="Gambar 1">
</center>
</div>
</div>
</div>
<div class="container">
<h3>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h3>
</div>
<div class="welcome">
<section class="content">
        <div class="container">
        <div class="reko-item">
            <img src="https://ae01.alicdn.com/kf/S89cef6ea762c4e648fea9b66be670c02i/Paket-Fanny-Fashion-untuk-Wanita-Pria-Tas-Pinggang-Bahu-Tas-Belanja-Kantong-Travel.jpg" alt="Gambar promo 1">
        <div class="keterangan">
        <a href="#" ><h4>Tas Pinggang Aesthetic</h4></a>
            Rp 85.890,00<br>
            <br>
            150 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="reko-item">
            <img src="https://cdn.shopify.com/s/files/1/0558/2772/6498/products/5_a1b5b5a7-5cef-4328-8fb7-56a34fcf3989_1800x1800.png?v=1631526393" alt="Gambar promo 2">
            <div class="keterangan">
            <a href="#" ><h4>Hamlin Mackenzie - Frame Classic Polaroid</h4></a>
            Rp 67.890,00<br>
           <br>
           2rb Terjual
            <p>Yogyakarta</p>
        </div>
        </div>
        <div class="reko-item">
            <img src="https://s4.bukalapak.com/uploads/content_attachment/97a429e340e8d762a83ac2c5/w-744/Jam-tangan-Expedition-E6667M-Coklat-Rose-Gold.jpg" alt="Gambar promo 3">
            <div class="keterangan">
            <a href="#.php" ><h4>Biden Watch</h4></a>
            Rp 78.570,00<br>
            <br>
            766 Terjual
            <p>Bandung</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://s3.bukalapak.com/img/8362016645/s-463-463/LONGBO_Jam_tangan_fashion_pria_wanita_analog_Stainless_steel.jpeg.webp" alt="Gambar Reko 5">
            <div class="keterangan">
            <a href="#" ><h4>SKMEI Longbo Watch</h4></a>
            Rp 99.000,00<br>
            <br>
            875 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://bestlist.id/wp-content/uploads/2020/09/sarung-pria-wadimor-terbaru.jpg" alt="Gambar Reko 6">
            <div class="keterangan">
            <a href="#.php" ><h4>Sarung Wadimor</h4></a>
            Rp 58.970,00<br>
            <br>
            478 Terjual
            <p>Bekasi</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://down-id.img.susercontent.com/file/00e4771d5fc66a0ab6e8bc5c43468a20" alt="Gambar Reko 7">
        <div class="keterangan">
        <a href="#" ><h4>Kaos Import Casual</h4></a>
        Rp 93.210,00<br>
            <br>
            1rb Terjual
            <p>Depok</p>
        </div>    
        </div>
        <div class="reko-item">
            <img src="https://down-id.img.susercontent.com/file/ab70ae43f1672cd4ff13e4129dcf5b55" alt="Gambar Reko 8">
            <div class="keterangan">
            <a href="berita2.php" ><h4>Kupluk Rajut Premium</h4></a>
            Rp 45.570,00<br>
           <br>
           97 Terjual
            <p>Bogor</p>
        </div>
        </div>
        <div class="reko-item">
            <img src="https://images.tokopedia.net/img/cache/700/product-1/2020/7/10/8886234/8886234_bd367236-26c2-4e9c-b8bd-2dca8aa4db91_1024_1024.jpg" alt="Gambar Reko 9">
            <div class="keterangan">
            <a href="berita3.php" ><h4>Slingbag Cavero</h4></a>
            Rp 72.570,00<br>
            <br>
            742 terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://ceklist.id/wp-content/uploads/2022/11/Frame-Kacamata-Pria-Terbaik.jpg" alt="Gambar Reko 10">
            <div class="keterangan">
            <a href="berita3.php" ><h4>Kacamata Fashion</h4></a>
            Rp 36.570,00<br>
            <br>
            963 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://lzd-img-global.slatic.net/g/p/2b68bb3b1f864e950d1d632577e4127e.jpg_360x360q75.jpg_.webp" alt="Gambar Reko 11">
            <div class="keterangan">
            <a href="berita3.php" ><h4>Dasi Elegan Terbaru</h4></a>
            Rp 15.570,00<br>
            <br>
            1,5rb Terjual
            <p>Tangerang</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-34428268/fordza_kaos_kaki_pria_panjang_sepatu_kerja_socks_anti_bacteria_spandek_polos_full02_ck0aaff8.jpg" alt="Gambar Reko 12">
            <div class="keterangan">
            <a href="berita3.php" ><h4>Kaos Kaki</h4></a>
            Rp 4.570,00<br>
            <br>
            3rb Terjual
            <p>Bandung</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/5/29/5884ada6-0fed-4e12-a04d-2aeb2ed40d4e.png" alt="Gambar Reko 13">
            <div class="keterangan">
            <a href="berita3.php" ><h4>Kemeja Kasual Modern - Madras Series</h4></a>
            Rp 77.570,00<br>
            <br>
            2,5rb Terjual
            <p>Bali</p>
            </div>
        </div>
</div>
    </div>
    </section>
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
