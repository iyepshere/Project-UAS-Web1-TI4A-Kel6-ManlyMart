<!DOCTYPE html>
<html>
<head>
    <title>Menu Toko - Manly Mart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        /* CSS untuk mengatur tampilan tabel */
        table {
            border-collapse: collapse;
            width: 80%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        /* CSS untuk mengatur tampilan tombol edit dan hapus */
        .edit-button, .hapus-button {
            padding: 6px 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
        }
        
        .hapus-button {
            background-color: #f44336;
        }
        
        .edit-button:hover, .hapus-button:hover {
            opacity: 0.8;
        }

        /* Gaya CSS untuk menu pelanggan */
    .customer-menu {
      background-color: #333;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .customer-menu ul {
      color:white;
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    .customer-menu li {
        color:white;
      display: inline;
      margin-left: 10px;
    }

    .customer-menu li a {
        color:white;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 5px;
    }

       /* Gaya CSS untuk konten ulasan pelanggan */
       .content {
      margin: 20px;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .review-list {
      list-style: none;
      padding: 0;
    }

    .review-item {
      margin-bottom: 20px;
      display: flex;
      align-items: flex-start;
    }

    .review-item .product-image {
      margin-right: 10px;
    }

    .review-item .product-image img {
      width: 100px;
      height: auto;
    }

    .review-item .review-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .review-item .review-details {
      font-size: 14px;
      color: #666;
      margin-bottom: 5px;
    }

    .review-item .review-description {
      font-size: 16px;
      line-height: 1.5;
    }

    .purchase-list {
      list-style: none;
      padding: 0;
    }

    .purchase-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .purchase-item .purchase-info {
      flex: 1;
      margin-left: 20px;
    }

    .purchase-item .purchase-info h2 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .purchase-item .purchase-info p {
      font-size: 14px;
      color: #666;
      margin-bottom: 5px;
    }

    .purchase-item .purchase-status {
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 14px;
      color: #fff;
      font-weight: bold;
    }

    .status-pending {
      background-color: #fbbf24;
    }

    .status-shipped {
      background-color: #3b82f6;
    }

    .status-delivered {
      background-color: #10b981;
    }

    .status-cancelled {
      background-color: #ef4444;
    }

    .shipment-list {
      list-style: none;
      padding: 0;
    }

    .shipment-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .shipment-item .shipment-info {
      flex: 1;
      margin-left: 20px;
    }

    .shipment-item .shipment-info h2 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .shipment-item .shipment-info p {
      font-size: 14px;
      color: #666;
      margin-bottom: 5px;
    }

    .shipment-item .shipment-status {
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 14px;
      color: #fff;
      font-weight: bold;
    }

    .status-processing {
      background-color: #f59e0b;
    }

    .status-shipping {
      background-color: #3b82f6;
    }

    .status-delivered {
      background-color: #10b981;
    }

    .status-returned {
      background-color: #ef4444;
    }

    .stats-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .stats-card {
      width: calc(50% - 20px);
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      background-color: lightblue;
    }

    .stats-card:nth-child(odd) {
      background-color: beige;
    }

    .stats-card h2 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .stats-card p {
      font-size: 14px;
      color: #666;
      margin-bottom: 5px;
    }

    .stats-card .stat-value {
      font-size: 24px;
      font-weight: bold;
    }

    .stats-card .stat-icon {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .shipping-menu {
  background-color: #f9f9f9;
  padding: 20px;
}

.shipping-menu h2 {
  font-size: 18px;
  margin-bottom: 10px;
}

.shipping-menu label {
  display: block;
  margin-bottom: 5px;
}

.shipping-menu input[type="text"],
.shipping-menu input[type="number"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
}

.shipping-menu button {
  background-color: #4caf50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#shipping-result {
  margin-top: 20px;
  font-weight: bold;
}

.notification {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  padding: 20px;
}

.notification-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 10px;
  
}

.notification-header h3 {
  font-size: 18px;
  margin: 0;
}

.close-button {
  background-color: transparent;
  border: none;
  color: #999;
  cursor: pointer;
  font-size: 22px;
  padding: 0;
}

.close-button:hover {
  color: #555;
}

.notification-body {
  margin: 0;
}

.notification-body p {
  margin: 0 0 10px;
}

.customer-name {
  font-weight: bold;
}

.message {
  color: #555;
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


 <!-- Konten Riwayat Pembelian -->
 <div class="welcome">
    <div class="container">
    <div class="notification">
  <div class="notification-header">
    <h3>Pesan Masuk</h3>
    <button class="close-button">&times;</button>
  </div>
  <div class="notification">
  <div class="notification-body">
    <p>Anda memiliki pesan baru dari pelanggan:</p>
    <p class="customer-name">Sesiliawati</p>
    <p class="message">Hai kakk, apa produk ini bisa custome ukuran nya ??</p>
  </div>
</div>
<div class="notification">
  <div class="notification-body">
    <p>Anda memiliki pesan baru dari pelanggan:</p>
    <p class="customer-name">Tiara Anisa</p>
    <p class="message">Min kalo co hari ini jam 4 sore masi bisa di kirim di hari yang sama ga yaa?</p>
  </div>
</div>
<div class="notification">
  <div class="notification-body">
    <p>Anda memiliki pesan baru dari pelanggan:</p>
    <p class="customer-name">Ina Najiyah</p>
    <p class="message">Min kemeja batik yang warna item kapan restock yaa?</p>
  </div>
</div>

</div>
</div>
</div>
  <br>
<br>
<br>
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