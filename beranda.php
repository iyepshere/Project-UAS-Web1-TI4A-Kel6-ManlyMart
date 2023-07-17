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
    <title>Beranda - Manly Mart</title>
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

        .kanan {
            justify-content: space-between;
            flex: right;
            text-align: right;
            margin-left: auto;
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
        <h2>Selamat Datang di Manly Mart, <?php echo $_SESSION['username']; ?>!</h2>
    <div class="slider">
    <div>
      <center>
        <a href="produk_gulir1.php"><img src="https://s1.bukalapak.com/attachment/614771/rekomendasi_item_fashion_-_image_utama.jpg" width="750"
        height="350" alt="Gambar Gulir 1"></a>
      </center>
    </div>
    <div>
      <center>
      <a href="produk_gulir2.php"><img src="https://blog.klikindomaret.com/wp-content/uploads/2020/07/162-scaled.jpg" width="750"
        height="350" alt="Gambar Gulir 2"></a>
      </center>
    </div>
    <div>
      <center>
      <a href="produk_gulir3.php"><img src="https://images.tokopedia.net/blog-tokopedia-com/uploads/2017/12/Blog_Judul-Blog-88.jpg" width="750"
        height="350" alt="Gambar Gulir 3"></a>
      </center>
    </div>
    <div>
        <center>
        <a href="produk_gulir4.php"><img src="https://merahputih.com/media/fc/81/80/fc8180ad6d756dfe0c72528326ea7a60.jpg" width="750"
        height="350" alt="Gambar Gulir 4"></a>
        </center>
    </div>
  </div>  
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider({
        auto:true,   
        })
    });
  </script>

<div class="welcome">
    <section class="content">
        <h2 class="fitur">Produk Populer!</h2>
        <div class="container">
        <div class="news-item">
            <img src="https://www.beautified.co.id/wp-content/uploads/2019/08/66419255_184198822573038_8719197152761984752_n.jpg" alt="Gambar Berita 1">
        <div class="keterangan">
        <a href="berita1.php" ><h4>Sepatu Kulit Trendy</h4></a>
            Rp 350.000,00<br>
            <br>
            180 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="news-item">
            <img src="https://blog.eigeradventure.com/wp-content/uploads/2022/08/DSC02511-1.jpg" width= "50" height="" alt="Gambar Berita 2">
            <div class="keterangan">
            <a href="berita2.php" ><h4>Baju Batik Formal Unik</h4></a>
           Rp 150.000,00<br>
           <br>
           2rb Terjual
            <p>Pekalongan</p>
        </div>
        </div>
        <div class="news-item">
            <img src="https://cdn-brilio-net.akamaized.net/news/2021/01/26/199364/1395832-1000xauto-fashion-pria.jpg" alt="Gambar Berita 3">
            <div class="keterangan">
            <a href="berita3.php" ><h4>Humblezing Jacket</h4></a>
            Rp 250.000,00<br>
            <br>
            766 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class = button>
        <a href="produkpopuler.php"><h5>Selengkapnya</h5></a>
</div>
    </div>
    </section>
    
    <section class="image-scroll">
        <h2 class="fitur">Promo Menarik!</h2>
        <div class="scroll-container">
            <a href="promo1.php"><img src="https://www.matahari.com/media/wysiwyg/HP_3BOX_B3_DESK_230714_230720.jpg" alt="Gambar 1"></a>
            <a href="promo2.php"><img src="https://images.milled.com/2020-09-18/S5plmtZyOabOpKxY/Tlg9CNjVECmW.png" alt="Gambar 2"></a>
            <a href="promo3.php"><img src="https://awsimages.detik.net.id/community/media/visual/2020/07/08/diskon-juli-2020-4.png?w=719" alt="Gambar 3"></a>
            <a href="promo4.php"><img src="https://awsimages.detik.net.id/community/media/visual/2020/12/28/brand-busana-diskon-akhir-tahun-2020-2.jpeg?w=1080" alt="Gambar 4"></a>
            <a href="promo5.php"><img src="https://images.malkelapagading.com/promo/29187-thumb-Hammer-New-Arrival.jpg" alt="Gambar 5"></a>
            <a href="promo6.php"><img src="https://images.malkelapagading.com/promo/29228-thumb-Hammer-CHISTMAS-SEASON.jpg" alt="Gambar 6"></a>
            <a href="promo7.php"><img src="https://images.malkelapagading.com/promo/29854-thumb-Kelapa%20Gading%20Mall%201st%20Floor%20800x800.jpg" alt="Gambar 7"></a>
            <a href="promo1.php"><img src="https://www.matahari.com/media/wysiwyg/HP_3BOX_B3_DESK_230714_230720.jpg" alt="Gambar 8"></a>
            <a href="promo2.php"><img src="https://images.milled.com/2020-09-18/S5plmtZyOabOpKxY/Tlg9CNjVECmW.png" alt="Gambar 9"></a>
            <a href="promo3.php"><img src="https://awsimages.detik.net.id/community/media/visual/2020/07/08/diskon-juli-2020-4.png?w=719" alt="Gambar 10"></a>
            <a href="promo4.php"><img src="https://awsimages.detik.net.id/community/media/visual/2020/12/28/brand-busana-diskon-akhir-tahun-2020-2.jpeg?w=1080" alt="Gambar 11"></a>
            <a href="promo5.php"><img src="https://images.malkelapagading.com/promo/29187-thumb-Hammer-New-Arrival.jpg" alt="Gambar 12"></a>
            <a href="promo6.php"><img src="https://images.malkelapagading.com/promo/29228-thumb-Hammer-CHISTMAS-SEASON.jpg" alt="Gambar 13"></a>
            <a href="promo7.php"><img src="https://images.malkelapagading.com/promo/29854-thumb-Kelapa%20Gading%20Mall%201st%20Floor%20800x800.jpg" alt="Gambar 14"></a>
        </div>
    </section>
