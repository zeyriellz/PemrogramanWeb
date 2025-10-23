<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Tiket Candi Borobudur</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php 
    include 'koneksi.php';

    $stmt = $stmt = $conn->query('SELECT * FROM public."kategoritiket" ORDER BY "id.kategori" ASC');
    $tiket = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="detail-tiket">
    <h1>Detail Tiket Candi Borobudur</h1>
    <p class="subjudul">Berikut adalah informasi lengkap mengenai kategori tiket masuk Candi Borobudur</p>

    <div class="tabel-tiket-container">
        <table class="tabel-tiket">
        <thead>
            <tr>
            <th>Nomor</th>
            <th>Kategori Tiket</th>
            <th>Usia Pemilik</th>
            <th>Deskripsi</th>
            <th>Harga Tiket</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($tiket as $data): 
            ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($data['nama']); ?></td>
            <td><?= htmlspecialchars($data['usia']); ?></td>
            <td><?= htmlspecialchars($data['deskripsi']); ?></td>
            <td><?= htmlspecialchars($data['harga']); ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="back-btn-container">
        <a href="index.html" class="back-btn">Kembali ke Beranda</a>
    </div>
    </section>

</body>
</html>
