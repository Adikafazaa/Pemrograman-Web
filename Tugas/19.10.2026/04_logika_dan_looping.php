<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - Logika Program & Looping PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 750px;">
        <h3 class="text-primary mb-3">04. Logika Percabangan & Perulangan</h3>
        <p class="text-muted">Materi Slide Dosen (Canva Topik 4 Slide 7): If-Else Condition & Foreach Iteration.</p>
        <hr>

        <?php
        // 1. Percabangan If - Elseif - Else
        $nilai = 82;
        if ($nilai >= 85) {
            $grade = "A";
            $keterangan = "Sangat Memuaskan";
            $badge = "bg-success";
        } elseif ($nilai >= 70) {
            $grade = "B";
            $keterangan = "Memuaskan";
            $badge = "bg-primary";
        } elseif ($nilai >= 55) {
            $grade = "C";
            $keterangan = "Cukup";
            $badge = "bg-warning text-dark";
        } else {
            $grade = "D";
            $keterangan = "Kurang";
            $badge = "bg-danger";
        }

        // 2. Data Koleksi Nilai untuk Iterasi Foreach
        $daftar_siswa = [
            ["nama" => "Adika Faza", "skor" => 90],
            ["nama" => "Budi Santoso", "skor" => 78],
            ["nama" => "Citra Dewi", "skor" => 64],
            ["nama" => "Doni Pratama", "skor" => 85],
        ];
        ?>

        <h5>1. Hasil Pengondisian Nilai Tunggal:</h5>
        <div class="p-3 bg-light border rounded mb-4">
            <p class="mb-1">Nilai Mahasiswa: <strong><?php echo $nilai; ?></strong></p>
            <p class="mb-0">
                Grade yang diperoleh: <span class="badge <?php echo $badge; ?> fs-6"><?php echo $grade; ?></span>
                (<?php echo $keterangan; ?>)
            </p>
        </div>

        <h5>2. Hasil Iterasi Menggunakan Perulangan <code>foreach</code>:</h5>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Skor Ujian</th>
                    <th>Status Kelulusan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daftar_siswa as $i => $s): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $s["nama"]; ?></td>
                    <td><?php echo $s["skor"]; ?></td>
                    <td>
                        <?php if ($s["skor"] >= 70): ?>
                            <span class="badge bg-success">Lulus</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Remedial</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="dashboard.php" class="btn btn-outline-secondary mt-2">&larr; Kembali ke Dashboard</a>
    </div>
</body>
</html>
