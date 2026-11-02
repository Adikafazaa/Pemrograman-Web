<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

$user = $_SESSION['user'];
$initial = strtoupper(substr($user['nama_lengkap'] ?? 'U', 0, 1));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header-bar">
            <div class="brand-info">
                <h1>Sistem Akademik</h1>
                <p>Data Mahasiswa & Dosen Wali</p>
            </div>
            <div class="user-nav">
                <div class="user-badge">
                    <span class="user-avatar"><?php echo htmlspecialchars($initial); ?></span>
                    <span><?php echo htmlspecialchars($user['nama_lengkap']); ?></span>
                </div>
                <a href="logout.php" class="btn-logout">Keluar</a>
            </div>
        </header>

        <div class="toolbar">
            <a href="tambah_data_mahasiswa.php" class="btn-primary">+ Tambah Mahasiswa</a>
            <a href="tambah_dosen.php" class="btn-secondary">+ Tambah Dosen Wali</a>
        </div>

        <h2>Data Mahasiswa</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Dosen Wali</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query_mhs = "SELECT mahasiswa.id_mahasiswa, mahasiswa.nrp, mahasiswa.nama, mahasiswa.email, mahasiswa.ttl, dosen_wali.nama AS nama_dosen 
                                  FROM mahasiswa 
                                  LEFT JOIN dosen_wali ON mahasiswa.id_dosen = dosen_wali.id_dosen 
                                  ORDER BY mahasiswa.id_mahasiswa ASC";
                    $data_mhs = mysqli_query($koneksi, $query_mhs);
                    while ($mhs = mysqli_fetch_array($data_mhs)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($mhs['nrp']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['nama']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['email']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['ttl']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['nama_dosen'] ?? '-'); ?></td>
                        <td>
                            <div class="actions">
                                <a href="ubah_mahasiswa.php?id_mahasiswa=<?php echo (int)$mhs['id_mahasiswa']; ?>" class="btn-action-edit">Ubah</a>
                                <a href="delete_mahasiswa.php?id_mahasiswa=<?php echo (int)$mhs['id_mahasiswa']; ?>" class="btn-action-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>
                </tbody>
            </table>
        </div>

        <h2>Data Dosen Wali</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>NIP</th>
                        <th>Nama Dosen</th>
                        <th>Email</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no_dosen = 1;
                    $data_dosen = mysqli_query($koneksi, "SELECT id_dosen, nip, nama, email, ttl FROM dosen_wali ORDER BY id_dosen ASC");
                    while ($d = mysqli_fetch_array($data_dosen)) {
                    ?>
                    <tr>
                        <td><?php echo $no_dosen++; ?></td>
                        <td><?php echo htmlspecialchars($d['nip']); ?></td>
                        <td><?php echo htmlspecialchars($d['nama']); ?></td>
                        <td><?php echo htmlspecialchars($d['email']); ?></td>
                        <td><?php echo htmlspecialchars($d['ttl']); ?></td>
                        <td>
                            <div class="actions">
                                <a href="ubah_dosen.php?id_dosen=<?php echo (int)$d['id_dosen']; ?>" class="btn-action-edit">Ubah</a>
                                <a href="delete_dosen.php?id_dosen=<?php echo (int)$d['id_dosen']; ?>" class="btn-action-delete" onclick="return confirm('Yakin ingin menghapus data dosen ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
