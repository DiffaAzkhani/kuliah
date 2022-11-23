<?php
require "koneksi.php";

// Program Simpan Data
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO mahasiswa SET
    nim_mahasiswa = '$_POST[nim]',
    nama_mahasiswa = '$_POST[nama]'");

    header('location: index.php');
}

// Program Hapus Data
if (isset($_GET['hpsdata'])) {
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim_mahasiswa = '$_GET[hpsdata]'");

    header('location: index.php');
}

// Program Edit Data
if (isset($_POST['simpan-edit'])) {
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa = '$_POST[nama]' WHERE nim_mahasiswa = '$_GET[edtdata]'");

    header('location: index.php');
}

if (isset($_GET['edtdata'])) {
    $sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim_mahasiswa = '$_GET[edtdata]'");
    $data = mysqli_fetch_array($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program CRUD Latihan</title>
</head>

<body>
    <h1 style="text-align:center">Program CRUD</h1>
    <h2 style="text-align:center">Diffa Azkhani (A12.2020.06496)</h2>
    <h3>Form Mahasiswa</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="">NIM</label></td>
                <td><input type="text" name="nim" value="<?php echo @$data['nim_mahasiswa']; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama" value="<?php echo @$data['nama_mahasiswa']; ?>"></td>
            </tr>
            <tr>
                <?php
                if (isset($_GET['edtdata'])) {
                    echo '<td><input type="submit" name="simpan-edit" value="Simpan Edit Data"></td>';
                    echo '<td><input type="submit" name="simpan-edit" value="Batalkan"></td>';
                } else {
                    echo '<td><input type="submit" name="simpan" value="Masukkan Data"></td>';
                }
                ?>
            </tr>
        </table>
    </form>

    <h3>Data Mahasiswa</h3>
    <table border="2">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        // Program Tampil Data
        $no = 1;
        $ambilData = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($tampil = mysqli_fetch_array($ambilData)) {
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[nim_mahasiswa]</td>
                <td>$tampil[nama_mahasiswa]</td>
                <td><a href='?hpsdata=$tampil[nim_mahasiswa]'>Hapus</a></td>
                <td><a href='?edtdata=$tampil[nim_mahasiswa]'>Edit</a></td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>
