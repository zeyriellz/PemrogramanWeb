<?php
require __DIR__ . '/../../koneksi.php';
$id = (int)($_GET['id'] ?? 0);
$msg = '';

if ($id <= 0) die('ID tidak valid');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $usia = $_POST['usia'] ?? '';
    $deskripsi = $_POST['deskripsi'] ?? '';
    $harga = $_POST['harga'] ?? '';

    if ($nama && $usia && $harga) {
        try {
            $stmt = $conn->prepare("UPDATE kategoritiket SET nama=:nama, usia=:usia, deskripsi=:deskripsi, harga=:harga WHERE id_kategori=:id");
            $stmt->execute([
                ':nama' => $nama,
                ':usia' => $usia,
                ':deskripsi' => $deskripsi,
                ':harga' => $harga,
                ':id' => $id
            ]);
            header('Location: index.php');
            exit;
        } catch (PDOException $e) {
            $msg = "Gagal mengubah: " . $e->getMessage();
        }
    } else {
        $msg = "Nama, usia, dan harga wajib diisi!";
    }
} else {
    $stmt = $conn->prepare("SELECT * FROM kategoritiket WHERE id_kategori=:id");
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$data) die('Data tidak ditemukan');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Kategori Tiket</title>
</head>
<body>
  <h2>Edit Kategori Tiket</h2>
  <?php if ($msg): ?><p style="color:red"><?= htmlspecialchars($msg) ?></p><?php endif; ?>
  <form method="post">
    <label>Nama: <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required></label><br><br>
    <label>Usia: <input type="text" name="usia" value="<?= htmlspecialchars($data['usia']) ?>" required></label><br><br>
    <label>Deskripsi: <textarea name="deskripsi"><?= htmlspecialchars($data['deskripsi']) ?></textarea></label><br><br>
    <label>Harga: <input type="number" name="harga" value="<?= htmlspecialchars($data['harga']) ?>" required></label><br><br>
    <button type="submit">Simpan</button>
    <a href="index.php">Kembali</a>
  </form>
</body>
</html>
