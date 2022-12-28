<?php
require "koneksi.php";

// PROGRAM HAPUS DATA
if (isset($_GET['hpsdata'])) {
    mysqli_query($koneksi, "DELETE FROM barang WHERE kode_brg = '$_GET[hpsdata]'");
    header('location: update.php');
}
