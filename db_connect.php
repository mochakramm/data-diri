<?php
$host = "localhost"; // Ganti dengan alamat host Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "data_diri"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "";

// Jangan lupa untuk menutup koneksi setelah selesai
$conn->close();
?>
