<?php
include 'database.php';

if (isset($_POST['update'])) {
    $id_dosen = $_POST['id_dosen'];
    $nip      = $_POST['nip'];
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $ttl      = $_POST['ttl'];

    mysqli_query($koneksi, "UPDATE dosen_wali SET nip='$nip', nama='$nama', email='$email', ttl='$ttl' WHERE id_dosen='$id_dosen'");

    header("location:index.php");
    exit;
}

$id_dosen = $_GET['id_dosen'] ?? $_GET['id'] ?? 0;
$data_dosen = mysqli_query($koneksi, "SELECT * FROM dosen_wali WHERE id_dosen='$id_dosen'");
$d = mysqli_fetch_array($data_dosen);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Dosen Wali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ubah Data Dosen Wali</h1>
    <form method="post" action="">
        <input type="hidden" name="id_dosen" value="<?php echo $d['id_dosen']; ?>">
        <p>
            <label>NIP</label><br>
            <input type="text" name="nip" value="<?php echo $d['nip']; ?>" required>
        </p>
        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
        </p>
        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="<?php echo $d['email']; ?>" required>
        </p>
        <p>
            <label>Tempat, Tanggal Lahir</label><br>
            <input type="text" name="ttl" value="<?php echo $d['ttl']; ?>" required>
        </p>
        <p>
            <a href="index.php">Kembali</a>
            <button type="submit" name="update">Simpan Perubahan</button>
        </p>
    </form>
</body>
</html>
