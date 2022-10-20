<?php
// membuat koneksi server ke database
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_praktikum2";

// menghubungkan koneksi
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
