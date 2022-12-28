<?php
// FILE KONEKSI KE DATABASE
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_diffa"; // iki diganti sesuai karo database
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
