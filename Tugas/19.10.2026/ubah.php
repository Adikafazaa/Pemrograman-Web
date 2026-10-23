<!DOCTYPE html>
<html>
<head>
    <title>Ubah Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #022c22 0%, #0f766e 50%, #134e4a 100%); background-attachment: fixed; min-height: 100vh; font-family: system-ui, sans-serif; color: #1e293b; display: flex; align-items: center; justify-content: center; padding: 30px 15px; }
        .form-card { width: 100%; max-width: 600px; background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.35); overflow: hidden; border: none; }
        .card-header-custom { background: linear-gradient(135deg, #1e293b 0%, #334155 100%); color: #ffffff; padding: 20px 28px; }
        .form-label { font-weight: 500; font-size: 14px; color: #334155; margin-bottom: 6px; }
        .btn-slate { background: linear-gradient(135deg, #1e293b 0%, #334155 100%); color: #fff; border: none; font-weight: 600; border-radius: 8px; padding: 9px 22px; }
        .btn-slate:hover { opacity: 0.95; color: #fff; }
        .btn-secondary-custom { background: #64748b; color: #fff; border: none; border-radius: 8px; padding: 9px 18px; text-decoration: none; font-weight: 500; display: inline-block; }
        .btn-secondary-custom:hover { background: #475569; color: #fff; }
    </style>
</head>
<body>
    <div class="form-card">
        <div class="card-header-custom">
            <h4 class="mb-1 fs-5 fw-semibold">Ubah Catatan Keuangan</h4>
            <p class="mb-0 opacity-75 small">Perbarui data transaksi keuangan yang tersimpan</p>
        </div>
        <div class="p-4 bg-white">
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from catatan_keuangan where id='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $d['tanggal']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select" required>
                            <option value="Pemasukan" <?php if($d['jenis'] == 'Pemasukan') echo 'selected'; ?>>Pemasukan</option>
                            <option value="Pengeluaran" <?php if($d['jenis'] == 'Pengeluaran') echo 'selected'; ?>>Pengeluaran</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?php echo $d['kategori']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nominal (Rp)</label>
                        <input type="number" name="nominal" class="form-control" value="<?php echo $d['nominal']; ?>" min="1" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $d['keterangan']; ?>" required>
                </div>

                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <a href="index.php" class="btn-secondary-custom">Kembali</a>
                    <button type="submit" class="btn btn-slate">Update Transaksi</button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
