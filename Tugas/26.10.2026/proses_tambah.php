<?php
include 'database.php';

$nrp      = $_POST['nrp'];
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$ttl      = $_POST['ttl'];
$id_dosen = $_POST['id_dosen'];

if ($id_dosen == "") {
    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES(NULL, '$nrp', '$nama', '$email', '$ttl', NULL)");
} else {
    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES(NULL, '$nrp', '$nama', '$email', '$ttl', '$id_dosen')");
}

header("location:index.php");
?>
