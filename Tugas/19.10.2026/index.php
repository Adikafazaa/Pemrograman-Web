<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h2>Aplikasi Catatan Keuangan</h2>
        <p class="text-muted">Tugas CRUD 1 Tabel - IFB-211 Pemrograman Web</p>
        <hr>

        <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Transaksi</a>

        <table class="table table-bordered table-striped table-hover bg-white">
            <thead class="table-primary text-center">
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Tanggal</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Nominal</th>
                    <th>Keterangan</th>
                    <th style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from catatan_keuangan");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo $d['jenis']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td>Rp <?php echo number_format($d['nominal'], 0, ',', '.'); ?></td>
                    <td><?php echo $d['keterangan']; ?></td>
                    <td class="text-center">
                        <a href="ubah.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php 
                } 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
