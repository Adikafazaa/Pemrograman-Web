<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nrp      = trim($_POST['nrp'] ?? '');
    $nama     = trim($_POST['nama'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $ttl      = trim($_POST['ttl'] ?? '');
    $id_dosen = (int)($_POST['id_dosen'] ?? 0);

    if ($id_dosen > 0) {
        $stmt = mysqli_prepare($koneksi, "INSERT INTO mahasiswa (nrp, nama, email, ttl, id_dosen) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssi", $nrp, $nama, $email, $ttl, $id_dosen);
    } else {
        $stmt = mysqli_prepare($koneksi, "INSERT INTO mahasiswa (nrp, nama, email, ttl, id_dosen) VALUES (?, ?, ?, ?, NULL)");
        mysqli_stmt_bind_param($stmt, "ssss", $nrp, $nama, $email, $ttl);
    }
    mysqli_stmt_execute($stmt);

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
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>
        <div class="card-form">
            <form method="post" action="">
                <div class="form-group">
                    <label>NRP</label>
                    <input type="text" name="nrp" placeholder="Contoh: 15-2023-001" required>
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="nama@ngampus.ac.id" required>
                </div>
                <div class="form-group">
                    <label>Tempat, Tanggal Lahir</label>
                    <input type="text" name="ttl" placeholder="Contoh: Bandung, 17-08-2002" required>
                </div>
                <div class="form-group">
                    <label>Dosen Wali</label>
                    <select name="id_dosen" required>
                        <option value="">-- Pilih Dosen Wali --</option>
                        <?php while ($d = mysqli_fetch_array($dosen)) { ?>
                            <option value="<?php echo (int)$d['id_dosen']; ?>">
                                <?php echo htmlspecialchars($d['nip'] . " - " . $d['nama']); ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-actions">
                    <a href="index.php" class="btn-secondary">Kembali</a>
                    <button type="submit" class="btn-primary">Simpan Mahasiswa</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