</div>
<div class="welcome">
<section class="content">
        <h2 class="fitur">Rekomendasi</h2>
        <div class="container">
        <div class="reko-item">
            <img src="https://img.my-best.id/product_images/a61819fe5b2e14f7365e79b538025457.png?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=d232b0aa229718a323465f38d430f28b" alt="Gambar Reko 1">
        <div class="keterangan">
        <a href="#" ><h4>Topi Pria</h4></a>
            Rp 70.000,00<br>
            <br>
            150 Terjual
            <p>Bandung</p>
        </div>    
        </div>
        <div class="reko-item">
            <img src="https://lh6.googleusercontent.com/-wZg0KVHHFOWlFwYp5XrviyS5nOAxV6rD92XC-nsUNU3C-EaaW_a3s6LdqAk9masGuqrdPcugdUb4gupznL8-8oPO_EA36tn21trL6JW1YHC-rHKHDCY3UUinmSbdiu1nuiG9XlcYdz3sBgVMA" alt="Gambar Reko 2">
            <div class="keterangan">
            <a href="#" ><h4>Jam Tangan Elegan</h4></a>
           Rp 150.000,00<br>
           <br>
           2rb Terjual
            <p>Yogyakarta</p>
        </div>
        </div>
        <div class="reko-item">
            <img src="https://img.my-best.id/content_section/choice_component/contents/492a42ed247fd56cf9f09972e007ac8a.jpg?ixlib=rails-4.3.1&q=70&lossless=0&w=690&fit=max&s=2f62b43f3fc73b0b430c8f922e24cc53" alt="Gambar Reko 4">
            <div class="keterangan">
            <a href="#" ><h4>Sepatu Sneakers Trendy</h4></a>
            Rp 250.000,00<br>
            <br>
            766 Terjual
            <p>Bandung</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://id-live-01.slatic.net/p/abcfe0c36348f4b85232c0e9342d27c0.png" alt="Gambar Reko 5">
            <div class="keterangan">
            <a href="#" ><h4>Varsity Jacket</h4></a>
            Rp 250.000,00<br>
            <br>
            875 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://id-test-11.slatic.net/p/ef549095d55e5984c9c6c4119c763f94.jpg" alt="Gambar Reko 6">
            <div class="keterangan">
            <a href="#" ><h4>Blazer Semi-Formal</h4></a>
            Rp 145.000,00<br>
            <br>
            478 Terjual
            <p>Bekasi</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://ae01.alicdn.com/kf/S885508f6d1464ceb898dd493b58dbf02R/Jeans-Kasual-Fashion-Kualitas-Tinggi-Amerika-Pakaian-Pria-Celana-Panjang-Lurus-Denim-Ala-Jalanan-Celana-Kargo.jpg" alt="Gambar Reko 7">
        <div class="keterangan">
        <a href="#" ><h4>Jeans Denim Casual</h4></a>
            Rp 170.000,00<br>
            <br>
            1rb Terjual
            <p>Depok</p>
        </div>    
        </div>
        <div class="reko-item">
            <img src="https://down-id.img.susercontent.com/file/ab70ae43f1672cd4ff13e4129dcf5b55" alt="Gambar Reko 8">
            <div class="keterangan">
            <a href="#" ><h4>Kupluk Rajut Premium</h4></a>
           Rp 70.000,00<br>
           <br>
           97 Terjual
            <p>Bogor</p>
        </div>
        </div>
        <div class="reko-item">
            <img src="https://images.tokopedia.net/img/cache/700/product-1/2020/7/10/8886234/8886234_bd367236-26c2-4e9c-b8bd-2dca8aa4db91_1024_1024.jpg" alt="Gambar Reko 9">
            <div class="keterangan">
            <a href="#" ><h4>Slingbag Cavero</h4></a>
            Rp 100.000,00<br>
            <br>
            742 terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://ceklist.id/wp-content/uploads/2022/11/Frame-Kacamata-Pria-Terbaik.jpg" alt="Gambar Reko 10">
            <div class="keterangan">
            <a href="#" ><h4>Kacamata Fashion</h4></a>
            Rp 50.000,00<br>
            <br>
            963 Terjual
            <p>Jakarta</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://lzd-img-global.slatic.net/g/p/2b68bb3b1f864e950d1d632577e4127e.jpg_360x360q75.jpg_.webp" alt="Gambar Reko 11">
            <div class="keterangan">
            <a href="#" ><h4>Dasi Elegan Terbaru</h4></a>
            Rp 35.000,00<br>
            <br>
            1,5rb Terjual
            <p>Tangerang</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-34428268/fordza_kaos_kaki_pria_panjang_sepatu_kerja_socks_anti_bacteria_spandek_polos_full02_ck0aaff8.jpg" alt="Gambar Reko 12">
            <div class="keterangan">
            <a href="#" ><h4>Kaos Kaki Aesthetic</h4></a>
            Rp 8.000,00<br>
            <br>
            3rb Terjual
            <p>Bandung</p>
            </div>
        </div>
        <div class="reko-item">
            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/5/29/5884ada6-0fed-4e12-a04d-2aeb2ed40d4e.png" alt="Gambar Reko 13">
            <div class="keterangan">
            <a href="#" ><h4>Kemeja Kasual Modern - Madras Series</h4></a>
            Rp 125.000,00<br>
            <br>
            2,5rb Terjual
            <p>Bali</p>
            </div>
        </div>
</div>
    </div>
    </section>

  	<div class="bersih"></div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
