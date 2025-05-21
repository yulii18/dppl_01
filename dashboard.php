<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SIPANDORA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header dengan menu khusus user -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="dashboard.php" class="logo">SIPAN<span>DORA</span></a>
                <button class="mobile-menu-btn">☰</button>
                <ul class="nav-links">
                    <li><a href="dashboard.php" class="active">Beranda</a></li>
                    <li><a href="riwayat_donor.php">Riwayat Donor</a></li>
                    <li><a href="permintaan_darah.php">Permintaan Darah</a></li>
                    <li><a href="profile.php">Profil Saya</a></li>
                    <li><a href="index.php" id="logoutBtn" class="btn">Keluar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Dashboard Content -->
    <section class="dashboard-section">
        <div class="container">
            <div class="dashboard-welcome">
                <h1>Selamat Datang, <span id="userName">User</span>!</h1>
                <p>Status donor terakhir: <span id="lastDonationStatus">Belum pernah donor</span></p>
            </div>

            <div class="dashboard-cards">
                <div class="dashboard-card">
                    <h3>Donor Berikutnya</h3>
                    <p id="nextDonationDate">-</p>
                    <a href="daftar_donor.php" class="btn">Jadwalkan Donor</a>
                </div>

                <div class="dashboard-card">
                    <h3>Permintaan Darah Terdekat</h3>
                    <p id="bloodRequestsCount">0 permintaan</p>
                    <a href="permintaan_darah.php" class="btn">Lihat Semua</a>
                </div>
            </div>

            <div class="quick-actions">
                <h2>Aksi Cepat</h2>
                <div class="action-buttons">
                    <a href="emergency.php" class="btn emergency-btn">Darah Darurat</a>
                    <a href="find-donor.php" class="btn">Cari Pendonor</a>
                    <a href="find-pmi.php" class="btn">Donor Pengganti</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="footer-content">
          <div class="footer-column">
            <h3>Tentang Kami</h3>
            <p>
              SIPANDORA adalah platform inovatif yang menghubungkan pendonor
              darah dengan mereka yang membutuhkan.
            </p>
            <div class="social-links">
              <a href="https://web.facebook.com/palangmerah/about?locale=id_ID" target="_blank"><span>FB</span></a>
              <a href="https://youtube.com/@pmi_tv?si=LvQ3QXdxt2JyqkKn" target="_blank"><span>YT</span></a>
              <a href="https://www.instagram.com/palangmerah_indonesia?igsh=a3l2bnR2Nmw2YXVm" target="_blank"><span>IG</span></a>
              <a href="https://www.pmi.or.id/" target="_blank"><span>WEB</span></a>
            </div>
          </div>

          <div class="footer-column">
            <h3>Layanan</h3>
            <ul class="footer-links">
              <li><a href="permintaan_darah.php">Pencarian Darah</a></li>
              <li><a href="daftar_donor.php">Pendaftaran Donor</a></li>
              <li><a href="jadwal_donor.php">Jadwal Donor</a></li>
              <li><a href="#">Informasi Kesehatan</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h3>Kontak Kami</h3>
            <p><strong>Alamat:</strong> Jl. Kartini No. 20, Lolu Selatan, Kec. Palu Selatan, Kota Palu, Sulawesi Tengah 94235</p>
            <p><strong>Email:</strong> info@sipandora.id</p>
            <p><strong>Telepon:</strong> (021) 1234-5678</p>
            <p><strong>Darurat:</strong> 119 (24 Jam)</p>
          </div>
        </div>

        <div class="footer-bottom">
          <p>&copy; 2023 SIPANDORA. Semua Hak Dilindungi.</p>
        </div>
      </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<?php
session_start();
require_once 'Database.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$db = Database::getInstance();

// Ambil data donor terakhir
$query = "SELECT * FROM Donor_History WHERE user_id = ? ORDER BY donation_date DESC LIMIT 1";
$lastDonation = $db->select($query, [$_SESSION['user_id']]);

// Ambil jumlah permintaan darah
$query = "SELECT COUNT(*) as count FROM Blood_Requests WHERE status = 'active'";
$bloodRequests = $db->select($query);

$userName = $_SESSION['user_name'];
$lastDonationStatus = $lastDonation ? date('d/m/Y', strtotime($lastDonation[0]['donation_date'])) : 'Belum pernah donor';
$nextDonationDate = $lastDonation ? date('d/m/Y', strtotime($lastDonation[0]['donation_date'] . ' +3 months')) : '-';
$bloodRequestsCount = $bloodRequests[0]['count'];
?>