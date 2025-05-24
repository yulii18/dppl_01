<?php
session_start();
require_once 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST['email']);
    $password = $_POST['password'];
    
    $conn = db_connect();
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['alert'] = [
            'type' => 'success',
            'title' => 'Berhasil!',
            'text' => 'Login berhasil. Selamat datang!'
        ];
        
        if ($user['role'] === 'admin_pmi') {
            header("Location: dashboard_admin_pmi.php");
            exit();
        } elseif ($user['role'] === 'admin_rs') {
            header("Location: dashboard_admin_rs.php");
            exit();
        } else {
            header("Location: dashboard_pengguna.php");
            exit();
        }
    } else {
        $_SESSION['alert'] = [
            'type' => 'error',
            'title' => 'Gagal!',
            'text' => 'Email atau password salah!'
        ];
        header("Location: login.php");
        exit();
    }
}