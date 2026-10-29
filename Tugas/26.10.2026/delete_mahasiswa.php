<?php
include 'database.php';

$id_mahasiswa = $_GET['id_mahasiswa'];

mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");

header("location:index.php");
?>
