<?php
require 'koneksi.php';

try {
    $sql = "SELECT * FROM kategoritiket ORDER BY id_kategori";
    $stmt = $conn->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Gagal mengambil data: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Kategori Tiket</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    table { border-collapse: collapse; width: 100%; margin-top: 10px; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #eee; }
    a.btn { padding: 5px 10px; background: #28a745; color: #fff; text-decoration: none; border-radius: 4px; }
    a.btn-danger { background: #dc3545; }
  </style>
</head>
<body>
  <h2>Daftar Kategori Tiket</h2>
  <a href="tambah.php" class="btn">+ Tambah Kategori</a>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($data)): ?>
        <tr><td colspan="6">Belum ada data</td></tr>
      <?php else: ?>
        <?php foreach ($data as $d): ?>
        <tr>
          <td><?= htmlspecialchars($d['id_kategori']) ?></td>
          <td><?= htmlspecialchars($d['nama']) ?></td>
          <td><?= htmlspecialchars($d['usia']) ?></td>
          <td><?= htmlspecialchars($d['deskripsi']) ?></td>
          <td><?= htmlspecialchars($d['harga']) ?></td>
          <td>
            <a href="edit.php?id=<?= $d['id_kategori'] ?>" class="btn">Edit</a>
            <a href="hapus.php?id=<?= $d['id_kategori'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</body>
</html>
