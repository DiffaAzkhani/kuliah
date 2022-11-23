<?php
// memanggil file koneksi.php
include "koneksi.php";

// PROGRAM SIMPAN DATA
// megecek variabel simpan apakah ada atau tidak
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO mahasiswa SET
nim_mahasiswa = '$_POST[nim]',
nama_mahasiswa = '$_POST[nama]'");

    header('Location: index.php');
}

// PROGRAM HAPUS DATA
if (isset($_GET['hpsdata'])) {
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim_mahasiswa = '$_GET[hpsdata]'");

    echo "<script>
                alert('Data berhasil di hapus, Klik OK untuk kembali ke halaman utama');
                document.location='index.php';
        </script>";
    // header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align:center">Program CRUD</h1>
    <h2 style="text-align:center">Diffa Azkhani (A12.2020.06496)</h2>
    <h3>Form Input Data</h3>

    <!-- Awal Form input Data -->
    <form action="" method="POST">
        <table>
            <!-- Awal Form NIM -->
            <tr>
                <td><label for="">NIM </label></td>
                <td><input type="text" name="nim" </td>
            </tr>
            <!-- Akhir Form NIM -->

            <!-- Awal Form nama -->
            <tr>
                <td><label for="">Nama </label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <!-- Akhir Form nama -->

            <!-- Awal Tombol Masukkan Data -->
            <tr>
                <td><input type="submit" value="Masukkan Data" name="simpan"></td>
            </tr>
            <!-- Akhir Tombol Masukkan Data -->
        </table>
    </form>
    <!-- Akhir Form input Data -->

    <!-- Awal Tabel Data Mahasiswa -->
    <h3>Tabel Data Mahasiswa</h3>
    <table border="2">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th colspan="2">Aksi</th>
        </tr>

        <!-- Program Tampilkan data yang sudah diinputkan di database db_crud -->
        <?php
        // Memanggil File koneksi.php
        include "koneksi.php";

        // PROGRAM TAMPILKAN DATA
        $no = 1;
        $ambilData = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($tampil = mysqli_fetch_array($ambilData)) {
            echo "
            
            <tr>
                <td>$no</td>
                <td>$tampil[nim_mahasiswa]</td>
                <td>$tampil[nama_mahasiswa]</td>
                <td><a href='?hpsdata=$tampil[nim_mahasiswa]'>Hapus</a></td>
                <td><a href='edit-data.php?edtdata=$tampil[nim_mahasiswa]'>Edit</a></td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <!-- Akhir Tabel Data Mahasiswa -->
</body>

</html>