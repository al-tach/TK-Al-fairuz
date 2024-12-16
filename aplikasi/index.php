<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Informasi TK Al - Fairuz</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<?php
// Mulai session
session_start();

// Include file koneksi ke database
include "koneksi.php";

// Jika tombol login diklik
if(isset($_POST['login'])){
  // Ambil data dari form login
  $username = $_POST['username'];
  $password = md5($_POST['password']); // password dienkripsi menggunakan md5()

  // Query ke database untuk mencari user dengan username dan password yang cocok
  $query = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  // Jika ditemukan user dengan username dan password yang cocok
  if(mysqli_num_rows($result) > 0){
    // Ambil data user dari hasil query
    $data = mysqli_fetch_assoc($result);

    // Set session untuk user yang sedang login
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['username'] = $data['username'];

    // Redirect ke halaman utama
    header("Location: asset/beranda.php");
    exit;
  } else {
    // Jika tidak ditemukan user dengan username dan password yang cocok
    echo "Username atau password salah!";
  }
}
?>

    <div class="kotak-login">
        <h1>Login</h1>
        Login Ini Khusus Untuk Admin
        <form action="" method="post" >
        <div class="label">
            Username
        </div>
        <input type="text" name="username" id="username" placeholder="Username">
        <div class="label">
            Password
        </div>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" name="login" value="Masuk">
        </form>
    </div>
</body>

</html>