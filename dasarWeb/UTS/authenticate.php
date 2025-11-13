<?php
session_start();
require 'koneksi.php';

if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id']   = $admin['id'];
        $_SESSION['admin_name'] = $admin['nama_lengkap'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

<div class="card shadow-lg border-0" style="width: 360px; border-radius: 15px;">
    <div class="card-body p-4">
        <h3 class="text-center mb-4 fw-semibold text-primary">Login Admin</h3>

        <?php if (isset($error)) : ?>
            <div class="alert alert-danger py-2 text-center"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <?php if (isset($_GET['registered'])) : ?>
            <div class="alert alert-success py-2 text-center">Akun berhasil dibuat, silakan login.</div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" name="login" class="btn btn-primary w-100 py-2 fw-semibold">Login</button>
        </form>

        <div class="text-center mt-3">
            <small>Belum punya akun? <a href="register.php" class="text-decoration-none fw-semibold text-primary">Daftar di sini</a></small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
