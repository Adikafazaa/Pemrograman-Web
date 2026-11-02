<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip   = trim($_POST['nip'] ?? '');
    $nama  = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $ttl   = trim($_POST['ttl'] ?? '');

    $stmt = mysqli_prepare($koneksi, "INSERT INTO dosen_wali (nip, nama, email, ttl) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $nip, $nama, $email, $ttl);
    mysqli_stmt_execute($stmt);

    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen Wali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Dosen Wali</h1>
        <div class="card-form">
            <form method="post" action="">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" placeholder="Contoh: DW-15-04" required>
                </div>
                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" name="nama" placeholder="Masukkan nama dosen" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="dosen@ngampus.ac.id" required>
                </div>
                <div class="form-group">
                    <label>Tempat, Tanggal Lahir</label>
                    <input type="text" name="ttl" placeholder="Contoh: Jakarta, 01-01-1975" required>
                </div>
                <div class="form-actions">
                    <a href="index.php" class="btn-secondary">Kembali</a>
                    <button type="submit" class="btn-primary">Simpan Dosen</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
