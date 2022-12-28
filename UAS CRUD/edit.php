<?php
require "koneksi.php";

// Awal Soal no 3

// PROGRAM UNTUK MELAKUKAN UPDATE DATA BARANG
if (isset($_POST['simpan-edit'])) {
    mysqli_query($koneksi, "UPDATE barang SET nama_brg = '$_POST[namabarang]', harga_satuan = '$_POST[hargasatuan]', stok = '$_POST[stokbarang]' WHERE kode_brg = '$_GET[edtdata]'");

    header('location: update.php');
}

// PROGRAM UNTUK MENAMPILKAN DATA LANGSUNG DI FORM EDIT
if (isset($_GET['edtdata'])) {
    $sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_brg = '$_GET[edtdata]'");
    $data = mysqli_fetch_assoc($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Edit Data</title>
</head>

<body>
    <h1 style="text-align:center">Diffa Azkhani</h1>
    <h1 style="text-align:center">(A12.2020.06496)</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="">Kode Barang</label></td>
                <td><input type="text" name="kodebarang" value=" <?php echo $data['kode_brg'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Nama Barang</label></td>
                <td><input type="text" name="namabarang" value=" <?php echo $data['nama_brg'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Harga Satuan</label></td>
                <td><input type="text" name="hargasatuan" value=" <?php echo $data['harga_satuan'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Stok</label></td>
                <td><input type="text" name="stokbarang" value=" <?php echo $data['stok'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan-edit" value="Simpan Perubahan"></td>
            </tr>
        </table>
    </form>

    <!-- Akhir Soal no 3 -->
</body>

</html>