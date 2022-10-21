<?php
require "koneksi.php";
require "query.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <h1 style="text-align:center">Program Input Data Mahasiswa</h1>
    <h3 style="text-align:center">Diffa Azkhani</h3>
    <!-- awal card form data mahasiswa -->
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="tnim" placeholder="Masukkan NIM anda" value="<?php echo "$nim" ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="tnama" placeholder="Masukkan Nama anda" value="<?php echo "$nama" ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="talamat" placeholder="Masukkan Alamat anda" value="<?php echo "$alamat" ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="fakultas" name="tfakultas">
                                <option value="">- Pilih Fakultas -</option>
                                <option value="fik">Fakultas Ilmu Komputer <?php if ($fakultas = "fik") echo "Selected"; ?></option>
                                <option value="fk">Fakultas Kedokteran <?php if ($fakultas = "fk") echo "Selected"; ?></option>
                                <option value="ft">Fakultas Teknik <?php if ($fakultas = "ft") echo "Selected"; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input class="btn btn-primary" type="submit" name="submit" value="Simpan Data">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir card form data mahasiswa -->

    <!-- awal card tampil data mahasiswa -->
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-success text-white">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Fakultas</th>
                            <th>Settings</th>
                        </tr>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql2 = "SELECT * FROM mahasiswa ORDER by id DESC";
                            $q2 = mysqli_connect($koneksi, $sql2);

                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id = $r2['id'];
                                $nim = $r2['nim'];
                                $nama = $r2['nama'];
                                $alamat = $r2['alamat'];
                                $fakultas = $r2['fakultas'];
                            }

                            ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                            </tr>
                            <?php

                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir card tampil data mahasiswa -->
</body>

</html>