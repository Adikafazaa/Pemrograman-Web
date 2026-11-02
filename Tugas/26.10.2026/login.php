<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

include 'database.php';

$error = '';
$sukses = '';

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == 'registered') {
        $sukses = 'Akun berhasil didaftarkan! Silakan masuk.';
    } else if ($_GET['pesan'] == 'logout') {
        $sukses = 'Anda telah berhasil keluar.';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Username dan password wajib diisi!';
    } else {
        $stmt = mysqli_prepare($koneksi, "SELECT id, username, password, nama_lengkap FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($user = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'nama_lengkap' => $user['nama_lengkap']
                ];
                header("Location: index.php");
                exit;
            } else {
                $error = 'Password yang Anda masukkan salah!';
            }
        } else {
            $error = 'Username tidak ditemukan!';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Sistem Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-badge-icon">✦</div>
            <h1>Selamat Datang</h1>
            <p class="subtitle">Silakan masuk untuk mengelola data</p>

            <?php if ($error !== '') { ?>
                <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
            <?php } ?>

            <?php if ($sukses !== '') { ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($sukses); ?></div>
            <?php } ?>

            <form method="post" action="login.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan username" required autocomplete="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" required autocomplete="current-password">
                </div>
                <button type="submit" class="btn-primary btn-block">Masuk</button>
            </form>

            <div class="auth-footer">
                Belum memiliki akun? <a href="register.php">Daftar sekarang</a>
            </div>
        </div>
    </div>
</body>
</html>
