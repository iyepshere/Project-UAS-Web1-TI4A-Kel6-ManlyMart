<!DOCTYPE html>
<html>
<head>
    <title>Menu Toko - Manly Mart</title>
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
    h1 {
      font-size: 24px;
      margin-bottom: 10px;
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

<center>
    <div class="welcome"
    <div class="container">
    <div class="customer-menu">
    <ul>
      <li><a href="pelanggan_admin.php">Daftar Pelanggan</a></li>
      <li><a href="ulasan-pelanggan.php">Ulasan Pelanggan</a></li>
      <li><a href="riwayat-pembelian.php">Riwayat Pembelian</a></li>
      <li><a href="pengiriman.php">Pengiriman</a></li>
    </ul>
    <!-- Tambahkan elemen atau informasi lain yang sesuai -->
  </div>
    </div>
    </div>

    <div class="content">
    <h1>Daftar Pelanggan</h1>
    <table>
      <thead>
        <tr>
          <th>ID Pelanggan</th>
          <th>Nama Pelanggan</th>
          <th>Email</th>
          <th>Nomor Telepon</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>Jana Fitria M</td>
          <td>janafit@gmail.com</td>
          <td>0837991883</td>
          <td>Jalan Sekolah Internasional No. 123</td>
        </tr>
        <tr>
          <td>002</td>
          <td>Vina Agustina</td>
          <td>vinaagstn07@gmail.com</td>
          <td>9876543210</td>
          <td>Jalan Cikutra No. 456</td>
        </tr>
        <tr>
          <td>003</td>
          <td>Sesiliawati</td>
          <td>ntuy@gmail.com</td>
          <td>0821107897</td>
          <td>Jalan Buah Batu No. 85</td>
        </tr>
        <tr>
          <td>004</td>
          <td>Eva Michele</td>
          <td>michele666@gmail.com</td>
          <td>0897654231</td>
          <td>Jalan Karapitan No. 45</td>
        </tr>
        <tr>
          <td>005</td>
          <td>Nabilla Putri S</td>
          <td>saharabill@gmail.com</td>
          <td>082216598732</td>
          <td>Jalan Karawitan No. 14</td>
        </tr>
        <!-- Tambahkan baris data pelanggan lainnya jika diperlukan -->
      </tbody>
    </table>
  </div>    
</center>
<br>
<br>
<br>
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
