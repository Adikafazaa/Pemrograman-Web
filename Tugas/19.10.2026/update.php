<?php

// include koneksi database
include('koneksi.php');

// get data dari form
$id         = $_POST['id'];
$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

// query update data ke dalam database berdasarkan ID
$query = "UPDATE catatan_keuangan SET tanggal = '$tanggal', jenis = '$jenis', kategori = '$kategori', nominal = '$nominal', keterangan = '$keterangan' WHERE id = '$id'";

// kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    // redirect ke halaman index.php 
    header("location: index.php");
} else {
    // pesan error gagal update data
    echo "Data Gagal Diupdate: " . $koneksi->error;
}

?>