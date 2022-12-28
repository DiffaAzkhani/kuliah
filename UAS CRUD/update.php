<?php
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS CRUD</title>
</head>

<body>
    <!-- Awal Soal no 1 -->

    <!-- Buat Database XXX dengan nama barang dengan struktur : -->
    <!-- kode_brg (char 5) (Primary Key)-->
    <!-- nama_brg (varchar 30) -->
    <!-- harga_satuan (double)-->
    <!-- stok (int 5)-->

    <!-- Akhir Soal no 1 -->

    <!-- HEADER NAMA DAN NIM -->
    <h1 style="text-align:center">Diffa Azkhani</h1>
    <h1 style="text-align:center">(A12.2020.06496)</h1>

    <!-- Awal Soal no 2 -->

    <!-- PROGRAM MENAMPILKAN DATA DI BROWSER -->
    <h3>Data Barang</h3>
    <table border="2">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
            <th colspan="2">Aksi</th>
        </tr>
        <tr>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($ambildata = mysqli_fetch_assoc($sql)) {
                echo "
                <tr>
                    <td>$ambildata[kode_brg]</td>
                    <td>$ambildata[nama_brg]</td>
                    <td>$ambildata[harga_satuan]</td>
                    <td>$ambildata[stok]</td>
                    <td><a href='hapus.php?hpsdata=$ambildata[kode_brg]'>Hapus</a></td>
                    <td><a href='edit.php?edtdata=$ambildata[kode_brg]'>Edit</a></td>
                </tr>
                ";
            }
            ?>
        </tr>
    </table>
    <!-- Akhir Soal no 2 -->
</body>

</html>