<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: authenticate.php");
    exit();
}

require 'koneksi.php';

$stmt  = $conn->query('SELECT COUNT(*) AS total FROM public."kategoritiket"');
$total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Halo, <?= htmlspecialchars($_SESSION['admin_name']); ?></h2>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <h4 class="mb-3">Total Kategori Tiket</h4>
                <h2 class="fw-bold text-primary mb-3"><?= $total; ?></h2>
                <a href="detailtiket.php" class="btn btn-primary">
                    Kelola Tiket
                </a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
