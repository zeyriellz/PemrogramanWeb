<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && $password === $admin['password']) {
        $_SESSION['admin_id']   = $admin['id'];
        $_SESSION['admin_name'] = $admin['nama_lengkap'];

        header("Location: detailtiket.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-lg border-0" style="max-width: 380px; width: 100%;">
        <div class="card-body p-4">
            <h2 class="text-center fw-semibold mb-4 text-primary">
                <i class="bi bi-person-circle me-1"></i> Login
            </h2>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger text-center py-2">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" novalidate>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <div class="d-grid">
                    <button type="submit" name="login" class="btn btn-primary fw-semibold">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                    </button>
                </div>
            </form>

            <div class="text-center mt-3 small">
                Belum punya akun? 
                <a href="register.php" class="text-decoration-none fw-semibold text-primary">
                    Daftar di sini
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
