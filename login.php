<?php include 'includes/config.php'; ?>

<main class="min-h-screen flex items-center justify-center bg-gradient-to-br from-red-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-6 bg-white rounded-xl shadow-2xl p-8">
        <!-- Logo Section -->
        <div class="text-center">
            <div class="flex justify-center mb-6">
                <div class="blood-red p-4 rounded-full shadow-lg">
                    <i data-feather="droplet" class="text-white w-10 h-10"></i>
                </div>
            </div>
            <h2 class="text-2xl font-bold mb-2">
                <span class="text-red-600">SIPAN</span><span class="text-blue-900">DORA</span>
            </h2>
            <h3 class="text-xl font-semibold text-blue-900 mb-2">Masuk ke Akun Anda</h3>
            <p class="text-sm text-gray-600">Silakan masuk untuk mengakses layanan SIPANDORA</p>
        </div>

        <form class="space-y-4" action="process_login.php" method="POST">
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i data-feather="mail" class="h-5 w-5 text-red-500"></i>
                    </div>
                    <input id="email" name="email" type="email" required 
                           class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500"
                           placeholder="admin.rs@sipandora.com">
                </div>
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i data-feather="lock" class="h-5 w-5 text-red-500"></i>
                    </div>
                    <input id="password" name="password" type="password" required 
                           class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500"
                           placeholder="••••••••">
                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-700" id="togglePassword">
                        <i data-feather="eye" class="h-5 w-5" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" 
                           class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                </div>
                <a href="#" class="text-sm text-red-600 hover:text-red-700">Lupa password?</a>
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full flex justify-center items-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                <i data-feather="log-in" class="h-5 w-5 mr-2"></i>
                Masuk
            </button>

            <!-- Register Link -->
            <div class="text-center text-sm">
                <p>Belum punya akun? <a href="register.php" class="text-red-600 hover:text-red-700">Daftar sekarang</a></p>
            </div>

            <!-- Terms and Privacy -->
            <div class="text-center text-xs text-gray-600">
                <p>Dengan masuk, Anda setuju dengan <a href="#" class="text-red-600 hover:text-red-700">Syarat dan Ketentuan</a> serta <a href="#" class="text-red-600 hover:text-red-700">Kebijakan Privasi</a> kami.</p>
            </div>
        </form>
    </div>
</main>

<script>
    // Initialize Feather icons
    feather.replace();

    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.setAttribute('data-feather', 'eye-off');
        } else {
            passwordInput.type = 'password';
            eyeIcon.setAttribute('data-feather', 'eye');
        }
        feather.replace();
    });
</script>

<?php include 'includes/footer.php'; ?>