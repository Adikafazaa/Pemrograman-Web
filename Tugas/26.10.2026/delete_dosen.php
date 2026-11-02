<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

$id_dosen = (int)($_GET['id_dosen'] ?? 0);
if ($id_dosen > 0) {
    mysqli_query($koneksi, "DELETE FROM dosen_wali WHERE id_dosen = $id_dosen");
}

header("location:index.php");
exit;
?>
