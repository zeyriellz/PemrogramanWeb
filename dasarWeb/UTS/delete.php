<?php
require __DIR__ . '/koneksi.php';

$id = (int)($_GET['id'] ?? 0);

if ($id <= 0) {
    http_response_code(400);
    exit('ID tidak valid.');
}

try {
    $stmt = $conn->prepare('DELETE FROM public."kategoritiket" WHERE "id.kategori" = :id');
    $stmt->execute([':id' => $id]);

    header('Location: detailtiket.php');
    exit;
} catch (Throwable $e) {
    echo '<div class="alert alert-danger">Gagal menghapus: ' . htmlspecialchars($e->getMessage()) . '</div>';
}
?>
