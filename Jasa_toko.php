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

<center>
    <h3>Jasa Pengiriman:</h3>
    <table>
        <tr>
            <th></th> <!-- Kolom checkbox -->
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        <tr>
            <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td>1</td>
            <td>POS EXPRESS</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
            <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td>2</td>
            <td>JNE</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
            <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td>3</td>
            <td>TIKI</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
            <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td>4</td>
            <td>SICEPAT</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
            <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td>5</td>
            <td>ANTARAJA</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
    </table>
    </center>
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
