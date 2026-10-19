<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tugas CRUD - Catatan Keuangan</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-banner {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 25px;
        }
        .card-custom {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .card-custom:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Hero Header -->
        <div class="hero-banner shadow-sm">
            <span class="badge bg-warning text-dark mb-2 px-3 py-1 fw-bold">TUGAS CRUD 1 TABEL (TOPIK 5)</span>
            <h2 class="fw-bold mb-1">Aplikasi Catatan Keuangan Pribadi</h2>
            <h5 class="fw-normal opacity-90 mb-2">IFB-211 Pemrograman Web &bull; Institut Teknologi Nasional (ITENAS)</h5>
            <p class="mb-0 small opacity-75">
                Implementasi aplikasi CRUD mandiri dengan 1 tabel (<code>catatan_keuangan</code>) yang memiliki 6 atribut,
                antarmuka rapi menggunakan Bootstrap 5, dan sintaks native PHP MySQLi sesuai template dosen.
            </p>
        </div>

        <!-- Tombol Aksi Cepat ke Aplikasi Utama -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card card-custom h-100 bg-white p-3 border-start border-primary border-4">
                    <h5 class="fw-bold text-primary mb-1">Buka Aplikasi CRUD</h5>
                    <p class="text-muted small mb-3">Tampilkan halaman utama aplikasi catatan keuangan dengan ringkasan saldo & tabel riwayat.</p>
                    <a href="index.php" class="btn btn-primary fw-semibold">&rarr; Masuk ke <code>index.php</code></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100 bg-white p-3 border-start border-success border-4">
                    <h5 class="fw-bold text-success mb-1">Tambah Data Transaksi</h5>
                    <p class="text-muted small mb-3">Buka form input transaksi keuangan baru (Pemasukan / Pengeluaran).</p>
                    <a href="tambah.php" class="btn btn-success fw-semibold">+ Form <code>tambah.php</code></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100 bg-white p-3 border-start border-info border-4">
                    <h5 class="fw-bold text-info mb-1">Basis Data MySQL</h5>
                    <p class="text-muted small mb-3">Skrip SQL tabel <code>catatan_keuangan</code> untuk diimpor ke database <code>keuangan</code>.</p>
                    <a href="keuangan.sql" class="btn btn-outline-info text-dark fw-semibold" download>&darr; Unduh <code>keuangan.sql</code></a>
                </div>
            </div>
        </div>

        <!-- Spesifikasi Struktur Tabel 1 Tabel 6 Atribut -->
        <div class="card card-custom bg-white mb-4">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0 text-dark">📋 Struktur Tabel: <code>catatan_keuangan</code> (Total 6 Atribut)</h5>
                <small class="text-muted">Memenuhi syarat tugas dosen: 1 tabel dengan minimum 5 atribut.</small>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center" style="width: 60px;">No</th>
                            <th>Nama Atribut (Field)</th>
                            <th>Tipe Data</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td><code>id</code></td>
                            <td>INT(11) AUTO_INCREMENT</td>
                            <td>Primary Key (ID Unik Transaksi)</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td><code>tanggal</code></td>
                            <td>DATE</td>
                            <td>Tanggal terjadinya transaksi keuangan</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td><code>jenis</code></td>
                            <td>VARCHAR(20)</td>
                            <td>Jenis arus kas (<code>Pemasukan</code> / <code>Pengeluaran</code>)</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td><code>kategori</code></td>
                            <td>VARCHAR(50)</td>
                            <td>Kategori keperluan (Gaji, Makanan, Transportasi, dsb.)</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td><code>nominal</code></td>
                            <td>INT(11)</td>
                            <td>Besaran nilai rupiah transaksi</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td><code>keterangan</code></td>
                            <td>VARCHAR(255)</td>
                            <td>Rincian / catatan spesifik mengenai transaksi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Daftar Berkas Program Lengkap -->
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card card-custom h-100 bg-white">
                    <div class="card-header bg-white py-3 fw-bold text-dark">
                        📁 Berkas CRUD Catatan Keuangan:
                    </div>
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><code>koneksi.php</code> &bull; Koneksi basis data MySQL</span>
                            <span class="badge bg-secondary">Config</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><a href="index.php" class="text-decoration-none"><code>index.php</code></a> &bull; Halaman Read / Tampil data & saldo</span>
                            <span class="badge bg-primary">Read</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><a href="tambah.php" class="text-decoration-none"><code>tambah.php</code></a> &bull; Formulir input data</span>
                            <span class="badge bg-success">Create</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><code>proses_tambah.php</code> &bull; Pemroses query INSERT</span>
                            <span class="badge bg-success">Action</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><code>ubah.php</code> &bull; Formulir edit transaksi</span>
                            <span class="badge bg-warning text-dark">Update</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><code>update.php</code> &bull; Pemroses query UPDATE</span>
                            <span class="badge bg-warning text-dark">Action</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><code>hapus.php</code> &bull; Pemroses query DELETE</span>
                            <span class="badge bg-danger">Delete</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-custom h-100 bg-white">
                    <div class="card-header bg-white py-3 fw-bold text-dark">
                        📚 Berkas Latihan Pengenalan PHP (Topik 4):
                    </div>
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item"><a href="01_hello_world.php" class="text-decoration-none"><code>01_hello_world.php</code></a> &bull; Sintaks dasar & statement <code>echo</code></li>
                        <li class="list-group-item"><a href="02_sintaks_dan_variabel.php" class="text-decoration-none"><code>02_sintaks_dan_variabel.php</code></a> &bull; Aturan variabel, tipe data & concatenation</li>
                        <li class="list-group-item"><a href="03_array.php" class="text-decoration-none"><code>03_array.php</code></a> &bull; Array numerik & array asosiatif</li>
                        <li class="list-group-item"><a href="04_logika_dan_looping.php" class="text-decoration-none"><code>04_logika_dan_looping.php</code></a> &bull; Percabangan <code>if-else</code> & looping <code>foreach</code></li>
                        <li class="list-group-item"><a href="05_form_get_post.php" class="text-decoration-none"><code>05_form_get_post.php</code></a> &bull; Penanganan superglobal <code>$_GET</code> & <code>$_POST</code></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center text-muted small mt-4">
            <p>Tugas Tanggal: 19.10.2026 &bull; IFB-211 Pemrograman Web &bull; ITENAS Bandung</p>
        </div>
    </div>
</body>
</html>
