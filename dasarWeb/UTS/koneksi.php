<?php
$host     = "localhost";
$port     = "5432";
$dbname   = "db_tiketcandi";
$user     = "postgres";
$password = "123";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi ke database gagal: " . $e->getMessage());
}
?>
