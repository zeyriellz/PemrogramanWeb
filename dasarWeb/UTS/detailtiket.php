<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
header("Location: login.php");
exit();
}

require 'koneksi.php';

$stmt  = $conn->query('SELECT * FROM public."kategoritiket" ORDER BY "id.kategori" ASC');
$tiket = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Daftar Kategori Tiket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Halo, Admin</h2>
        <a href="logout.php" class="btn btn-danger">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

    <!-- Card utama -->
    <div class="card shadow border-0">
        <div class="card-header bg-warning text-dark fw-bold text-center fs-5">
            Daftar Kategori Tiket
        </div>

        <div class="card-body">

            <!-- Tombol navigasi -->
            <div class="d-flex justify-content-between mb-3">
                <a href="index.php" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Kembali ke Beranda
                </a>
                <a href="create.php" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Tiket
                </a>
            </div>

            <!-- Tabel data -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th scope="col" style="width: 60px;">No</th>
                            <th scope="col" style="width: 200px;">Nama Kategori</th>
                            <th scope="col" style="width: 150px;">Usia Pemilik</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col" style="width: 150px;">Harga (Rp)</th>
                            <th scope="col" style="width: 170px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($tiket) > 0): $no = 1; ?>
                            <?php foreach ($tiket as $t): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= htmlspecialchars($t['nama']); ?></td>
                                    <td><?= htmlspecialchars($t['usia']); ?></td>
                                    <td class="text-start"><?= htmlspecialchars($t['deskripsi']); ?></td>
                                    <td>Rp <?= number_format((float)preg_replace('/[^0-9]/', '', $t['harga']), 0, ',', '.'); ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="edit.php?id=<?= $t['id.kategori']; ?>" 
                                                class="btn btn-success btn-sm">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <a href="delete.php?id=<?= $t['id.kategori']; ?>" 
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin hapus data ini?');">
                                                <i class="bi bi-trash"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-muted">Belum ada data tiket.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
