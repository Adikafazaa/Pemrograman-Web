<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Transaksi Keuangan</title>
    <!-- CSS Bootstrap 5 sesuai template perkuliahan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            padding: 30px;
            max-width: 650px;
            margin: 40px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-primary fw-bold mb-0">Tambah Transaksi</h3>
                <a href="index.php" class="btn btn-outline-secondary btn-sm">&larr; KEMBALI</a>
            </div>
            <p class="text-muted small mb-4">Silakan isi formulir di bawah ini untuk mencatat transaksi keuangan baru.</p>

            <form method="post" action="proses_tambah.php">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Tanggal Transaksi</label>
                    <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Jenis Transaksi</label>
                    <select name="jenis" class="form-select" required>
                        <option value="Pengeluaran" selected>Pengeluaran (-)</option>
                        <option value="Pemasukan">Pemasukan (+)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Contoh: Makanan, Transportasi, Gaji, dll." required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nominal (Rp)</label>
                    <input type="number" name="nominal" class="form-control" placeholder="Contoh: 50000" min="1" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Keterangan / Catatan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Contoh: Beli makan siang di kantin" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary py-2 fw-semibold">SIMPAN TRANSAKSI</button>
                    <a href="index.php" class="btn btn-light text-secondary py-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>