<?php
session_start();

// Cek apakah user sudah login dan memiliki role admin
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'admin') {
    // Redirect ke halaman login
    header("Location: login-form.php");
    exit; // Hentikan eksekusi script
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome to Admin Panel</h1>
    <p>Only accessible to authorized users.</p>

    <!-- Tombol logout -->
    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
