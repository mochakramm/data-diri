<?php
session_start(); // Memulai sesi
require 'db_connect.php'; // Menggunakan file koneksi database

// Proses login
if (isset($_POST['login'])) {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    // Ambil data pengguna dari database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $loginUsername);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verifikasi password
    if ($user && password_verify($loginPassword, $user['password'])) {
        $_SESSION['user_id'] = $user['id']; // Simpan user_id di session
        $_SESSION['username'] = $user['username']; // Simpan username di session
        header("Location: welcome.php"); // Arahkan ke halaman selamat datang
        exit();
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles_login.css"> <!-- Anda bisa menambahkan CSS sesuai kebutuhan -->
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>



