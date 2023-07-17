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
            </ul>
        </nav>
    </header>
<div class="welcome">
<section class="content">
        <h2 class="fitur">Produk Populer!</h2>
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
            2,5rb TerjualS
            <p>Bali</p>
            </div>
        </div>
</div>
    </div>
    </section>

    <footer>
        <p>Hak Cipta &copy; 2023 Sumber Daya Manusia. All rights reserved.</p>
    </footer>
</body>
</html>
