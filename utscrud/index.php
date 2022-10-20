<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO mobil SET
kode = '$_POST[kode_mobil]',
nama = '$_POST[nama_mobil]',
harga = '$_POST[harga_mobil]'");

    echo "Data Berhasi Tersimpan";
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mobil</title>
</head>

<body>
    <!-- Awal Form input data -->
    <div>
        <h2>Form Input Data Mobil</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Kode</td>
                    <td><input type="text" name="kode_mobil" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_mobil" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="Harga_mobil" required></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Simpan Data" name="simpan">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- Akhir Form input data -->

    <!-- Awal Form input data -->
    <div>
        <h2>Table Data Mobil</h2>
        <table border="2">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            $no = 1;
            $ambil = mysqli_query($koneksi, "SELECT * FROM mobil");
            while ($tampil = mysqli_fetch_array($ambil)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$tampil[kode]</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[harga]</td>
                    <td><a href='index.php?edit='>Edit</a></td>
                    <td><a href='index.php?hapus='>Hapus</a></td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>
    <!-- Akhir Form input data -->
</body>

</html>