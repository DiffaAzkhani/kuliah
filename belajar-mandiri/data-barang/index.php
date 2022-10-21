<?php
// memanggil file koneksi.php
include "koneksi.php";

// program simpan data
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO barang SET
kode_barang = '$_POST[kode]',
nama_barang = '$_POST[nama]',
jumlah_barang = '$_POST[jumlah]',
harga_barang = '$_POST[harga]'");

    echo "Data Berhasil Disimpan";

    // clear post
    header('Location: index.php');
}

// program delete data
if (isset($_GET['hapus'])) {
    mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang='$_GET[hapus]'");
    echo "Data berhasil terhapus";

    header('location: index.php');
}

// program edit data
$ambildata = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang = '$_GET[edit]'");
$data = mysqli_fetch_array($ambildata);
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "UPDATE barang SET
    kode_nama = $_POST[nama],
    kode_jumlah = $_POST[jumlah],
    kode_harga = $_POST[harga] WHERE kode_barang = '$_GET[edit]'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<body>
    <h3>Program Input Data Barang</h3>
    <!-- awal form input data barang -->
    <div>
        <form action="" method="post">
            <label for="">Kode Barang</label>
            <input type="text" name="kode" action="" required><br><br>

            <label for="">Nama</label>
            <input type="text" name="nama" action="" value="<?php echo $data['kode_nama'] ?>" required><br><br>

            <label for="">Jumlah</label>
            <input type="text" name="jumlah" action="" value="<?php echo $data['jumlah'] ?>" required><br><br>


            <label for="">Harga</label>
            <input type="text" name="harga" action="" value="<?php echo $data['harga'] ?>" required><br><br>

            <input type="submit" value="Simpan Data" name="simpan">
        </form>
    </div>
    <!-- akhir form input data barang -->

    <!-- awal tampil table data barang -->
    <div>
        <h3>Data Barang Tersedia</h3>
        <table border="2">
            <!-- table row -->
            <tr>
                <!-- table header -->
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Barang</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php

            $no = 1;
            // program menampilkan data pada tabel
            $ambildata = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
                
                <tr>
                    <td>$no</td>
                    <td>$tampil[kode_barang]</td>
                    <td>$tampil[nama_barang]</td>
                    <td>$tampil[jumlah_barang]</td>
                    <td>$tampil[harga_barang]</td>
                    <td><a href='?hapus=$tampil[kode_barang]'> Hapus </a> </td>
                    <td><a href='?edit=$tampil[kode_barang]'>Edit</a></td>
                </tr>";
                $no++;
            }

            ?>
        </table>
    </div>
    <?php

    ?>
    <!-- akhir tampil table data barang -->
</body>

</html>