<?php include 'includes/header.php'; ?>

<main class="pt-16"> <!-- Add pt-16 to account for fixed navbar height -->
    <!-- Hero Section dengan Background Image -->
    <section id="beranda" class="relative blood-red text-white py-24">
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('https://images.unsplash.com/photo-1615461066841-6116e61058f4?auto=format&fit=crop&q=80'); opacity: 0.2;"></div>
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center relative z-10">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Donor Darah Selamatkan Nyawa</h1>
                <p class="text-xl mb-6">Setetes darah Anda bisa menjadi harapan bagi mereka yang membutuhkan. Mari bergabung menjadi pendonor darah.</p>
                <div class="flex gap-4">
                    <a href="register.php" class="bg-white blood-red-text px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition inline-block">
                        <i data-feather="user-plus" class="w-5 h-5 inline-block mr-2"></i>Daftar Sekarang
                    </a>
                    <a href="#layanan" class="border-2 border-white text-white px-6 py-3 rounded-lg font-medium hover:bg-white hover:text-red-600 transition inline-block">
                        <i data-feather="info" class="w-5 h-5 inline-block mr-2"></i>Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://images.unsplash.com/photo-1615461066841-6116e61058f4?auto=format&fit=crop&q=80" alt="Donor Darah" class="w-4/5 rounded-lg shadow-2xl transform hover:scale-105 transition duration-300">
            </div>
        </div>
    </section>

        <!-- Layanan Section dengan Cards -->
        <section id="layanan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 blood-red-text">Layanan Darurat</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Kami menyediakan layanan cepat untuk situasi darurat yang membutuhkan darah atau bantuan medis segera.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition group">
                    <div class="blood-red text-white p-4 rounded-full w-16 h-16 mb-6 group-hover:scale-110 transition">
                        <i data-feather="search" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Cari Donor</h3>
                    <p class="text-gray-600">Temukan donor darah yang sesuai dengan kebutuhan Anda secara cepat.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition group">
                    <div class="blood-red text-white p-4 rounded-full w-16 h-16 mb-6 group-hover:scale-110 transition">
                        <i data-feather="calendar" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Jadwal Donor</h3>
                    <p class="text-gray-600">Atur jadwal donor darah Anda dengan mudah dan fleksibel.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition group">
                    <div class="blood-red text-white p-4 rounded-full w-16 h-16 mb-6 group-hover:scale-110 transition">
                        <i data-feather="phone-call" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kontak Darurat</h3>
                    <p class="text-gray-600">Hubungi kami 24/7 untuk kebutuhan darurat donor darah.</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Stats Section dengan Animasi -->
        <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-8 rounded-xl shadow-lg blood-light transform hover:-translate-y-2 transition duration-300">
                    <div class="blood-red text-white p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i data-feather="users" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-4xl font-bold blood-red-text mb-2" id="donor-count">1,234</h3>
                    <p class="text-gray-700 text-lg">Pendonor Terdaftar</p>
                </div>
                <div class="p-8 rounded-xl shadow-lg blood-light transform hover:-translate-y-2 transition duration-300">
                    <div class="blood-red text-white p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i data-feather="activity" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-4xl font-bold blood-red-text mb-2" id="request-count">567</h3>
                    <p class="text-gray-700 text-lg">Permintaan Darah</p>
                </div>
                <div class="p-8 rounded-xl shadow-lg blood-light transform hover:-translate-y-2 transition duration-300">
                    <div class="blood-red text-white p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i data-feather="heart" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-4xl font-bold blood-red-text mb-2" id="saved-count">890</h3>
                    <p class="text-gray-700 text-lg">Nyawa Diselamatkan</p>
                </div>
            </div>
        </div>
    </section>

     <!-- About Section -->
     <section id="tentang" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold mb-6 blood-red-text">Tentang Kami</h2>
                    <p class="text-gray-600 mb-4">SIPANDORA (Sistem Pendonor Darah dan Respon Darurat) adalah platform inovatif yang menghubungkan pendonor darah dengan mereka yang membutuhkan.</p>
                    <p class="text-gray-600 mb-6">Kami berkomitmen untuk menyediakan solusi cepat dan efisien dalam manajemen donor darah, terutama dalam situasi darurat yang membutuhkan respons cepat.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-red-600"><i data-feather="facebook" class="w-6 h-6"></i></a>
                        <a href="#" class="text-gray-600 hover:text-red-600"><i data-feather="twitter" class="w-6 h-6"></i></a>
                        <a href="#" class="text-gray-600 hover:text-red-600"><i data-feather="instagram" class="w-6 h-6"></i></a>
                        <a href="#" class="text-gray-600 hover:text-red-600"><i data-feather="youtube" class="w-6 h-6"></i></a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div id="map" class="h-64 md:h-80 rounded-lg shadow-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Elegant Contact Section -->
