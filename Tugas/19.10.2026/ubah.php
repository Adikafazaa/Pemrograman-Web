<!DOCTYPE html>
<html>
<head>
    <title>Ubah Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8fafc; font-family: system-ui, sans-serif; color: #1e293b; }
        .card-header-custom { background-color: #334155; color: #fff; padding: 14px 20px; }
        .btn-slate { background-color: #334155; color: #fff; border: none; font-weight: 500; border-radius: 6px; padding: 8px 20px; }
        .btn-slate:hover { background-color: #1e293b; color: #fff; }
        .btn-secondary-custom { background-color: #64748b; color: #fff; border: none; border-radius: 6px; padding: 8px 16px; text-decoration: none; display: inline-block; }
        .btn-secondary-custom:hover { background-color: #475569; color: #fff; }
        .form-label { font-weight: 500; font-size: 14px; color: #334155; }
    </style>
</head>
<body>
    <div class="container mt-4 mb-5" style="max-width: 580px;">
        <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
            <div class="card-header-custom">
                <h4 class="mb-0 fs-5 fw-semibold">Ubah Catatan Keuangan</h4>
            </div>
            <div class="card-body p-4 bg-white">
                <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from catatan_keuangan where id='$id'");
                while($d = mysqli_fetch_array($data)){
                ?>
                <form method="post" action="update.php">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $d['tanggal']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select" required>
                            <option value="Pemasukan" <?php if($d['jenis'] == 'Pemasukan') echo 'selected'; ?>>Pemasukan</option>
                            <option value="Pengeluaran" <?php if($d['jenis'] == 'Pengeluaran') echo 'selected'; ?>>Pengeluaran</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?php echo $d['kategori']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nominal (Rp)</label>
                        <input type="number" name="nominal" class="form-control" value="<?php echo $d['nominal']; ?>" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="<?php echo $d['keterangan']; ?>" required>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="btn btn-slate">Update</button>
                        <a href="index.php" class="btn-secondary-custom ms-2">Kembali</a>
                    </div>
                </form>
                <?php 
                } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>
