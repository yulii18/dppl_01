<?php
session_start();
require_once 'Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = Database::getInstance();
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM Users WHERE email = ?";
    $result = $db->select($query, [$email]);
    
    if ($result && password_verify($password, $result[0]['password'])) {
        $_SESSION['user_id'] = $result[0]['id'];
        $_SESSION['user_name'] = $result[0]['full_name'];
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Email atau password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Donor Darah</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Login Section -->
    <section class="login-section">
        <div class="container">
            <div class="login-container">
                <div class="login-header">
                    <a href="#" class="logo">SIPAN<span>DORA</span></a>
                    <h2>Masuk ke Akun Anda</h2>
                    <p>Silakan masuk untuk mengakses layanan SIPANDORA</p>
                </div>
                
                <form id="loginForm" class="login-form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-with-icon">
                            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-with-icon">
                            <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Ingat saya</label>
                        </div>
                        <a href="#lupa-password">Lupa password?</a>
                    </div>
                    
                    <button type="submit" class="btn" style="width: 100%; padding: 12px; font-size: 16px; margin-bottom: 20px;">
                        <i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i>Masuk
                    </button>
                    
                    <div class="login-footer">
                        <p>Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
                        <p>Dengan masuk, Anda setuju dengan <a href="#">Syarat dan Ketentuan</a> serta <a href="#">Kebijakan Privasi</a> kami.</p>
                    </div>
                </form>
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
              darah dengan mereka yang membutuhkan, serta menyediakan layanan
              respon darurat untuk situasi kritis.
            </p>
            <div class="social-links">
              <a href="#"><span>FB</span></a>
              <a href="#"><span>TW</span></a>
              <a href="#"><span>IG</span></a>
              <a href="#"><span>YT</span></a>
            </div>
          </div>

          <div class="footer-column">
            <h3>Layanan</h3>
            <ul class="footer-links">
              <li><a href="#">Pencarian Darah</a></li>
              <li><a href="#">Pendaftaran Donor</a></li>
              <li><a href="#">Jadwal Donor</a></li>
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

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>