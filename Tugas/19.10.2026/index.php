<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8fafc; font-family: system-ui, sans-serif; color: #1e293b; }
        .btn-emerald { background-color: #0f766e; color: #fff; border: none; font-weight: 500; border-radius: 6px; padding: 8px 18px; }
        .btn-emerald:hover { background-color: #115e59; color: #fff; }
        .table-custom thead { background-color: #0f766e; color: #fff; }
        .table-custom th, .table-custom td { padding: 12px 14px; font-size: 14px; vertical-align: middle; border-color: #e2e8f0; }
        .badge-masuk { background-color: #d1fae5; color: #065f46; font-weight: 500; padding: 5px 12px; border-radius: 20px; }
        .badge-keluar { background-color: #ffe4e6; color: #9f1239; font-weight: 500; padding: 5px 12px; border-radius: 20px; }
        .btn-action-edit { background-color: #334155; color: #fff; border-radius: 6px; padding: 5px 12px; font-size: 13px; text-decoration: none; display: inline-block; }
        .btn-action-edit:hover { background-color: #1e293b; color: #fff; }
        .btn-action-delete { background-color: #e11d48; color: #fff; border-radius: 6px; padding: 5px 12px; font-size: 13px; text-decoration: none; display: inline-block; }
        .btn-action-delete:hover { background-color: #be123c; color: #fff; }
    </style>
</head>
<body>
    <div class="container mt-4 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h2 class="fw-bold mb-1" style="color: #0f172a;">Aplikasi Catatan Keuangan</h2>
                <p class="text-muted mb-0">Tugas CRUD 1 Tabel - IFB-211 Pemrograman Web</p>
            </div>
            <a href="tambah.php" class="btn btn-emerald">+ Tambah Transaksi</a>
        </div>

        <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
            <table class="table table-custom table-hover mb-0">
                <thead class="text-center">
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
                        <td class="text-center text-muted"><?php echo $no++; ?></td>
                        <td><?php echo $d['tanggal']; ?></td>
                        <td class="text-center">
                            <?php if($d['jenis'] == 'Pemasukan') { ?>
                                <span class="badge-masuk">Pemasukan</span>
                            <?php } else { ?>
                                <span class="badge-keluar">Pengeluaran</span>
                            <?php } ?>
                        </td>
                        <td class="fw-semibold text-secondary"><?php echo $d['kategori']; ?></td>
                        <td class="fw-bold">Rp <?php echo number_format($d['nominal'], 0, ',', '.'); ?></td>
                        <td class="text-muted"><?php echo $d['keterangan']; ?></td>
                        <td class="text-center">
                            <a href="ubah.php?id=<?php echo $d['id']; ?>" class="btn-action-edit">Ubah</a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn-action-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
