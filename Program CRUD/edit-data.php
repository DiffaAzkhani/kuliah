<?php
// Memanggil file koneksi.php
include "koneksi.php";

// Mengecek apakah terbaca variabel edtdata
// jika iya maka ambil data dari tabel mahasiswa yang dimana nim nya sesuai dari variabel edtdata yang di klik edit tadi (nim_mahasiswa = '$_GET[edtdata]');
if (isset($_GET['edtdata'])) {
    $sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim_mahasiswa = '$_GET[edtdata]'");
    $data = mysqli_fetch_array($sql);
}

// PROGRAM EDIT DATA
if (isset($_POST['simpan-edit'])) {
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa = '$_POST[nama]' WHERE nim_mahasiswa = '$_GET[edtdata]'");

    // menampilkan tampilan pemberitahuan bahwa data sudah berhasil di edit
    echo "<script>
        		    alert('Data berhasil di edit, Klik OK untuk kembali ke halaman utama');
                    document.location='index.php';
        	</script>";
} else if (isset($_POST['simpan-edit-batal'])) {
    header('Location: index.php');
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
    <h1 style="text-align:center">Program CRUD (Edit Data)</h1>
    <h1 style="text-align:center">Diffa Azkhani (A12.2020.06496)</h1>
    <h3>Form Edit Data</h3>

    <!-- Awal Form input Data -->
    <form action="" method="POST">
        <table>
            <!-- Awal Form NIM -->
            <tr>
                <td><label for="">NIM </label></td>
                <td><input type="text" name="nim" value="<?php echo @$data['nim_mahasiswa']; ?>" </td>
            </tr>
            <!-- Akhir Form NIM -->

            <!-- Awal Form nama -->
            <tr>
                <td><label for="">Nama </label></td>
                <td><input type="text" name="nama" value="<?php echo @$data['nama_mahasiswa'] ?>"></td>
            </tr>
            <!-- Akhir Form nama -->

            <!-- Awal Tombol Masukkan Data -->
            <tr>
                <!-- button simpan edit data -->
                <td><input type="submit" value="Simpan Perubahan" name="simpan-edit"></td>
                <!-- button edit data jika tidak jadi -->
                <td><input type="submit" value="Batal Edit Data" name="simpan-edit-batal"></td>
            </tr>
            <!-- Akhir Tombol Masukkan Data -->
        </table>
    </form>
    <!-- Akhir Form input Data -->
</body>

</html>