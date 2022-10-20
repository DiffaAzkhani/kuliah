<?php
require "koneksi.php";

// Fungsi untuk mengecek username dan password
function checkUserAuth($username, $password): bool
{
    // memanggil variable koneksi untuk digunakan di dalam scope local
    global $koneksi;

    // enkripsi password
    $passwordmd5 = md5($password);
    // melakukan query untuk mengambil username dan password yang sudah dienkripsi pada table user
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$passwordmd5'";
    // melakukan query untuk mengkoneksikan variable sql
    mysqli_query($koneksi, $sql);
    return mysqli_affected_rows($koneksi) > 0;
}

// fungsi untuk mengambil data username dari table user
function getUserByUsername($username)
{
    global $koneksi;

    // melakukan query untuk mengambil data username pada table user
    $response = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");

    // mengubah dari database ke dalam array ($resultArray)
    $resultArray = [];
    if (mysqli_num_rows($response) > 0) {
        while ($row = mysqli_fetch_assoc($response)) {
            $resultArray = [
                'iduser' => $row['iduser'],
                'username' => $row['username'],
                'password' => $row['password'],
                'status' => $row['status'],
            ];
        }
        return $resultArray;
    } else {
        return $resultArray;
    }
}
