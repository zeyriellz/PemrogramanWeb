<?php
session_start();

if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

<div class="card shadow-lg border-0" style="width: 360px; border-radius: 15px;">
    <div class="card-body p-4">
        <h3 class="text-center mb-4 fw-semibold text-success">Register Admin</h3>

        <form action="register_process.php" method="POST">
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <button type="submit" name="register" class="btn btn-success w-100 py-2 fw-semibold">
                Register
            </button>
        </form>

        <div class="text-center mt-3">
            <small>Sudah punya akun? 
                <a href="authenticate.php" class="text-decoration-none fw-semibold text-success">Login di sini</a>
            </small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
