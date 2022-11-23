<?php
$server = "Localhost";
$user = "root";
$pass = "";
$database = "db_crud";
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
