<?php
// memanggil file user-query.php
require 'user-query.php';
// memulai session
session_start();

$user = getUserByUsername($_SESSION['username']);
// jika session dengan key "username" tidak ada atau user status tidak sama dengan admin
// maka akan pindah ke halaman index.php
if (isset($_SESSION['username']) == false || $user['status'] != 'admin') {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5 align-self-center">Selamat Datang di home Admin</h1>
        <!-- tombol Logout -->
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>

<!-- memanggil bootstrap javascript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>