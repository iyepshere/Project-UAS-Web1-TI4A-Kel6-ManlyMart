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
    <h3>Produk Toko:</h3>
    <table>
        <tr>
            <th></th> <!-- Kolom checkbox -->
            <th>Icon produk</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Berat</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        <tr>
            <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td><img src="https://www.beautified.co.id/wp-content/uploads/2019/08/66419255_184198822573038_8719197152761984752_n.jpg" width="85" alt="Gambar Berita 1"></td>
            <td>Sepatu Kulit Trendy</td>
            <td>Sepatu</td>
            <td>Rp 350.000,00</td>
            <td>Sepatu Casual Pria dari Kulit Sapi Premium</td>
            <td>177</td>
            <td>0,5 Kg</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
        <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td><img src="https://mediaini.com/wp-content/uploads/2022/05/rekomendasi-kemeja-batik-pria-by-AdinataIG.jgp_-819x1024.jpg" width="85" alt="Gambar Berita 1"></td>
            <td>Kemeja Batik Formal</td>
            <td>Atasan</td>
            <td>Rp 110.000,00</td>
            <td>Kemeja Batik untuk Kondangan</td>
            <td>476</td>
            <td>0,3 Kg</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
        <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td><img src="https://www.converse.id/media/catalog/product/cache/92f171526e7977390d5520345996ff51/0/1/01-CONVERSE-E04HPCON0-CONMC160103-Green.jpg" width="85" alt="Gambar Berita 1"></td>
            <td>Topi Converse Original</td>
            <td>Aksesoris</td>
            <td>Rp 97.000,00</td>
            <td>Topi Keren Remaja</td>
            <td>23</td>
            <td>0,2 Kg</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
        <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td><img src="https://lzd-img-global.slatic.net/g/p/9e0f0968806232dc34327901823a2020.jpg_360x360q75.jpg_.webp" width="85" alt="Gambar Berita 1"></td>
            <td>Slingbag Casual</td>
            <td>Aksesoris</td>
            <td>Rp 80.000,00</td>
            <td>Slingbag Casual terbaru 2023</td>
            <td>177</td>
            <td>0,5 Kg</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
        <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td><img src="data:image/jpeg;base64,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" width="85" alt="Gambar Berita 1"></td>
            <td>Jam Tangan Digital</td>
            <td>Aksesoris</td>
            <td>Rp 237.000,00</td>
            <td>Jam Tangan Digital Waterproof</td>
            <td>568</td>
            <td>0,4 Kg</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
        <tr>
        <td><input type="checkbox"></td> <!-- Kolom checkbox -->
            <td><img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//114/MTA-69528399/bellrick_celana_panjang_chino_-_celana_panjang_chino_pria_-_celana_panjang_chino_original_-_celana_panjang_pria_-_celana_panjang_original_distro_bellrick_full01_f0664e06.jpg" width="85" alt="Gambar Berita 1"></td>
            <td>Celana Chino</td>
            <td>Bawahan</td>
            <td>Rp 120.000,00</td>
            <td>Celana Chino Pria</td>
            <td>757</td>
            <td>0,5 Kg</td>
            <td><button class="edit-button">Edit</button></td>
            <td><button class="hapus-button">Hapus</button></td>
        </tr>
    </table>
    </center>
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
