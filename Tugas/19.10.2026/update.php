<?php

include 'koneksi.php';

$id         = $_POST['id'];
$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE catatan_keuangan SET tanggal = '$tanggal', jenis = '$jenis', kategori = '$kategori', nominal = '$nominal', keterangan = '$keterangan' WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupdate: " . $koneksi->error;
}

?>
