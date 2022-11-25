<?php
include "koneksi.php";

// PROGRAM SIMPAN DATA
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO mahasiswa SET
    nim_mahasiswa = '$_POST[nim]',
    nama_mahasiswa = '$_POST[nama]',
    ipk_mahasiswa = '$_POST[ipk]'");

    header('location: index.php');
}

// PROGRAM HAPUS DATA
if (isset($_GET['hpsdata'])) {
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim_mahasiswa = '$_GET[hpsdata]'");

    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM CRUD</title>
</head>

<body>
    <h1 style="text-align:center">PROGRAM CRUD</h1>
    <h2 style="text-align:center">Diffa Azkhani (A12.2020.06496)</h2>

    <!-- AWAL PROGRAM FORM INPUT DATA -->
    <h3>FORM INPUT DATA</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="">NIM</label></td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="">IPK</label></td>
                <td><input type="text" name="ipk"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan Data" name="simpan"></td>
            </tr>
        </table>
    </form>
    <!-- AKHIR PROGRAM FORM INPUT DATA -->

    <!-- AWAL PROGRAM TAMPIL DATA -->
    <h3>Tampil Data</h3>
    <table border="2">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
            <th colspan="2">Aksi</th>
        </tr>
        <tr>
            <?php
            $no = 1;
            $ambilData = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            while ($tampil = mysqli_fetch_array($ambilData)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$tampil[nim_mahasiswa]</td>
                    <td>$tampil[nama_mahasiswa]</td>
                    <td>$tampil[ipk_mahasiswa]</td>
                    <td><a href='?hpsdata=$tampil[nim_mahasiswa]'>Hapus</a></td>
                    <td><a href='edit-data.php?edtdata=$tampil[nim_mahasiswa]'>Edit</a></td>
                </tr>";
                $no++;
            }
            ?>
        </tr>
    </table>
    <!-- AKHIR PROGRAM TAMPIL DATA -->
    <h3></h3>
</body>

</html>