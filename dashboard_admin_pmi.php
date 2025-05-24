<?php
session_start();
require_once 'includes/functions.php';

// Check if user is logged in and is PMI admin
if (!is_logged_in() || $_SESSION['role'] !== 'admin_pmi') {
    redirect('login.php');
}

include 'includes/dashboard_layout.php';
?>

<!-- Main Content -->
<div class="flex-1 overflow-x-hidden overflow-y-auto p-6">
    <!-- Welcome Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="flex items-center">
            <div class="blood-red text-white p-3 rounded-full mr-4">
                <i data-feather="shield" class="w-6 h-6"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Dashboard Admin PMI</h1>
                <p class="text-gray-600">Manajemen donor darah dan permintaan darah</p>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="users" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Pendonor Aktif</h3>
                    <p class="text-2xl font-bold blood-red-text">1,250</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="droplet" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Stok Darah</h3>
                    <p class="text-2xl font-bold blood-red-text">450</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="calendar" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Event Bulan Ini</h3>
                    <p class="text-2xl font-bold blood-red-text">8</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="file-text" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Permintaan Darah</h3>
                    <p class="text-2xl font-bold blood-red-text">25</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities & Blood Stock -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Activities -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Aktivitas Terbaru</h2>
            <div class="space-y-4">
                <!-- Activity items here -->
            </div>
        </div>

        <!-- Blood Stock Overview -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Stok Darah Tersedia</h2>
            <div class="space-y-4">
                <!-- Blood stock items here -->
            </div>
        </div>
    </div>
</div>

<?php include 'includes/dashboard_footer.php'; ?>