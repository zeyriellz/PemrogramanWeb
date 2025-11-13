<?php
require __DIR__ . '/koneksi.php';

$err = '';
$nama = $usia = $deskripsi = $harga = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama       = trim($_POST['nama']);
    $usia       = trim($_POST['usia']);
    $deskripsi  = trim($_POST['deskripsi']);
    $harga      = str_replace('.', '', $_POST['harga']); // Hapus titik agar tersimpan angka murni

    if ($nama === '' || $harga === '') {
        $err = 'Nama dan Harga wajib diisi.';
    } else {
        try {
            $stmt = $conn->prepare('
                INSERT INTO public."kategoritiket" ("nama", "usia", "deskripsi", "harga") 
                VALUES (:nama, :usia, :deskripsi, :harga)
            ');
            $stmt->execute([
                ':nama'       => $nama,
                ':usia'       => $usia,
                ':deskripsi'  => $deskripsi,
                ':harga'      => $harga
            ]);

            header('Location: detailtiket.php');
            exit;
        } catch (Throwable $e) {
            $err = $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Tambah Kategori Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark fw-bold text-center fs-5">
                Tambah Kategori Tiket
            </div>

            <div class="card-body">
                <?php if ($err): ?>
                    <div class="alert alert-danger">
                        <?= htmlspecialchars($err) ?>
                    </div>
                <?php endif; ?>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input 
                            type="text" 
                            name="nama" 
                            value="<?= htmlspecialchars($nama) ?>" 
                            class="form-control" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Usia Pemilik</label>
                        <input 
                            type="text" 
                            name="usia" 
                            value="<?= htmlspecialchars($usia) ?>" 
                            class="form-control"
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea 
                            name="deskripsi" 
                            rows="3" 
                            class="form-control"
                        ><?= htmlspecialchars($deskripsi) ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga Tiket (Rp)</label>
                        <input 
                            type="text" 
                            name="harga" 
                            id="harga" 
                            value="<?= htmlspecialchars($harga) ?>" 
                            class="form-control" 
                            required 
                            oninput="formatRupiah(this)"
                        >
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="detailtiket.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function formatRupiah(el) {
            let angka = el.value.replace(/[^\d]/g, "");
            el.value = angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
