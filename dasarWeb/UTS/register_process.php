<?php
session_start();
require 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = trim($_POST['nama_lengkap']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->fetch()) {
        $error = "Username sudah digunakan!";
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $insert = $conn->prepare("
            INSERT INTO admin (nama_lengkap, username, password)
            VALUES (:nama, :username, :password)
        ");
        $insert->execute([
            ':nama' => $nama,
            ':username' => $username,
            ':password' => $hashed
        ]);

        header("Location: authenticate.php?registered=1");
        exit();
    }
}

if (isset($error)) {
    echo "<p style='color:red; text-align:center;'>$error</p>";
    echo "<p style='text-align:center;'><a href='register.php'>Kembali</a></p>";
}
?>
