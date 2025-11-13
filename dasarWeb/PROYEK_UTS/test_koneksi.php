<?php
require __DIR__ . '/koneksi.php';

try {
    $stmt = $conn->query("SELECT version()");
    $versi = $stmt->fetchColumn();

    echo "Koneksi berhasil ke PostgreSQL!<br>";
    echo "Versi server: " . htmlspecialchars($versi);
} catch (Throwable $e) {
    echo "❌ Koneksi gagal: " . htmlspecialchars($e->getMessage());
}
?>
