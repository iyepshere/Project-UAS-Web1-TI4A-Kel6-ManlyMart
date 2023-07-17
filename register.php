<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($koneksi, $sql)) {
        $message = "Registrasi berhasil. Silakan <a href='index-login.php'>login</a>.";
        $messageClass = "success-message";
    } else {
        $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        $messageClass = "error-message";
    }
}
?>

<style>
    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 5px;
    }

    .error-message {
        background-color: #f8d7da;
        color: #721c24;
        padding: 10px;
        border-radius: 5px;
    }
</style>

<!-- ... Kode HTML lainnya ... -->

<div class="<?php echo $messageClass; ?>"><?php echo $message; ?></div>
