<?php 
$koneksi = @mysqli_connect("127.0.0.1", "root", "", "db_latihan_pemweb");

if (!$koneksi) {
    $koneksi = mysqli_connect("localhost", "root", "", "db_latihan_pemweb");
}

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>