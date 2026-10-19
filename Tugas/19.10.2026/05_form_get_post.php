<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - Penanganan Form GET vs POST PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 800px;">
        <h3 class="text-primary mb-3">05. Penanganan Form: $_GET vs $_POST</h3>
        <p class="text-muted">Materi Slide Dosen (Canva Topik 4 Slide 8): Superglobal Variables di Backend PHP.</p>
        <hr>

        <div class="row">
            <!-- Form GET -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-primary">
                    <div class="card-header bg-primary text-white">
                        <strong>Metode HTTP GET</strong>
                    </div>
                    <div class="card-body">
                        <p class="small text-muted">Data dikirimkan melalui URL Query String. Cocok untuk navigasi, filter pencarian, bookmarking.</p>
                        <form method="GET" action="05_form_get_post.php">
                            <div class="mb-3">
                                <label class="form-label small">Kata Kunci Pencarian (GET):</label>
                                <input type="text" name="keyword" class="form-control" placeholder="Contoh: PHP MySQL" value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Kirim via GET</button>
                        </form>

                        <?php if (isset($_GET['keyword']) && $_GET['keyword'] !== ''): ?>
                            <div class="alert alert-primary mt-3 py-2 small">
                                <strong>Diterima $_GET:</strong> <?php echo htmlspecialchars($_GET['keyword']); ?><br>
                                <span class="text-muted">Terlihat di URL browser (?keyword=...)</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Form POST -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-success">
                    <div class="card-header bg-success text-white">
                        <strong>Metode HTTP POST</strong>
                    </div>
                    <div class="card-body">
                        <p class="small text-muted">Data dikirim tersembunyi via HTTP Request Body. Wajib untuk password, registrasi, mutasi data.</p>
                        <form method="POST" action="05_form_get_post.php">
                            <div class="mb-2">
                                <label class="form-label small">Nama User (POST):</label>
                                <input type="text" name="username_demo" class="form-control" placeholder="Masukkan nama" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Password Rahasia:</label>
                                <input type="password" name="password_demo" class="form-control" placeholder="Masukkan password" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success">Kirim via POST</button>
                        </form>

                        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username_demo'])): ?>
                            <div class="alert alert-success mt-3 py-2 small">
                                <strong>Diterima $_POST:</strong> <?php echo htmlspecialchars($_POST['username_demo']); ?><br>
                                <strong>Password length:</strong> <?php echo strlen($_POST['password_demo']); ?> karakter (terlindungi dari URL).
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <a href="dashboard.php" class="btn btn-outline-secondary mt-2">&larr; Kembali ke Dashboard</a>
    </div>
</body>
</html>
