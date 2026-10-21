<?php 

include 'koneksi.php';

$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "insert into catatan_keuangan values('','$tanggal','$jenis','$kategori','$nominal','$keterangan')");

header("location:index.php");

?>
