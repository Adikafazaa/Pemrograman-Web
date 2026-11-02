<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

$id_mahasiswa = (int)($_GET['id_mahasiswa'] ?? 0);
if ($id_mahasiswa > 0) {
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa");
}

header("location:index.php");
exit;
?>
