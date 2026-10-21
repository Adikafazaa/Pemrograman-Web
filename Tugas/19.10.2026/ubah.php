<!DOCTYPE html>
<html>
<head>
    <title>Ubah Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Ubah Catatan Keuangan</h4>
            </div>
            <div class="card-body">
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

                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </form>
                <?php 
                } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>
