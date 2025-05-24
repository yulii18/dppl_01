<?php // Pastikan tidak ada spasi/karakter sebelum ini
session_start();
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPANDORA - Sistem Pendonor Darah dan Respon Darurat</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.2/feather.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        .blood-red {
            background-color: #cc0000;
        }
        .blood-red-text {
            color: #cc0000;
        }
        .blood-dark {
            background-color: #990000;
        }
        .blood-light {
            background-color: #ffcccc;
        }
        
        /* Navbar Styles */
        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            transform: translateY(-2px);
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 70%;
        }
        
        .nav-link.active {
            font-weight: 600;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        /* Mobile menu transition */
        #mobile-menu {
            transition: all 0.3s ease-out;
            max-height: 0;
            overflow: hidden;
        }
        
        #mobile-menu.show {
            max-height: 500px;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <header class="blood-red text-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i data-feather="droplet" class="text-white"></i>
                    <h1 class="text-2xl font-bold">SIPANDORA</h1>
                </div>
                <nav class="hidden md:flex space-x-2">
                    <a href="index.php#beranda" class="nav-link >">Beranda</a>
                    <a href="index.php#donor" class="nav-link">Donor Darah</a>
                    <a href="index.php#layanan" class="nav-link">Layanan</a>
                    <a href="index.php#tentang" class="nav-link">Tentang Kami</a>
                    <a href="index.php#kontak" class="nav-link">Kontak</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <?php if (is_logged_in()): ?>
                        <a href="<?php echo $_SESSION['role'] === 'admin_pmi' ? 'dashboard_admin_pmi.php' : ($_SESSION['role'] === 'admin_rs' ? 'dashboard_admin_rs.php' : 'dashboard_pengguna.php'); ?>" 
                           class="bg-white blood-red-text px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">
                            Dashboard
                        </a>
                    <?php else: ?>
                        <a href="login.php" class="nav-link">Masuk</a>
                        <a href="register.php" class="bg-white blood-red-text px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">
                            Daftar
                        </a>
                    <?php endif; ?>
                </div>
                <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="md:hidden blood-dark" id="mobile-menu">
            <div class="container mx-auto px-4 py-2 flex flex-col space-y-2">
                <a href="index.php#beranda" class="nav-link py-2 ?>">Beranda</a>
                <a href="index.php#donor" class="nav-link py-2">Donor Darah</a>
                <a href="index.php#layanan" class="nav-link py-2">Layanan</a>
                <a href="index.php#tentang" class="nav-link py-2">Tentang Kami</a>
                <a href="index.php#kontak" class="nav-link py-2">Kontak</a>
                <?php if (!is_logged_in()): ?>
                    <a href="login.php" class="nav-link py-2">Masuk</a>
                    <a href="register.php" class="bg-white blood-red-text px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition text-center">
                        Daftar
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('show');
            
            // Toggle icon between menu and x
            const icon = this.querySelector('i');
            if (menu.classList.contains('show')) {
                feather.icons['x'].replace(icon);
            } else {
                feather.icons['menu'].replace(icon);
            }
        });
        
        // Feather icons
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
            
            // Active link based on scroll position
            const navLinks = document.querySelectorAll('.nav-link[href*="#"]');
            
            window.addEventListener('scroll', () => {
                let fromTop = window.scrollY + 100;
                
                navLinks.forEach(link => {
                    let section = document.querySelector(link.hash);
                    
                    if (section && 
                        section.offsetTop <= fromTop && 
                        section.offsetTop + section.offsetHeight > fromTop) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            });
            
            // Smooth scroll for anchor links
            document.querySelectorAll('.nav-link[href*="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        const mobileMenu = document.getElementById('mobile-menu');
                        if (mobileMenu.classList.contains('show')) {
                            mobileMenu.classList.remove('show');
                            const menuButton = document.getElementById('mobile-menu-button');
                            feather.icons['menu'].replace(menuButton.querySelector('i'));
                        }
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Perbaikan untuk link yang bisa diklik
            document.querySelectorAll('nav a').forEach(link => {
                if(link.hash) {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.hash);
                        if(target) {
                            window.scrollTo({
                                top: target.offsetTop - 80,
                                behavior: 'smooth'
                            });
                            // Update URL tanpa reload
                            history.pushState(null, null, this.hash);
                        }
                    });
                }
            });
        });
    </script>
    <style>
        /* Hapus deklarasi border yang berlebihan */
        .nav-link {
            border-bottom: none;
        }
        
        /* Sederhanakan pseudo-element */
        <style>
            .nav-link::after {
                content: '';
                display: block;
                width: 50%; /* Mengurangi panjang garis menjadi 50% dari lebar menu */
                height: 2px;
                background: white;
                transition: width 0.3s;
                margin: 0 auto; /* Pusatkan garis */
            }
            
            .nav-link:hover::after {
                width: 80%; /* Sedikit lebih panjang saat hover */
            }
            
            .nav-link.active::after {
                width: 80%; /* Panjang saat aktif */
            }
        </style>
    </style>