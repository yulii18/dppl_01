<?php
session_start();

// Hapus semua data session
$_SESSION = array();

// Hapus cookie session jika ada
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Hancurkan session
session_destroy();

// Set pesan logout
$_SESSION['alert'] = [
    'type' => 'success',
    'title' => 'Berhasil Logout',
    'text' => 'Anda telah berhasil keluar dari sistem'
];

// Redirect ke halaman login
header('Location: login.php');
exit;
?>