<?php
require __DIR__ . '/koneksi.php';

$err = '';
$id = (int)($_GET['id'] ?? 0);

if ($id <= 0) {
    exit('ID tidak valid.');
}

$stmt = $conn->prepare('SELECT * FROM public."kategoritiket" WHERE "id.kategori" = :id');
$stmt->execute([':id' => $id]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$data) {
    exit('Data tidak ditemukan.');
}

$nama = $data['nama'];
$usia = $data['usia'];
$deskripsi = $data['deskripsi'];
$harga = $data['harga'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $usia = trim($_POST['usia']);
    $deskripsi = trim($_POST['deskripsi']);
    $harga = trim($_POST['harga']);

    if ($nama === '' || $harga === '') {
        $err = 'Nama dan Harga wajib diisi.';
    } else {
        try {
            $update = $conn->prepare('
                UPDATE public."kategoritiket"
                SET "nama" = :nama,
                    "usia" = :usia,
                    "deskripsi" = :deskripsi,
                    "harga" = :harga
                WHERE "id.kategori" = :id
            ');

            $update->execute([
                ':nama' => $nama,
                ':usia' => $usia,
                ':deskripsi' => $deskripsi,
                ':harga' => $harga,
                ':id' => $id
            ]);

            header('Location: detailtiket.php');
            exit;
        } catch (Throwable $e) {
            $err = $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Edit Kategori Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark fw-bold text-center fs-5">
            Edit Kategori Tiket
        </div>
        <div class="card-body">

            <?php if ($err): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($err) ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="nama" value="<?= htmlspecialchars($nama) ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Usia Pemilik</label>
                    <input type="text" name="usia" value="<?= htmlspecialchars($usia) ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" rows="3" class="form-control"><?= htmlspecialchars($deskripsi) ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Tiket (Rp)</label>
                    <input 
                        type="text"
                        name="harga"
                        value="<?= htmlspecialchars($harga) ?>"
                        class="form-control"
                        required
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                    >
                </div>

                <div class="d-flex justify-content-between">
                    <a href="detailtiket.php" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
