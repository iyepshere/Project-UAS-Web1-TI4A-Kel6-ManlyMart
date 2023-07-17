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
    <title>Dashboard Manajemen Karyawan</title>
    <link rel="stylesheet" type="text/css" href="style-dashboard.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="list.php">Daftar Karyawan</a></li>
                <li><a href="create.php">Tambah Karyawan</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
    <h2>Selamat datang di Manajemen Karyawan, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Ini adalah halaman beranda.</p>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>

