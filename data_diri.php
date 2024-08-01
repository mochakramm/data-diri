<?php
session_start(); // Memulai sesi

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Arahkan ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Reza Rezaldi</title>
    <link rel="stylesheet" href="styles_data_diri.css">
</head>
<body>
    <div class="container">
        <h1>Biodata</h1>
        <p><strong>Nama:</strong> Reza Rezaldi</p>
        <p><strong>Profesi:</strong> Insinyur Komputer</p>
        <p><strong>Lokasi:</strong> Kabupaten Bekasi</p>
        <p><strong>Keahlian:</strong> IT, khususnya pemrograman berbasis web</p>
        <h2>Rencana Saya:</h2>
        <ul>
            <li>Bekerja di bidang frontend maupun backend</li>
            <li>Bekerja di manapun saya bekerja</li>
            <li>Dapat bekerja di bawah tekanan dan bekerja secara tim</li>
        </ul>
    </div>
</body>
</html>
