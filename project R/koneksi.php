<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "portofolio";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die ("GAGAL");
} else {
    echo "BERHASIL";
}

?>