<section id="kontak" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold blood-red-text mb-4">Hubungi Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami siap membantu Anda 24/7. Hubungi kami melalui berbagai cara berikut:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="space-y-8">
                <!-- Contact Card 1 -->
                <div class="flex items-start space-x-6 p-6 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div class="blood-red p-3 rounded-full">
                        <i data-feather="map-pin" class="w-6 h-6 text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Lokasi Kami</h3>
                        <p class="text-gray-600">Jl. PMI No. 123, Kota Malang</p>
                        <a href="#" class="inline-block mt-3 blood-red-text font-medium flex items-center">
                            Lihat di Peta <i data-feather="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Card 2 -->
                <div class="flex items-start space-x-6 p-6 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div class="blood-red p-3 rounded-full">
                        <i data-feather="phone" class="w-6 h-6 text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Telepon Darurat</h3>
                        <p class="text-gray-600">+62 812 3456 7890 (24 Jam)</p>
                        <p class="text-gray-600">+62 822 9876 5432 (WhatsApp)</p>
                    </div>
                </div>

                <!-- Contact Card 3 -->
                <div class="flex items-start space-x-6 p-6 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div class="blood-red p-3 rounded-full">
                        <i data-feather="mail" class="w-6 h-6 text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Email Kami</h3>
                        <p class="text-gray-600">info@sipandora.com</p>
                        <p class="text-gray-600">darurat@sipandora.com</p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="pt-4">
                    <h4 class="text-lg font-medium mb-4">Media Sosial</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="blood-red p-3 rounded-full text-white hover:bg-red-700 transition">
                            <i data-feather="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="blood-red p-3 rounded-full text-white hover:bg-red-700 transition">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="blood-red p-3 rounded-full text-white hover:bg-red-700 transition">
                            <i data-feather="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="blood-red p-3 rounded-full text-white hover:bg-red-700 transition">
                            <i data-feather="youtube" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-sm">
                <h3 class="text-xl font-semibold mb-6 blood-red-text">Kirim Pesan</h3>
                <form class="space-y-5">
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Nama Lengkap</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-feather="user" class="w-5 h-5 text-gray-400"></i>
                            </div>
                            <input type="text" id="name" class="pl-10 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Nama Anda">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Alamat Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-feather="mail" class="w-5 h-5 text-gray-400"></i>
                            </div>
                            <input type="email" id="email" class="pl-10 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="email@contoh.com">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-gray-700 mb-2">Subjek</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-feather="file-text" class="w-5 h-5 text-gray-400"></i>
                            </div>
                            <input type="text" id="subject" class="pl-10 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Subjek pesan">
                        </div>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 pt-3 flex items-start pointer-events-none">
                                <i data-feather="message-square" class="w-5 h-5 text-gray-400"></i>
                            </div>
                            <textarea id="message" rows="4" class="pl-10 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Tulis pesan Anda..."></textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full blood-red text-white py-3 px-6 rounded-lg font-medium hover:bg-red-700 transition flex items-center justify-center">
                        <i data-feather="send" class="w-5 h-5 mr-2"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- CTA Section dengan Background Image -->
    <section class="relative py-20 bg-red-600">
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('https://images.unsplash.com/photo-1612277795421-9bc7706a4a34?auto=format&fit=crop&q=80'); opacity: 0.2;"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Menjadi Pahlawan?</h2>
            <p class="text-white text-xl mb-8 max-w-2xl mx-auto">Bergabunglah dengan kami dan jadilah bagian dari komunitas yang peduli terhadap sesama.</p>
            <a href="register.php" class="bg-white blood-red-text px-8 py-4 rounded-lg font-medium hover:bg-gray-100 transition inline-flex items-center">
                <i data-feather="heart" class="w-5 h-5 mr-2"></i>
                Mulai Donor Sekarang
            </a>
        </div>
    </section>
</main>



<!-- Tambahkan script untuk animasi counter -->
<script>
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100;
        const duration = 2000; // 2 seconds
        const interval = duration / 100;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                clearInterval(timer);
                current = target;
            }
            element.textContent = Math.floor(current).toLocaleString();
        }, interval);
    }

    // Start animation when elements are in viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const target = parseInt(element.textContent);
                animateCounter(element, target);
                observer.unobserve(element);
            }
        });
    });

    document.querySelectorAll('[id$="-count"]').forEach(counter => {
        observer.observe(counter);
    });
</script>

</main>

<script>
    // Animate stats counter
    function animateCounter(elementId, target) {
        let current = 0;
        const increment = target / 100;
        const element = document.getElementById(elementId);
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                clearInterval(timer);
                current = target;
            }
            element.textContent = Math.floor(current).toLocaleString();
        }, 10);
    }
    
    // Initialize counters when section is in view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter('donor-count', 1250);
                animateCounter('request-count', 890);
                animateCounter('saved-count', 3420);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    observer.observe(document.querySelector('.bg-white'));
    
    // Initialize map
    document.addEventListener('DOMContentLoaded', function() {
        const map = L.map('map').setView([-0.8986, 119.8506], 13);
        
        L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        }).addTo(map);
        
        // Add marker for SIPANDORA office
        L.marker([-0.8986, 119.8506]).addTo(map)
            .bindPopup('<b>SIPANDORA</b><br>Jl. Karimi No. 20, Palu')
            .openPopup();
    });
</script>

<?php include 'includes/footer.php'; ?>

<script>
// Highlight active nav link based on scroll position
window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav a');
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;
        const id = section.getAttribute('id');
        
        if(window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            navLinks.forEach(link => {
                link.classList.remove('border-b-2', 'border-white');
                if(link.getAttribute('href').includes(id)) {
                    link.classList.add('border-b-2', 'border-white');
                }
            });
        }
    });
});
</script>
