<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa & Dosen Wali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <p>
        <a href="tambah_data_mahasiswa.php">+ Tambah Mahasiswa</a> | 
        <a href="tambah_dosen.php">+ Tambah Dosen Wali</a>
    </p>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Dosen Wali</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query_mhs = "SELECT mahasiswa.*, dosen_wali.nama AS nama_dosen 
                      FROM mahasiswa 
                      LEFT JOIN dosen_wali ON mahasiswa.id_dosen = dosen_wali.id_dosen 
                      ORDER BY mahasiswa.id_mahasiswa ASC";
        $data_mhs = mysqli_query($koneksi, $query_mhs);
        while ($mhs = mysqli_fetch_array($data_mhs)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $mhs['nrp']; ?></td>
            <td><?php echo $mhs['nama']; ?></td>
            <td><?php echo $mhs['email']; ?></td>
            <td><?php echo $mhs['ttl']; ?></td>
            <td><?php echo $mhs['nama_dosen']; ?></td>
            <td>
                <a href="ubah_mahasiswa.php?id_mahasiswa=<?php echo $mhs['id_mahasiswa']; ?>">Ubah</a> | 
                <a href="delete_mahasiswa.php?id_mahasiswa=<?php echo $mhs['id_mahasiswa']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php 
        } 
        ?>
    </table>

    <br>
    <h2>Data Dosen Wali</h2>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Email</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no_dosen = 1;
        $data_dosen = mysqli_query($koneksi, "SELECT * FROM dosen_wali ORDER BY id_dosen ASC");
        while ($d = mysqli_fetch_array($data_dosen)) {
        ?>
        <tr>
            <td><?php echo $no_dosen++; ?></td>
            <td><?php echo $d['nip']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['ttl']; ?></td>
            <td>
                <a href="ubah_dosen.php?id_dosen=<?php echo $d['id_dosen']; ?>">Ubah</a> | 
                <a href="delete_dosen.php?id_dosen=<?php echo $d['id_dosen']; ?>" onclick="return confirm('Yakin ingin menghapus data dosen ini?')">Hapus</a>
            </td>
        </tr>
        <?php 
        } 
        ?>
    </table>
</body>
</html>
