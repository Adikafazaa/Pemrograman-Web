<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Struktur Data Array PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 750px;">
        <h3 class="text-primary mb-3">03. Struktur Data: Array Terindeks & Asosiatif</h3>
        <p class="text-muted">Materi Slide Dosen (Canva Topik 4 Slide 6): Pengelolaan Koleksi Data di PHP.</p>
        <hr>

        <?php
        // 1. Array Terindeks (Numeric Index)
        $matkul = ["Pemrograman Web", "Pemrograman Basis Data", "Sistem Operasi", "Struktur Data"];

        // 2. Array Asosiatif (Key-Value Pair)
        $mhs = [
            "nim" => "152025013",
            "nama" => "Adika Faza Athallah",
            "prodi" => "Informatika",
            "angkatan" => 2025,
            "ipk" => 3.85
        ];
        ?>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <strong>Array Terindeks (Numeric)</strong>
                    </div>
                    <div class="card-body">
                        <p class="small text-muted">Menggunakan indeks numerik berbasis 0 (0, 1, 2, ...).</p>
                        <p><strong>Akses elemen $matkul[0]:</strong> <span class="badge bg-success"><?php echo $matkul[0]; ?></span></p>
                        <p><strong>Akses elemen $matkul[1]:</strong> <span class="badge bg-secondary"><?php echo $matkul[1]; ?></span></p>
                        <h6 class="mt-3">Seluruh Elemen:</h6>
                        <ul class="mb-0">
                            <?php foreach ($matkul as $idx => $m): ?>
                                <li>Index <code>[<?php echo $idx; ?>]</code>: <?php echo $m; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-header bg-info text-white">
                        <strong>Array Asosiatif (Key-Value)</strong>
                    </div>
                    <div class="card-body">
                        <p class="small text-muted">Menggunakan string key deskriptif untuk merujuk nilai.</p>
                        <table class="table table-sm table-bordered">
                            <thead class="table-light">
                                <tr><th>Kunci (Key)</th><th>Nilai (Value)</th></tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mhs as $k => $v): ?>
                                <tr>
                                    <td><code><?php echo $k; ?></code></td>
                                    <td><?php echo $v; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="small mb-0">Contoh akses: <code>$mhs['nama']</code> &rarr; <strong><?php echo $mhs['nama']; ?></strong></p>
                    </div>
                </div>
            </div>
        </div>

        <a href="dashboard.php" class="btn btn-outline-secondary mt-2">&larr; Kembali ke Dashboard</a>
    </div>
</body>
</html>
