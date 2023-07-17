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
    <title>Sepatu - Kategori Manly Mart</title>
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
        <a href="#"><img src="https://png.pngtree.com/template/20220319/ourlarge/pngtree-outdoor-hiking-shoes-banner-pictures-image_877424.jpg" width="90%"
        alt="Gambar Banner 2"></a>
      </center>
    </div>
  </div>  
  </div>

  <div class="welcome">
    <section class="content">
        <h2 class="fitur">Sneakers</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/Zlz_OZLJxAtN4KF1EZ7JW88PAJo=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/declan-0761-0556793-1.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Declan Sneakers Sport</h4></a>
            Rp 259.000,00<br>
            <br>
            123 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/09CdjIBWD6PIUsR9qhCPc4C2W80=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/under-armour-2104-0055953-2.jpg" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Charged Assert Shoes</h4></a>
           Rp 214.000,00<br>
           <br>
           2rb Terjual
            <p>Bekasi</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/VCwpP0_D_054s_1HCxWnPQteyK4=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/361-4424-6621193-2.jpg" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Signature Shoes</h4></a>
            Rp 229.000,00<br>
            <br>
            766 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class = button>
        <a href="kemeja_more.php"><h5>Selengkapnya</h5></a>
</div>
    </div>
    <h2 class="fitur">Sandal</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/sw3sJq9NOd2K4HSYNVFoOE5pZIM=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/obermain-6510-0021852-2.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Teodor Nieko</h4></a>
            Rp 136.000,00<br>
            <br>
            180 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://i0.wp.com/www.footstepfootwear.com/wp-content/uploads/2021/07/Soul-Grey-1.jpg?fit=1080%2C1080&ssl=1" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Slide Footstep Footwear</h4></a>
           Rp 99.000,00<br>
           <br>
           2rb Terjual
            <p>Pekalongan</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://ds393qgzrxwzn.cloudfront.net/resize/m500x500/cat1/img/images/0/n5v1j3kDy0.jpg" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Sandal Pria Revino</h4></a>
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
<h2 class="fitur">Sepatu Kulit</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/6H2NLoKVByyJer475mdU-4xTwUQ=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/buccheri-8830-9396104-1.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Man Black</h4></a>
            Rp 199.950,00<br>
            <br>
            180 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/TPl5bQbSqBmrNWIh743Ly5-c7gk=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/mario-minardi-3199-6767704-1.jpg" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Luciano Brown</h4></a>
           Rp 162.450,00<br>
           <br>
           2rb Terjual
            <p>Pekalongan</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/20/d59800db-bfad-4b29-bd99-94fd618b74f4.jpg.webp" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Pantaofel Casual</h4></a>
            Rp 149.453,00<br>
            <br>
            766 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class = button>
        <a href="jacket_more.php"><h5>Selengkapnya</h5></a>
</div>
    </div>
    <h2 class="fitur">Boots</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/S8K38j46TljnfsToS_5G6yvyLBo=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/tragen-6068-0136093-2.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="#" ><h4>Tragen Footwear - Fleming Brown</h4></a>
            Rp 253.950,00<br>
            <br>
            180 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://dynamic.zacdn.com/dXak0hP5PhqAfkvBTWlAT_jonHM=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/selected-homme-5162-9813093-2.jpg" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="#" ><h4>Mads Leather Boots</h4></a>
           Rp 432.000,00<br>
           <br>
           2rb Terjual
            <p>Pekalongan</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2018/12/14/39435031/39435031_2a05079a-7413-44da-befc-d9836e83885b_700_1010.jpg" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="#" ><h4>Long Boots for Touring</h4></a>
            Rp 354.000,00<br>
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
