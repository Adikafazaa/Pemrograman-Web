<?php
include 'database.php';

if (isset($_POST['simpan'])) {
    $nip   = $_POST['nip'];
    $nama  = $_POST['nama'];
    $email = $_POST['email'];
    $ttl   = $_POST['ttl'];

    mysqli_query($koneksi, "INSERT INTO dosen_wali VALUES(NULL, '$nip', '$nama', '$email', '$ttl')");

    header("location:index.php");
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
    <h1>Tambah Dosen Wali</h1>
    <form method="post" action="">
        <p>
            <label>NIP</label><br>
            <input type="text" name="nip" required>
        </p>
        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>Email</label><br>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Tempat, Tanggal Lahir</label><br>
            <input type="text" name="ttl" required>
        </p>
        <p>
            <a href="index.php">Kembali</a>
            <button type="submit" name="simpan">Simpan</button>
        </p>
    </form>
</body>
</html>
