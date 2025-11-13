<?php
require __DIR__ . '/../../koneksi.php';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $usia = $_POST['usia'] ?? '';
    $deskripsi = $_POST['deskripsi'] ?? '';
    $harga = $_POST['harga'] ?? '';

    if ($nama && $usia && $harga) {
        try {
            $stmt = $conn->prepare("INSERT INTO kategoritiket (nama, usia, deskripsi, harga) VALUES (:nama, :usia, :deskripsi, :harga)");
            $stmt->execute([
                ':nama' => $nama,
                ':usia' => $usia,
                ':deskripsi' => $deskripsi,
                ':harga' => $harga
            ]);
            header('Location: index.php');
            exit;
        } catch (PDOException $e) {
            $msg = "Gagal menyimpan: " . $e->getMessage();
        }
    } else {
        $msg = "Nama, usia, dan harga wajib diisi!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Kategori Tiket</title>
</head>
<body>
  <h2>Tambah Kategori Tiket</h2>
  <?php if ($msg): ?><p style="color:red"><?= htmlspecialchars($msg) ?></p><?php endif; ?>
  <form method="post">
    <label>Nama: <input type="text" name="nama" required></label><br><br>
    <label>Usia: <input type="text" name="usia" required></label><br><br>
    <label>Deskripsi: <textarea name="deskripsi"></textarea></label><br><br>
    <label>Harga: <input type="number" name="harga" required></label><br><br>
    <button type="submit">Simpan</button>
    <a href="index.php">Kembali</a>
  </form>
</body>
</html>
