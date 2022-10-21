<?php
require "koneksi.php";
// data mahasiswa
$nim = "";
$nama = "";
$alamat = "";
$fakultas = "";
$sukses = "";
$error = "";

// create data
if (isset($_POST['submit'])) {
    // digunakan untul menangkap (name = "tnim") data nim yang diinputkan
    $nim = $_POST['tnim'];
    $nama = $_POST['tnama'];
    $alamat = $_POST['talamat'];
    $fakultas = $_POST['tfakultas'];

    if ($nim && $nama && $alamat && $fakultas) {
        $sql1 = "INSERT INTO mahasiswa (nim, nama, alamat, fakultas) VALUES ('$nim','$nama','$alamat','$fakultas')";
        $q1 = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "Data Berhasil Disimpan";
        } else {
            $error = "Data Gagal Disimpan";
        }
    } else {
        $error = "";
    }
}
