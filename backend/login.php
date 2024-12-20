<?php
session_start();

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh validasi login sederhana
    if ($username === 'admin' && $password === 'md5') {
        $_SESSION['user'] = $username;
        $_SESSION['role'] = 'admin'; // Tetapkan role sebagai admin
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR']; // Simpan IP user

        // Redirect ke halaman admin
        header("Location: admin-panel.php");
        exit;
    } else {
        echo "Username atau password salah!";
    }
}
?>
