<?php
// untuk memulai session
session_start();
// untuk menghapus session yang ada di browser / client
session_unset();
// untuk menghapus session yang ada di file session di server php
session_destroy();

// pindah ke halaman index.php
header("Location: index.php");
