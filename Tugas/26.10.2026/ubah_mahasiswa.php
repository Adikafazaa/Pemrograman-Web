<?php
include 'database.php';

if (isset($_POST['update'])) {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nrp          = $_POST['nrp'];
    $nama         = $_POST['nama'];
    $email        = $_POST['email'];
    $ttl          = $_POST['ttl'];
    $id_dosen     = $_POST['id_dosen'];

    if ($id_dosen == "" || $id_dosen == "0") {
        mysqli_query($koneksi, "UPDATE mahasiswa SET nrp='$nrp', nama='$nama', email='$email', ttl='$ttl', id_dosen=NULL WHERE id_mahasiswa='$id_mahasiswa'");
    } else {
        mysqli_query($koneksi, "UPDATE mahasiswa SET nrp='$nrp', nama='$nama', email='$email', ttl='$ttl', id_dosen='$id_dosen' WHERE id_mahasiswa='$id_mahasiswa'");
    }

    header("location:index.php");
    exit;
}

$id_mahasiswa = $_GET['id_mahasiswa'] ?? $_GET['id'] ?? 0;
$data_mhs = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
$mhs = mysqli_fetch_array($data_mhs);
$dosen = mysqli_query($koneksi, "SELECT * FROM dosen_wali ORDER BY nama ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form method="post" action="">
        <input type="hidden" name="id_mahasiswa" value="<?php echo $mhs['id_mahasiswa']; ?>">
        <p>
            <label>NRP</label><br>
            <input type="text" name="nrp" value="<?php echo $mhs['nrp']; ?>" required>
        </p>
        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="<?php echo $mhs['nama']; ?>" required>
        </p>
        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="<?php echo $mhs['email']; ?>" required>
        </p>
        <p>
            <label>Tempat, Tanggal Lahir</label><br>
            <input type="text" name="ttl" value="<?php echo $mhs['ttl']; ?>" required>
        </p>
        <p>
            <label>Dosen Wali</label><br>
            <select name="id_dosen">
                <option value="">-- Pilih Dosen Wali --</option>
                <?php while ($d = mysqli_fetch_array($dosen)) { ?>
                    <option value="<?php echo $d['id_dosen']; ?>" <?php if ($d['id_dosen'] == $mhs['id_dosen']) echo 'selected'; ?>>
                        <?php echo $d['nip'] . " - " . $d['nama']; ?>
                    </option>
                <?php } ?>
            </select>
        </p>
        <p>
            <a href="index.php">Kembali</a>
            <button type="submit" name="update">Simpan Perubahan</button>
        </p>
    </form>
</body>
</html>
