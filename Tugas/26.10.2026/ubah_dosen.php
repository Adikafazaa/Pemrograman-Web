<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_dosen = (int)($_POST['id_dosen'] ?? 0);
    $nip      = trim($_POST['nip'] ?? '');
    $nama     = trim($_POST['nama'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $ttl      = trim($_POST['ttl'] ?? '');

    if ($id_dosen > 0) {
        $stmt = mysqli_prepare($koneksi, "UPDATE dosen_wali SET nip = ?, nama = ?, email = ?, ttl = ? WHERE id_dosen = ?");
        mysqli_stmt_bind_param($stmt, "ssssi", $nip, $nama, $email, $ttl, $id_dosen);
        mysqli_stmt_execute($stmt);
    }

    header("location:index.php");
    exit;
}

$id_dosen = (int)($_GET['id_dosen'] ?? $_GET['id'] ?? 0);
$stmt = mysqli_prepare($koneksi, "SELECT * FROM dosen_wali WHERE id_dosen = ?");
mysqli_stmt_bind_param($stmt, "i", $id_dosen);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$d = mysqli_fetch_array($res);

if (!$d) {
    header("location:index.php");
    exit;
}
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
    <div class="container">
        <h1>Ubah Data Dosen Wali</h1>
        <div class="card-form">
            <form method="post" action="">
                <input type="hidden" name="id_dosen" value="<?php echo (int)$d['id_dosen']; ?>">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" value="<?php echo htmlspecialchars($d['nip']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" name="nama" value="<?php echo htmlspecialchars($d['nama']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($d['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Tempat, Tanggal Lahir</label>
                    <input type="text" name="ttl" value="<?php echo htmlspecialchars($d['ttl']); ?>" required>
                </div>
                <div class="form-actions">
                    <a href="index.php" class="btn-secondary">Kembali</a>
                    <button type="submit" class="btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
