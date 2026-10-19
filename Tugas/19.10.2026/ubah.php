<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Catatan Keuangan</title>
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
                <h3 class="text-primary fw-bold mb-0">Ubah Data Transaksi</h3>
                <a href="index.php" class="btn btn-outline-secondary btn-sm">&larr; KEMBALI</a>
            </div>
            <p class="text-muted small mb-4">Silakan perbarui informasi transaksi keuangan pada formulir di bawah ini.</p>

            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from catatan_keuangan where id='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <form method="post" action="update.php">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Transaksi</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $d['tanggal']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Jenis Transaksi</label>
                        <select name="jenis" class="form-select" required>
                            <option value="Pengeluaran" <?php if($d['jenis'] == 'Pengeluaran') echo 'selected'; ?>>Pengeluaran (-)</option>
                            <option value="Pemasukan" <?php if($d['jenis'] == 'Pemasukan') echo 'selected'; ?>>Pemasukan (+)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?php echo $d['kategori']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nominal (Rp)</label>
                        <input type="number" name="nominal" class="form-control" value="<?php echo $d['nominal']; ?>" min="1" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Keterangan / Catatan</label>
                        <input type="text" name="keterangan" class="form-control" value="<?php echo $d['keterangan']; ?>" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary py-2 fw-semibold">UPDATE DATA</button>
                        <a href="index.php" class="btn btn-light text-secondary py-2">Batal</a>
                    </div>
                </form>
                <?php 
            }
            ?>
        </div>
    </div>
</body>
</html>