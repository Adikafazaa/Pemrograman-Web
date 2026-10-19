<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Pengenalan PHP: Hello World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 700px;">
        <h3 class="text-primary mb-3">01. Pengenalan PHP: Hello World</h3>
        <p class="text-muted">Materi Dasar Slide Dosen: Struktur Pembuka Program PHP dan Perintah Output.</p>
        <hr>

        <h5>Eksekusi Kode PHP:</h5>
        <div class="alert alert-info">
            <?php
            // Tag pembuka program PHP wajib ada di setiap file PHP
            echo "<strong>Hello World!</strong> Selamat datang di Pemrograman Web PHP.";
            ?>
        </div>

        <h6 class="mt-3">Penjelasan Konsep:</h6>
        <ul>
            <li><code>&lt;?php</code>: Penanda awal blok kode PHP yang dieksekusi di server.</li>
            <li><code>echo</code>: Perintah/statement bawaan PHP untuk mencetak output teks atau HTML ke browser.</li>
            <li>Setiap baris perintah pada PHP diakhiri tanda titik koma (<code>;</code>).</li>
            <li>Hasil keluaran yang diterima oleh browser klien adalah murni teks/HTML tanpa mengekspos kode sumber PHP.</li>
        </ul>

        <a href="dashboard.php" class="btn btn-outline-secondary mt-2">&larr; Kembali ke Dashboard</a>
    </div>
</body>
</html>
