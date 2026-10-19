<!DOCTYPE html>
<html>
<head>
	<title>Catatan Keuangan Pribadi</title>
    <!-- CSS Bootstrap 5 sesuai template perkuliahan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card-stat {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        th {
            background-color: #1e3a8a !important;
            color: #ffffff !important;
            font-weight: 600;
            text-align: center;
        }
        td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Header Halaman -->
        <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <div>
                <h2 class="fw-bold text-primary mb-1">Aplikasi Catatan Keuangan</h2>
                <p class="text-muted mb-0">Tugas CRUD 1 Tabel - IFB-211 Pemrograman Web</p>
            </div>
            <div>
                <a href="tambah.php" class="btn btn-primary px-3 py-2 fw-semibold">
                    + Tambah Transaksi
                </a>
            </div>
        </div>

        <?php 
        include 'koneksi.php';

        // Hitung total pemasukan
        $q_masuk = mysqli_query($koneksi, "select sum(nominal) as total from catatan_keuangan where jenis='Pemasukan'");
        $d_masuk = mysqli_fetch_array($q_masuk);
        $total_masuk = $d_masuk['total'] ? $d_masuk['total'] : 0;

        // Hitung total pengeluaran
        $q_keluar = mysqli_query($koneksi, "select sum(nominal) as total from catatan_keuangan where jenis='Pengeluaran'");
        $d_keluar = mysqli_fetch_array($q_keluar);
        $total_keluar = $d_keluar['total'] ? $d_keluar['total'] : 0;

        // Hitung sisa saldo
        $saldo = $total_masuk - $total_keluar;
        ?>

        <!-- Card Statistik Ringkasan Keuangan (Mempercantik Tampilan) -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card card-stat bg-white p-3 border-start border-success border-4">
                    <span class="text-muted small fw-semibold">TOTAL PEMASUKAN</span>
                    <h3 class="text-success fw-bold mb-0 mt-1">
                        Rp <?php echo number_format($total_masuk, 0, ',', '.'); ?>
                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-stat bg-white p-3 border-start border-danger border-4">
                    <span class="text-muted small fw-semibold">TOTAL PENGELUARAN</span>
                    <h3 class="text-danger fw-bold mb-0 mt-1">
                        Rp <?php echo number_format($total_keluar, 0, ',', '.'); ?>
                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-stat bg-white p-3 border-start border-primary border-4">
                    <span class="text-muted small fw-semibold">SISA SALDO KAS</span>
                    <h3 class="<?php echo ($saldo >= 0) ? 'text-primary' : 'text-danger'; ?> fw-bold mb-0 mt-1">
                        Rp <?php echo number_format($saldo, 0, ',', '.'); ?>
                    </h3>
                </div>
            </div>
        </div>

        <!-- Tabel Data Transaksi Keuangan -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th style="width: 120px;">Tanggal</th>
                        <th style="width: 120px;">Jenis</th>
                        <th style="width: 160px;">Kategori</th>
                        <th style="width: 160px;">Nominal (Rp)</th>
                        <th>Keterangan</th>
                        <th style="width: 160px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from catatan_keuangan order by tanggal desc, id desc");
                    if (mysqli_num_rows($data) > 0) {
                        while($d = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td class="text-center"><?php echo date('d-m-Y', strtotime($d['tanggal'])); ?></td>
                                <td class="text-center">
                                    <?php if($d['jenis'] == 'Pemasukan'): ?>
                                        <span class="badge bg-success">Pemasukan</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger">Pengeluaran</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $d['kategori']; ?></td>
                                <td class="text-end fw-semibold <?php echo ($d['jenis'] == 'Pemasukan') ? 'text-success' : 'text-danger'; ?>">
                                    <?php echo ($d['jenis'] == 'Pemasukan' ? '+ ' : '- '); ?>Rp <?php echo number_format($d['nominal'], 0, ',', '.'); ?>
                                </td>
                                <td><?php echo $d['keterangan']; ?></td>
                                <td class="text-center">
                                    <a role="button" class="btn btn-sm btn-info text-white" href="ubah.php?id=<?php echo $d['id']; ?>">UBAH</a>
                                    <a role="button" class="btn btn-sm btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data transaksi ini?')">HAPUS</a>
                                </td>
                            </tr>
                            <?php 
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">
                                <em>Belum ada catatan keuangan yang tersimpan. Silakan klik tombol <strong>Tambah Transaksi</strong> di atas.</em>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="text-center text-muted small mt-4">
            <p>Aplikasi Catatan Keuangan Pribadi &bull; IFB-211 Pemrograman Web 2026</p>
        </div>
    </div>
</body>
</html>
