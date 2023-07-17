<!DOCTYPE html>
<html>
<head>
  <title>Identitas Toko - Manly Mart</title>
  <style>
        /* Gaya CSS untuk navbar */
        * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    header {
        background-color: #333;
        padding: 2px;
    }

    .navbar {
  background-color: #333;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
}

.logo {
  font-weight: bold;
  color: #fff;
  text-decoration: none;
  font-size: 20px;
}

.navbar-nav {
  list-style-type: none;
  display: flex;
}

.nav-item {
  margin-right: 15px;
}

.nav-link {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
}

.nav-link:hover {
  color: #ccc;
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

.welcome {
        width: 80%;
        margin: 20px auto;
    }

    .containers {
      width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
    }

    
    textarea{
        width: 100%;
      padding: 45px;
    }

    input[type="submit"] {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    .fut {
    color: grey;
    font-size: 13px;
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
  <!-- Navbar -->
  <nav class="navbar">
  <a href="#" class="logo"><img src="https://cdn-icons-png.flaticon.com/512/6108/6108201.png" width="60"></a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="beranda_admin.php" class="nav-link active">Beranda</a>
    </li>
    <li class="nav-item">
      <a href="produk_toko.php" class="nav-link">Produk</a>
    </li>
    <li class="nav-item">
      <a href="order_toko.php" class="nav-link">Pesanan</a>
    </li>
    <li class="nav-item">
      <a href="pelanggan_admin.php" class="nav-link">Pelanggan</a>
    </li>
    <li class="nav-item">
      <a href="statistik_admin.php" class="nav-link">Statistik</a>
    </li>
    <li class="nav-item">
    <a href="admin_index-login.php" class="nav-link">Keluar</a>    </li>
  </ul>
</nav>
</header>
<div class="welcome">
    <div class="container">
    <div class="atas">
            <ul>
                <li><a href="identitas.php">Identitas</a></li>
                <li><a href="menu_toko.php">Menu</a></li>
                <li><a href="produk_toko.php">Produk</a></li>
                <li><a href="kategori_toko.php">Kategori</a></li>
                <li><a href="order_toko.php">Pesanan</a></li>
                <li><a href="Jasa_toko.php">Jasa Kirim</a></li>
                <li><a href="ongkos_toko.php">Ongkos Kirim</a></li>
                <li><a href="pesan_toko.php">Pesan</a></li>
                <li><a href="ulasan-pelanggan.php">Testimoni</a></li>
                <li><a href="iklan_toko.php">Iklan</a></li>
                <li><a href="maintanance_toko.php">Maintanance</a></li>
                <li><a href="halbar_toko.php">Halaman Baru</a></li>
            </ul>
    </div>
    </div>
    </div>

<br>

  <div class="containers">
    <h2>Identitas Toko</h2>
    <form method="POST" action="submit.php">
        <label for="ikontoko">Ikon Toko:</label>
        <img src="https://i.pinimg.com/originals/33/c6/06/33c606f9180751a1e370e3a906c31a24.jpg" width="70" alt="ikon toko">
      <label for="nama_toko">Nama Toko:</label><br>
      <input type="text" id="nama_toko" name="nama_toko" placeholder="Black Jack" required>

      <label for="url_toko">URL Toko:</label><br>
      <input type="text" id="url_toko" name="url_toko" placeholder="http:localhost/blackjack.php" required>
      
      <label for="ig_toko">Instagram:</label><br>
      <input type="text" id="ig_toko" name="ig_toko" placeholder="blackjack_official" required>
      
      <label for="twt_toko">Twitter:</label><br>
      <input type="text" id="twt_toko" name="twt_toko" placeholder="@blackjack" required>
      
      <label for="fb_toko">FB FanPage:</label><br>
      <input type="text" id="fb_toko" name="fb_toko" placeholder="https://www.facebook.com/blackjack" required>

      <label for="email_toko">Email:</label><br>
      <input type="text" id="email_toko" name="email_toko" placeholder="blackjack165@gmail.com" required>

      <label for="notel_toko">No.Telepon:</label><br>
      <input type="text" id="notel_toko" name="notel_toko" placeholder="022-7533217" required>

      <label for="norek_toko">No. Rekening:</label><br>
      <input type="text" id="norek_toko" name="norek_toko" placeholder="Bank BCA - 5220304312 - Ali" required>

      <label for="hari_toko">Hari Kerja:</label><br>
      <input type="text" id="hari_toko" name="hari_toko" placeholder="Monday - Saturday" required>

      <label for="jam_toko">Hari Kerja:</label><br>
      <input type="text" id="jam_toko" name="jam_toko" placeholder="09.00 - 17.00" required>

      <label for="deskripsi_toko">Deskripsi Toko:</label><br>
      <textarea id="deskripsi_toko" name="deskripsi_toko" placeholder="Selamat datang di Balck Jack, tujuan utama Anda untuk gaya pria yang keren dan penuh gaya! Kami adalah toko fashion pria yang menghadirkan koleksi terbaru dan tren terkini dalam dunia mode pria. Dari pakaian kasual yang nyaman hingga pakaian formal yang elegan, kami menyediakan berbagai pilihan untuk memenuhi kebutuhan gaya Anda." required></textarea>

      <label for="alamat_toko">Alamat Toko:</label><br>
      <input type="text" id="alamat_toko" name="alamat_toko" placeholder="Jl. Budi Utomo No.7, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710" required>

      <input type="submit" value="Simpan">
    </form>
  </div>
  <br>
  <br>

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
