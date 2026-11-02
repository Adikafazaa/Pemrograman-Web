<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

include 'database.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap       = trim($_POST['nama_lengkap'] ?? '');
    $username           = trim($_POST['username'] ?? '');
    $password           = $_POST['password'] ?? '';
    $konfirmasi_password = $_POST['konfirmasi_password'] ?? '';

    if ($nama_lengkap === '' || $username === '' || $password === '') {
        $error = 'Semua field wajib diisi!';
    } else if ($password !== $konfirmasi_password) {
        $error = 'Konfirmasi password tidak cocok!';
    } else if (strlen($password) < 6) {
        $error = 'Password minimal terdiri dari 6 karakter!';
    } else {
        $cek_stmt = mysqli_prepare($koneksi, "SELECT id FROM users WHERE username = ?");
        mysqli_stmt_bind_param($cek_stmt, "s", $username);
        mysqli_stmt_execute($cek_stmt);
        $cek_result = mysqli_stmt_get_result($cek_stmt);

        if (mysqli_num_rows($cek_result) > 0) {
            $error = 'Username sudah terdaftar, silakan gunakan username lain!';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $ins_stmt = mysqli_prepare($koneksi, "INSERT INTO users (username, password, nama_lengkap) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($ins_stmt, "sss", $username, $hash, $nama_lengkap);

            if (mysqli_stmt_execute($ins_stmt)) {
                header("Location: login.php?pesan=registered");
                exit;
            } else {
                $error = 'Gagal mendaftarkan akun. Silakan coba lagi.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Sistem Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-badge-icon">✦</div>
            <h1>Buat Akun</h1>
            <p class="subtitle">Daftarkan akun baru untuk akses sistem</p>

            <?php if ($error !== '') { ?>
                <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
            <?php } ?>

            <form method="post" action="register.php">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" placeholder="Contoh: Budi Santoso" value="<?php echo htmlspecialchars($_POST['nama_lengkap'] ?? ''); ?>" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Pilih username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>" required autocomplete="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Minimal 6 karakter" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="konfirmasi_password" placeholder="Ulangi password" required autocomplete="new-password">
                </div>
                <button type="submit" class="btn-primary btn-block">Daftar Akun</button>
            </form>

            <div class="auth-footer">
                Sudah memiliki akun? <a href="login.php">Masuk sekarang</a>
            </div>
        </div>
    </div>
</body>
</html>
