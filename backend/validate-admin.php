<?php
session_start();

// Cek apakah pengguna memiliki session sebagai admin
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['user']) && $_SESSION['role'] === 'admin') {
        echo json_encode(["isAdmin" => true]); // User adalah admin
    } else {
        echo json_encode(["isAdmin" => false]); // Bukan admin
    }
    exit;
}
?>
