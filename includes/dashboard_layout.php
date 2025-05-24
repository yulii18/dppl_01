<?php
session_start();
require_once 'functions.php';

// Check if user is logged in
if (!is_logged_in()) {
    redirect('login.php');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPANDORA - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .blood-red { background-color: #cc0000; }
        .blood-red-text { color: #cc0000; }
        .blood-dark { background-color: #990000; }
        .blood-light { background-color: #ffcccc; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="blood-red w-64 flex-shrink-0 hidden md:block">
            <div class="flex items-center justify-center h-16 blood-dark">
                <span class="text-white text-xl font-bold">SIPANDORA</span>
            </div>
            <nav class="mt-4">
                <?php if ($_SESSION['role'] === 'admin_pmi'): ?>
                <a href="dashboard_admin_pmi.php" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="home" class="w-5 h-5 mr-3"></i> Dashboard
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="users" class="w-5 h-5 mr-3"></i> Pendonor
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="calendar" class="w-5 h-5 mr-3"></i> Event Donor
                </a>
                <?php elseif ($_SESSION['role'] === 'admin_rs'): ?>
                <a href="dashboard_admin_rs.php" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="home" class="w-5 h-5 mr-3"></i> Dashboard
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="droplet" class="w-5 h-5 mr-3"></i> Stok Darah
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="file-text" class="w-5 h-5 mr-3"></i> Permintaan
                </a>
                <?php else: ?>
                <a href="dashboard_pengguna.php" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="home" class="w-5 h-5 mr-3"></i> Dashboard
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="user" class="w-5 h-5 mr-3"></i> Profil
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-red-900">
                    <i data-feather="clock" class="w-5 h-5 mr-3"></i> Riwayat Donor
                </a>
                <?php endif; ?>
                <a href="logout.php" class="flex items-center px-6 py-3 text-white hover:bg-red-900 mt-auto">
                    <i data-feather="log-out" class="w-5 h-5 mr-3"></i> Keluar
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <button class="md:hidden text-gray-600" id="mobile-menu-button">
                        <i data-feather="menu" class="w-6 h-6"></i>
                    </button>
                    <div class="flex items-center">
                        <span class="text-gray-800"><?php echo $_SESSION['fullname'] ?? 'User'; ?></span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">