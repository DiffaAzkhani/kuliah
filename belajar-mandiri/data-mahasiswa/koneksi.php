<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_mahasiswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$koneksi) {
    die("Tidak bisa koneksi ke database");
}
