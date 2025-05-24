<?php
include 'includes/dashboard_layout.php';

// Get user data
$user_id = $_SESSION['user_id'];
$user_data = get_user_data($user_id);
?>

<!-- Page Content -->
<div class="container mx-auto px-4">
    <!-- Welcome Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="flex items-center mb-4 md:mb-0">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="user" class="w-6 h-6"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold">Selamat Datang, <?php echo htmlspecialchars($user_data['fullname']); ?></h1>
                    <p class="text-gray-600">Terima kasih telah menjadi bagian dari komunitas penyelamat nyawa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="droplet" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Golongan Darah</h3>
                    <p class="text-2xl font-bold blood-red-text"><?php echo htmlspecialchars($user_data['blood_type']); ?></p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="calendar" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Donor Terakhir</h3>
                    <p class="text-2xl font-bold blood-red-text">-</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="blood-red text-white p-3 rounded-full mr-4">
                    <i data-feather="heart" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Nyawa Diselamatkan</h3>
                    <p class="text-2xl font-bold blood-red-text">0</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Emergency Blood Request -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="blood-red text-white px-6 py-3 flex items-center justify-between">
                    <h2 class="text-xl font-bold">Permintaan Darah Darurat</h2>
                    <i data-feather="alert-triangle" class="w-6 h-6"></i>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold">Golongan Darah A+ dibutuhkan di RS Umum Palu</h3>
                                <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Darurat</span>
                            </div>
                            <p class="text-gray-600 mb-2">Dibutuhkan segera untuk pasien operasi jantung.</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <i data-feather="map-pin" class="w-4 h-4 mr-1"></i>
                                <span>Palu, Sulawesi Tengah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            <!-- Upcoming Events -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="blood-red text-white px-6 py-3 flex items-center justify-between">
                    <h2 class="text-xl font-bold">Event Donor Terdekat</h2>
                    <i data-feather="calendar" class="w-6 h-6"></i>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h3 class="font-semibold mb-2">Donor Darah Massal PMI Kota Palu</h3>
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <i data-feather="calendar" class="w-4 h-4 mr-1"></i>
                                <span>20 Desember 2023</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <i data-feather="map-pin" class="w-4 h-4 mr-1"></i>
                                <span>Kantor PMI Kota Palu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Initialize Feather Icons
    feather.replace();
</script>

