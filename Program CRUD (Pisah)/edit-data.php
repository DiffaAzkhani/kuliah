<?php
include "koneksi.php";

// PROGRAM SIMPAN EDIT DATA
if (isset($_POST['simpan-edit'])) {
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa = '$_POST[nama]', ipk_mahasiswa = '$_POST[ipk]' WHERE nim_mahasiswa = '$_GET[edtdata]'");

    header('location: index.php');
}

// PROGRAM UNTUK MENAMPILKAN DATA YANG AKAN DI EDIT DI FORM
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
    <title>Edit Data</title>
</head>

<body>
    <!-- AWAL PROGRAM FORM INPUT DATA SAAT MELAKUKAN EDIT-->
    <h1 style="text-align:center">PROGRAM CRUD</h1>
    <h2 style="text-align:center">Diffa Azkhani (A12.2020.06496)</h2>
    <h3>FORM INPUT DATA</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="">NIM</label></td>
                <td><input type="text" name="nim" value="<?php echo @$data['nim_mahasiswa'] ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama" value="<?php echo @$data['nama_mahasiswa'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">IPK</label></td>
                <td><input type="text" name="ipk" value="<?php echo @$data['ipk_mahasiswa'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan Perubahan" name="simpan-edit"></td>
                <td><input type="submit" value="Batal" name="simpan-edit"></td>
            </tr>
        </table>
    </form>
    <!-- AKHIR PROGRAM FORM INPUT DATA SAAT MELAKUKAN EDIT-->
</body>

</html>