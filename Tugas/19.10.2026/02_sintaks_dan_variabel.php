<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Sintaks dan Variabel PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 750px;">
        <h3 class="text-primary mb-3">02. Aturan Sintaks & Variabel PHP</h3>
        <p class="text-muted">Materi Slide Dosen (Canva Topik 4 Slide 5 & PPT Topik 4): Weakly Typed & Case Sensitivity.</p>
        <hr>

        <?php
        // 1. Deklarasi Variabel (diawali simbol $)
        $nim = "152025013";
        $nama = "Adika Faza Athallah";
        $ipk = 3.85;
        $status_aktif = true;

        // 2. Case sensitivity demo: variabel $nim berbeda dengan $NIM
        $NIM = "152024999";

        // 3. String concatenation menggunakan tanda titik (.)
        $info_mahasiswa = "Mahasiswa: " . $nama . " (NIM: " . $nim . ") memiliki IPK: " . $ipk;
        ?>

        <h5>Hasil Output Program:</h5>
        <div class="p-3 bg-light border rounded mb-3">
            <p class="mb-1"><strong>Hasil Concatenation:</strong> <?php echo $info_mahasiswa; ?></p>
            <p class="mb-1"><strong>Status Aktif:</strong> <?php echo ($status_aktif ? "Aktif" : "Tidak Aktif"); ?> (Tipe: boolean)</p>
            <p class="mb-0 text-secondary">
                <strong>Bukti Case Sensitive:</strong> Variabel <code>$nim</code> = <?php echo $nim; ?>, sedangkan <code>$NIM</code> = <?php echo $NIM; ?>.
            </p>
        </div>

        <h6>Kaidah Penting Variabel PHP:</h6>
        <ol>
            <li>Variabel selalu diawali dengan tanda dollar (<code>$</code>).</li>
            <li>Nama variabel harus dimulai huruf atau garis bawah (<code>_</code>), tidak boleh diawali angka.</li>
            <li>Hanya dapat memuat karakter alfanumerik dan garis bawah (A-z, 0-9, dan _).</li>
            <li><strong>Case-Sensitive:</strong> Huruf kapital dan kecil dibedakan pada nama variabel. Namun fungsi bawaan PHP bersifat case-insensitive (misal: <code>echo</code> sama dengan <code>ECHO</code>).</li>
            <li><strong>Weakly Typed:</strong> PHP otomatis mendeteksi tipe data variabel tanpa deklarasi tipe secara eksplisit.</li>
        </ol>

        <a href="dashboard.php" class="btn btn-outline-secondary mt-2">&larr; Kembali ke Dashboard</a>
    </div>
</body>
</html>
