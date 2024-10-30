<?php

require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$nim = $_POST["nim"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Enkripsi password

$query_sql = "INSERT INTO tbl_users (fullname, username, nim, email, password) 
            VALUES ('$fullname', '$username', '$nim', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: admin.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
