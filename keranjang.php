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
    <title>Keranjang - Manly Mart</title>
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

        table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 10px;
  text-align: left;
}

table th {
  background-color: peru;
}

table td button {
  padding: 5px 10px;
}

tfoot td {
  font-weight: bold;
}

.hapus {
    padding: 10px 20px;
    background-color: firebrick;
    color: white;
    border: none;
    cursor: pointer;

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

h3 {
    color:#fff;
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
    <table>
      <thead>
        <tr>
          <th></th>  
          <th>Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total</th>
          <th><button class="hapus">Empty Cart</button></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="https://www.beautified.co.id/wp-content/uploads/2019/08/66419255_184198822573038_8719197152761984752_n.jpg" width="85" alt="Gambar Berita 1"></td>
          <td>Sepatu Kulit Trendy - Coklat</td>
          <td>Rp 350.000,00</td>
          <td>1</td>
          <td>Rp 350.000,00</td>
          <td><button class="hapus">Hapus</button></td>
        </tr>
        <tr>
          <td><img src="https://blog.eigeradventure.com/wp-content/uploads/2022/08/DSC02511-1.jpg" width= "85" alt="Gambar Berita 2"></td>
          <td>Kemeja Batik Formal - Merah</td>
          <td>Rp 150.000,00</td>
          <td>2</td>
          <td>Rp 300.000,00</td>
          <td><button class="hapus">Hapus</button></td>
        </tr>
        <tr>
          <td><img src="https://cdn-brilio-net.akamaized.net/news/2021/01/26/199364/1395832-1000xauto-fashion-pria.jpg" width="85" alt="Gambar Berita 1"></td>
          <td>Humblezing Jacket - Creamy Gum</td>
          <td>Rp 250.000,00</td>
          <td>1</td>
          <td>Rp 250.000,00</td>
          <td><button class="hapus">Hapus</button></td>
        </tr>
      </tbody>
      <tfoot>
        
      </tfoot>
      <tfoot>
        <tr>
          <td colspan="4">Total</td>
          <td>Rp 900.000,00</td>
          <td></td>
        </tr>
      </tfoot>
    </table>

    <div class="checkout">
      <button class="btn-checkout"><a href="pasca_co.php">Checkout</a></button>
    </div>
  </div>
</div>
  <script src="script.js"></script>

<div class="welcome">
    <h3>ooooooooooooooooooooooooooooooo</h3>
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
