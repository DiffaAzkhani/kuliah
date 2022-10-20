<?php
require 'user-query.php';
// memanggil session
session_start();

// jika ada session dengan key "username" 
if (isset($_SESSION['username'])) {
    $user = getUserByUsername($_SESSION['username']);
    // mengambil status user
    $status = $user['status'];
    // mengecek status user apakah dosen, admin, atau mahasiswa
    switch ($status) {
        case "dosen":
            header("Location: home-dosen.php");
            break;
        case "admin":
            header("Location: home-admin.php");
            break;
        default:
            header("Location: home-mhs.php");
            break;
    };
}

// deklarasi variabel error nilai default "" 
$error = '';

// memberikan pemberitahuan bahwa username dan password salah
if (isset($_GET['alert'])) {
    $error = 'Username dan password Anda salah';
}

// mengecek variabel global POST apakah terdapat key "username"
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan username dan password ada atau tidak pada database
    if (checkUserAuth($username, $password)) {
        // membuat session dengan key "username"
        $_SESSION['username'] = $username;
        $user = getUserByUsername($username);
        $status = $user['status'];
        switch ($status) {
            case "dosen":
                header("Location: home-dosen.php");
                break;
            case "admin":
                header("Location: home-admin.php");
                break;
            default:
                header("Location: home-mhs.php");
                break;
        };
    } else {
        header("Location: index.php?alert=1");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <!-- memanggil bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <!-- awal Card Login -->
    <div class="container">
        <h1 class="text text-center">Tugas Program Login</h1>
        <h2 class="text text-center">XXXXX XXXXX - A12.2020.XXXXX</h2>
        <div class="card">
            <h2 class="card-header text-center">Login</h2>
            <div class="card-body">
                <!-- Pemberitahuan jiak terjadi error -->
                <?php if ($error != "") { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $error ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <!-- Form Login -->
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" type="text" class="form-control" id="username" placeholder="Masukkan Username anda disini" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan Password anda disini">
                        </div>
                    </div>
                    <!-- tombol login -->
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir card login -->

    <!-- memanggil bootstrap javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>