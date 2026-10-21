<?php 

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from catatan_keuangan where id='$id'");

header("location:index.php");

?>
