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
    <title>Aksesoris - Kategori Manly Mart</title>
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

        .news-item {
            width: 30%;
            margin: 10px;
        }

        .news-item img {
            width: 100%;
            height: 400px;
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
            color: darkgrey;
        }

        .button:hover {
            background-color: white;
        }

        .button:hover a {
            color: saddlebrown;
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
    <div class="container">
    <div class="atas">
            <ul>
                <li><a href="pakaian2.php">Pakaian</a></li>
                <li><a href="celana.php">Celana</a></li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="sepatu.php">Sepatu</a></li>
                <li><a href="tas.php">Tas</a></li>
                <li><a href="jamdanaksesoris.php">Aksesoris</a></li>
                <li><a href="menscare.php">Men's Care</a></li>
            </ul>
    </div>
    </div>
    </div>

<div class="welcome">
    <div class="banner">
    <div>
      <center>
        <a href="#"><img src="https://www.radatime.co.id/image/data/premium/fossil/FOSSIL-SLIDER.jpg" width="90%"
        alt="Gambar Banner 2"></a>
      </center>
    </div>
  </div>  
  </div>

  <div class="welcome">
    <section class="content">
        <h2 class="fitur">Jam Tangan</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://static-id.zacdn.com/p/skmei-8548-1685191-1.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Jam Tangan Analog General</h4></a>
            Rp 259.000,00<br>
            <br>
            123 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/S5Wc2Yk9MXuH_doMeNJV7PNHIGc=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/casio-1385-0945183-1.jpg" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Digital Analog Dial Grey</h4></a>
           Rp 214.000,00<br>
           <br>
           2rb Terjual
            <p>Bekasi</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/1BhtSscIywQgpvl9vuMpJsm4fTA=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skmei-1570-7943703-1.jpg" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Casual Stainless Steel</h4></a>
            Rp 300.000,00<br>
            <br>
            766 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class = button>
        <a href="kemeja_more.php"><h5>Selengkapnya</h5></a>
</div>
    </div>
    <h2 class="fitur">Sabuk</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/AnpfkW3LHNsTad51Wu00d0G0FiM=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/pierre-cardin-6896-8385273-1.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Ikat Pinggang Kulit Leather</h4></a>
            Rp 85.478,00<br>
            <br>
            180 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://img.my-best.id/product_images/333066738e776fe329f099b670320c28.jpg?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=21a877a1fea4511709d8774dfb2cb138" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Sabuk Pria Cardinal</h4></a>
           Rp 99.000,00<br>
           <br>
           2rb Terjual
            <p>Pekalongan</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://img.priceza.co.id/img2/2130004/0001/2130004-20211019222118-67862729885870502.jpg" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Gesper Kulit Bulan</h4></a>
            Rp 57.000,00<br>
            <br>
            766 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class = button>
        <a href="kaos_more.php"><h5>Selengkapnya</h5></a>
</div>
</div>
<h2 class="fitur">Dasi</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://ustatic.priceza.co.id/img/upload/harga-dasi-repp.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Dasi Ceria</h4></a>
            Rp 29.950,00<br>
            <br>
            180 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://www.elfs-shop.com/~img/ties_diagonal_gd_1-78f09-3073_396-t2494_81.webp" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Luciano Golden Brown</h4></a>
           Rp 52.450,00<br>
           <br>
           2rb Terjual
            <p>Pekalongan</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ034_ZCZlxKWD_KU600rJTey7uTH-sYh4NGQ&usqp=CAU" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Dasi Pria Kantor</h4></a>
            Rp 49.453,00<br>
            <br>
            766 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class = button>
        <a href="jacket_more.php"><h5>Selengkapnya</h5></a>
</div>
    </div>
    <h2 class="fitur">Kacamata</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/-7w1dVrrU_VrYy_Ug2XM_nLATuA=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/kingship-2692-9995293-1.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Sunglasses Avery</h4></a>
            Rp 153.950,00<br>
            <br>
            180 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://a.ipricegroup.com/media/Maria/Kacamata_Hitam_Pria_Keren.jpg" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Kacamata Hitam</h4></a>
           Rp 128.000,00<br>
           <br>
           2rb Terjual
            <p>Pekalongan</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/MlTjzddXWVbm0gUpg-MR8fhSLGY=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hamlin-7569-2352042-1.jpg" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Polarized Lens Sunglasses</h4></a>
            Rp 254.000,00<br>
            <br>
            766 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class = button>
        <a href="jacket_more.php"><h5>Selengkapnya</h5></a>
</div>
    </div>
    </section>
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
            <div class="kolom"><p>Hak Cipta &copy; 2023 Manly Mart. All rights reserved.</p></div>
  		</footer>
  </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
