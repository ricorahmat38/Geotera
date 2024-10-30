<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];


$query_sql = "SELECT * FROM tbl_users WHERE email = '$email'";
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        echo 'success';
    } else {
        // Jika password salah
        echo 'Password yang Anda masukkan salah! Silakan coba lagi.';
    }
} else {
    // Jika email tidak ditemukan
    echo 'Email tidak ditemukan atau akun belum terdaftar! Silakan coba lagi.';
 }






//$pass_hash = password_hash($password, PASSWORD_DEFAULT);
//echo "pass hash = ".$pass_hash;