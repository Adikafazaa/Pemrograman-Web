<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_mahasiswa = (int)($_POST['id_mahasiswa'] ?? 0);
    $nrp          = trim($_POST['nrp'] ?? '');
    $nama         = trim($_POST['nama'] ?? '');
    $email        = trim($_POST['email'] ?? '');
    $ttl          = trim($_POST['ttl'] ?? '');
    $id_dosen     = (int)($_POST['id_dosen'] ?? 0);

    if ($id_mahasiswa > 0) {
        if ($id_dosen > 0) {
            $stmt = mysqli_prepare($koneksi, "UPDATE mahasiswa SET nrp = ?, nama = ?, email = ?, ttl = ?, id_dosen = ? WHERE id_mahasiswa = ?");
            mysqli_stmt_bind_param($stmt, "ssssii", $nrp, $nama, $email, $ttl, $id_dosen, $id_mahasiswa);
        } else {
            $stmt = mysqli_prepare($koneksi, "UPDATE mahasiswa SET nrp = ?, nama = ?, email = ?, ttl = ?, id_dosen = NULL WHERE id_mahasiswa = ?");
            mysqli_stmt_bind_param($stmt, "ssssi", $nrp, $nama, $email, $ttl, $id_mahasiswa);
        }
        mysqli_stmt_execute($stmt);
    }

    header("location:index.php");
    exit;
}

$id_mahasiswa = (int)($_GET['id_mahasiswa'] ?? $_GET['id'] ?? 0);
$stmt = mysqli_prepare($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa = ?");
mysqli_stmt_bind_param($stmt, "i", $id_mahasiswa);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$mhs = mysqli_fetch_array($res);

if (!$mhs) {
    header("location:index.php");
    exit;
}

$dosen = mysqli_query($koneksi, "SELECT id_dosen, nip, nama FROM dosen_wali ORDER BY nama ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ubah Data Mahasiswa</h1>
        <div class="card-form">
            <form method="post" action="">
                <input type="hidden" name="id_mahasiswa" value="<?php echo (int)$mhs['id_mahasiswa']; ?>">
                <div class="form-group">
                    <label>NRP</label>
                    <input type="text" name="nrp" value="<?php echo htmlspecialchars($mhs['nrp']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" value="<?php echo htmlspecialchars($mhs['nama']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($mhs['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Tempat, Tanggal Lahir</label>
                    <input type="text" name="ttl" value="<?php echo htmlspecialchars($mhs['ttl']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Dosen Wali</label>
                    <select name="id_dosen" required>
                        <option value="">-- Pilih Dosen Wali --</option>
                        <?php while ($d = mysqli_fetch_array($dosen)) { ?>
                            <option value="<?php echo (int)$d['id_dosen']; ?>" <?php if ($d['id_dosen'] == $mhs['id_dosen']) echo 'selected'; ?>>
                                <?php echo htmlspecialchars($d['nip'] . " - " . $d['nama']); ?>
                            </option>
                        <?php } ?>
                    </select>
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
