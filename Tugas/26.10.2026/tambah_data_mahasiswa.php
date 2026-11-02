<?php
include 'database.php';
$dosen = mysqli_query($koneksi, "SELECT * FROM dosen_wali ORDER BY nama ASC");
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
    <h1>Tambah Data Mahasiswa</h1>
    <form method="post" action="proses_tambah.php">
        <p>
            <label>NRP</label><br>
            <input type="text" name="nrp" required>
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
            <label>Dosen Wali</label><br>
            <select name="id_dosen" required>
                <option value="">-- Pilih Dosen Wali --</option>
                <?php while ($d = mysqli_fetch_array($dosen)) { ?>
                    <option value="<?php echo $d['id_dosen']; ?>">
                        <?php echo $d['nip'] . " - " . $d['nama']; ?>
                    </option>
                <?php } ?>
            </select>
        </p>
        <p>
            <a href="index.php">Kembali</a>
            <button type="submit">Simpan</button>
        </p>
    </form>
</body>
</html>
