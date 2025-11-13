<?php
require __DIR__ . '/../../koneksi.php';
$id = (int)($_GET['id'] ?? 0);

if ($id > 0) {
    try {
        $stmt = $conn->prepare("DELETE FROM kategoritiket WHERE id_kategori = :id");
        $stmt->execute([':id' => $id]);
    } catch (PDOException $e) {
        die("Gagal menghapus: " . $e->getMessage());
    }
}
header('Location: index.php');
exit;
?>
