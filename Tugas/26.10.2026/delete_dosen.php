<?php
include 'database.php';

$id_dosen = $_GET['id_dosen'];

mysqli_query($koneksi, "DELETE FROM dosen_wali WHERE id_dosen='$id_dosen'");

header("location:index.php");
?>
