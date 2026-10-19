<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

// menginput data ke database
mysqli_query($koneksi, "insert into catatan_keuangan values('','$tanggal','$jenis','$kategori','$nominal','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
