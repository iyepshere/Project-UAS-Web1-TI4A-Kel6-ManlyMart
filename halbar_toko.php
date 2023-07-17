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
        margin: 5px auto;
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

        .advertisement {
  background-color: #F2D06B;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 20px;
  margin-bottom: 20px;
}

.advertisement h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.advertisement label {
  display: block;
  margin-bottom: 5px;
}

.advertisement input[type="text"],
.advertisement textarea,
.advertisement input[type="file"],
.advertisement input[type="url"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
}

.advertisement textarea {
  resize: vertical;
  height: 100px;
}

.advertisement button {
  background-color: #4caf50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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

.new-page-menu {
  background-color: beige;
  padding: 20px;
  width: 80%;
  margin: 0 auto;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.new-page-menu h2 {
  font-size: 24px;
  margin-bottom: 20px;
  text-align: center;
}

.new-page-menu label {
  display: block;
  margin-bottom: 10px;
}

.new-page-menu input[type="text"],
.new-page-menu textarea,
.new-page-menu input[type="number"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 15px;
}

.new-page-menu textarea {
  resize: vertical;
  height: 150px;
}

.new-page-menu select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 15px;
}

.new-page-menu button {
  background-color: #4caf50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.new-page-menu button:hover {
  background-color: #45a049;
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
                <li><a href="maintanance_toko.php">Maintenance</a></li>
                <li><a href="halbar_toko.php">Halaman Baru</a></li>
            </ul>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
  <!-- Konten Detail -->
  <div class="welcome">
  <div class="container">
  <div class="columns">
  <div class="new-page-menu">
  <h2>Tambah Halaman Baru</h2>
  <form id="new-page-form">
    <label for="page-title">Judul Halaman:</label>
    <input type="text" id="page-title" name="page-title" placeholder="Masukkan judul halaman" required>
    <label for="page-content">Konten Halaman:</label>
    <textarea id="page-content" name="page-content" placeholder="Masukkan konten halaman" required></textarea>
    <label for="page-url">URL Halaman:</label>
    <input type="text" id="page-url" name="page-url" placeholder="Contoh: /halaman-baru" required>
    <label for="page-order">Urutan Halaman:</label>
    <input type="number" id="page-order" name="page-order" placeholder="Masukkan urutan halaman" required>
    <label for="page-status">Status Halaman:</label>
    <select id="page-status" name="page-status" required>
      <option value="draft">Draft</option>
      <option value="published">Published</option>
    </select>
    <label for="page-featured">Halaman Unggulan:</label>
    <select id="page-featured" name="page-featured">
      <option value="yes">Ya</option>
      <option value="no">Tidak</option>
    </select>    <button type="submit">Tambah Halaman</button>
  </form>
</div>
</div>
</div>
</div>
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
