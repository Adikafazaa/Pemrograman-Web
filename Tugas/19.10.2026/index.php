<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #022c22 0%, #0f766e 50%, #134e4a 100%); background-attachment: fixed; min-height: 100vh; font-family: system-ui, sans-serif; color: #1e293b; padding: 40px 15px; display: flex; justify-content: center; align-items: flex-start; }
        .main-container { width: 100%; max-width: 1060px; }
        .card-app { background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.35); overflow: hidden; border: none; }
        .app-header { background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: #ffffff; padding: 22px 28px; display: flex; justify-content: space-between; align-items: center; }
        .btn-add { background: #ffffff; color: #064e3b; font-weight: 600; border-radius: 8px; padding: 8px 18px; border: none; text-decoration: none; box-shadow: 0 4px 10px rgba(0,0,0,0.08); }
        .btn-add:hover { background: #f0fdf4; color: #022c22; }
        .table-custom thead { background: #f8fafc; color: #475569; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #e2e8f0; }
        .table-custom th, .table-custom td { padding: 13px 16px; font-size: 14px; vertical-align: middle; border-color: #f1f5f9; }
        .badge-masuk { background-color: #d1fae5; color: #065f46; font-weight: 600; padding: 5px 14px; border-radius: 20px; font-size: 12px; }
        .badge-keluar { background-color: #ffe4e6; color: #9f1239; font-weight: 600; padding: 5px 14px; border-radius: 20px; font-size: 12px; }
        .btn-action-edit { background: linear-gradient(135deg, #334155 0%, #475569 100%); color: #fff; border-radius: 6px; padding: 6px 14px; font-size: 13px; font-weight: 500; text-decoration: none; display: inline-block; white-space: nowrap; }
        .btn-action-edit:hover { color: #fff; opacity: 0.9; }
        .btn-action-delete { background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 6px; padding: 6px 14px; font-size: 13px; font-weight: 500; text-decoration: none; display: inline-block; white-space: nowrap; }
        .btn-action-delete:hover { color: #fff; opacity: 0.9; }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="card-app">
            <div class="app-header">
                <div>
                    <h3 class="fw-bold mb-1 fs-4">Aplikasi Catatan Keuangan</h3>
                    <p class="mb-0 opacity-75 small">Tugas CRUD 1 Tabel - IFB-211 Pemrograman Web</p>
                </div>
                <a href="tambah.php" class="btn-add">+ Tambah Transaksi</a>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-hover mb-0">
                    <thead class="text-center">
                        <tr>
                            <th style="width: 55px;">No</th>
                            <th style="width: 120px;">Tanggal</th>
                            <th style="width: 130px;">Jenis</th>
                            <th>Kategori</th>
                            <th style="width: 150px; text-align: right;">Nominal</th>
                            <th>Keterangan</th>
                            <th style="width: 180px; min-width: 170px; white-space: nowrap;">Aksi</th>
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
                            <td class="text-center"><?php echo $d['tanggal']; ?></td>
                            <td class="text-center">
                                <?php if($d['jenis'] == 'Pemasukan') { ?>
                                    <span class="badge-masuk">Pemasukan</span>
                                <?php } else { ?>
                                    <span class="badge-keluar">Pengeluaran</span>
                                <?php } ?>
                            </td>
                            <td class="fw-semibold text-secondary"><?php echo $d['kategori']; ?></td>
                            <td class="fw-bold text-end">Rp <?php echo number_format($d['nominal'], 0, ',', '.'); ?></td>
                            <td class="text-muted"><?php echo $d['keterangan']; ?></td>
                            <td class="text-center" style="white-space: nowrap;">
                                <div class="d-inline-flex gap-2">
                                    <a href="ubah.php?id=<?php echo $d['id']; ?>" class="btn-action-edit">Ubah</a>
                                    <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn-action-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>