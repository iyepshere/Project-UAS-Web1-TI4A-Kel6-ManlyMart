<!DOCTYPE html>
<html>
<head>
    <title>Keranjang - Manly Mart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
    <style>
        /* CSS for form */
        form {
            width: 80%;
            margin: 20px auto;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-submit {
            display: inline-block;
            background-color: #555;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
            border: none;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #666;
        }

        /* Rest of the CSS */
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
            color: black;
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
            color: white;
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

        /* CSS for footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 5px;
            text-align: center;
        }

        .kolom ul li {
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
            font-family: sans-serif;
        }

        h6 {
            font-size: 15px;
        }

        .co h4 {
            font-weight: light;
            margin-bottom: 0;
            line-height: 0,5;
        }

        .btn-submit{
            background-color:green;
            flex: right;
        }

        .checkout {
  text-align: right;
}

.btn-checkout {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}

.checkout a {
    color: black;
    text-decoration: none;
}

.btn-checkout a:hover {
  background-color: #45a049;
  color: white;
}   

        .co {
            background-color: lightblue;
            padding: 10px;
            height: 545px;
            width: 700px;
            text-align: center;
            margin: 3px;
            border: none;
            border-radius: 10px;

        }

        .co ul li {
            list-style-type: none;
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
                <div class="co">
                <h1>Thank You!</h1>
                <h3>Your Order Placed Successfully!</h3>
                <center>
                    <h3>Item Purchased : </h3>
                    <ul>
                        <li>Sepatu Kulit - Coklat (1)</li>
                        <li>Kemeja Batik - Merah (2)</li>
                        <li>Humblezing Jacket - Creamy Gun (1)</li>
                    </ul>
                    <br>
                    <h4>Your Name : Ariefa</h4>
                    <h4>Your E-mail : iyepshere@gmail.com</h4>
                    <h4>Your Phone : 082120113232</h4>
                    <h4>Your Address : Pangalengan</h4>
                    <h4>Total Amount Paid : Rp 900.000,00 </h4>
                    <h4>Payment Mode : COD</h4>
                </center>
                <div class="checkout">
                        <button class="btn-checkout"><a href="beranda.php">OK</a></button>
                </div>
    </div>
    </div>
    </div>

    <footer>
        <div class="kolom">
            <center>
                <ul>
                    <li><a href="#"><img src="https://freepngimg.com/thumb/social_media/74488-instagram-icons-media-medtempnow-computer-social-logo.png" alt="instagram" height="25px"></a></li>
                    <li><a href="#"><img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1500309678/twitterbird_RGB_sd2xx3.png" alt="twitter" height="25px"></a></li>
                    <li><a href="#"><img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-facebook-social-media-icon-png-image_6315968.png" alt="facebook" height="25px"></a></li>
                    <li><a href="#"><img src="https://www.nesabamedia.com/wp-content/uploads/2021/02/WhatsApp-Plus-Logo-1.png" alt="whatsapp" height="25px"></a></li>
                </ul>
            </center>
        </div>
        <div class="kolom">
            <ul>
                <li><p class="bawah">E-mail: manlymart@gmail.com</p></li>
                <li><p class="bawah">Telepon: 021-27486200</p></li>
            </ul>
        </div>
        <div class="kolom">
            <p>Hak Cipta &copy; 2023 Manly Mart. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
