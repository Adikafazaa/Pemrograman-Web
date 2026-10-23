<!DOCTYPE html>
<html>
<head>
    <title>Tambah Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #022c22 0%, #0f766e 50%, #134e4a 100%); background-attachment: fixed; min-height: 100vh; font-family: system-ui, sans-serif; color: #1e293b; display: flex; align-items: center; justify-content: center; padding: 30px 15px; }
        .form-card { width: 100%; max-width: 600px; background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.35); overflow: hidden; border: none; }
        .card-header-custom { background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: #ffffff; padding: 20px 28px; }
        .form-label { font-weight: 500; font-size: 14px; color: #334155; margin-bottom: 6px; }
        .btn-emerald { background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: #fff; border: none; font-weight: 600; border-radius: 8px; padding: 9px 22px; }
        .btn-emerald:hover { opacity: 0.95; color: #fff; }
        .btn-secondary-custom { background: #64748b; color: #fff; border: none; border-radius: 8px; padding: 9px 18px; text-decoration: none; font-weight: 500; display: inline-block; }
        .btn-secondary-custom:hover { background: #475569; color: #fff; }
    </style>
</head>
<body>
    <div class="form-card">
        <div class="card-header-custom">
            <h4 class="mb-1 fs-5 fw-semibold">Tambah Catatan Keuangan</h4>
            <p class="mb-0 opacity-75 small">Masukkan detail transaksi keuangan baru</p>
        </div>
        <div class="p-4 bg-white">
            <form method="post" action="proses_tambah.php">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select" required>
                            <option value="Pemasukan">Pemasukan</option>
                            <option value="Pengeluaran" selected>Pengeluaran</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Contoh: Makanan, Gaji" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nominal (Rp)</label>
                        <input type="number" name="nominal" class="form-control" placeholder="Contoh: 50000" min="1" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Contoh: Makan siang di kantin" required>
                </div>

                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <a href="index.php" class="btn-secondary-custom">Kembali</a>
                    <button type="submit" class="btn btn-emerald">Simpan Transaksi</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>