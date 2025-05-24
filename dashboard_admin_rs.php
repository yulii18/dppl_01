<?php
require_once 'includes/dashboard_layout.php';

// Check if user is hospital admin
if ($_SESSION['role'] !== 'admin_rs') {
    redirect('login.php');
}
?>

<!-- Welcome Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <div class="flex items-center">
        <div class="blood-red text-white p-3 rounded-full mr-4">
            <i data-feather="home" class="w-6 h-6"></i>
        </div>
        <div>
            <h1 class="text-2xl font-bold">Dashboard Admin Rumah Sakit</h1>
            <p class="text-gray-600">Manajemen permintaan darah dan stok darah</p>
        </div>
    </div>
</div>

<!-- Sisanya adalah konten yang sama seperti sebelumnya -->

<?php include 'includes/dashboard_footer.php'; ?>