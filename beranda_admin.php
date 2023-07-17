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
  <title>Admin Beranda - Manly Mart</title>
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

.welcome {
        width: 80%;
        margin: 20px auto;
    }

.columns {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.column {
  width: calc(7% - -50px);
  margin-bottom: 80px;
  border-radius: 10px;
  overflow: hidden;
}

.item {
  display: block;
  text-decoration: none;
  color: inherit;
  border-radius: inherit;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.item:hover {
  transform: scale(1.05);
}

.item-image {
  width: 75%;
  display: block;
  border-radius: inherit;
}

.item-caption {
  padding: 5px;
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
}

.item-description {
  margin: 5px 0 0;
  font-size: 14px;
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
      <a href="admin_index-login.php" class="nav-link">Keluar</a>
    </li>
  </ul>
</nav>
</header>
<br>

<div class="welcome">
    <h2>Selamat Datang di Manly Mart Administrator, <?php echo $_SESSION['username']; ?>!</h2>
</div>
<br>
<br>
  <!-- Konten Detail -->
  <div class="welcome">
  <div class="columns">
  <div class="column">
  <a href="identitas.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/4171/4171700.png" width="50S" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Identitas Toko</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="menu_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/10663/10663432.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Menu Toko</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="produk_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/6189/6189845.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Produk</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="kategori_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/3772/3772996.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Kategori Produk</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="order_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/891/891419.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Pesanan</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="Jasa_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/6180/6180211.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Jasa Pengiriman</p>
    </div>
  </a>
</div>
</div>
<div class="columns">
  <div class="column">
  <a href="ongkos_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/4171/4171988.png" width="50S" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Ongkos Pengiriman</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="notif_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/4911/4911810.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Pesan Masuk</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="ulasan-pelanggan.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/8992/8992973.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Testimoni</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="iklan_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/2740/2740334.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Pasang Iklan</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="maintanance_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/1149/1149065.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Maintenance</p>
    </div>
  </a>
</div>
<div class="column">
  <a href="halbar_toko.php" class="item">
    <img src="https://cdn-icons-png.flaticon.com/512/3161/3161597.png" alt="Gambar" class="item-image">
    <div class="item-caption">
      <p class="item-description">Halaman Baru</p>
    </div>
  </a>
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
