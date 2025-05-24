<?php include 'includes/config.php'; ?>

<main class="min-h-screen flex items-center justify-center bg-gradient-to-br from-red-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white rounded-xl shadow-2xl p-8">
        <div class="text-center">
            <h2 class="text-2xl font-bold">
                <span class="text-red-600">SIPAN</span><span class="text-blue-900">DORA</span>
            </h2>
            <h3 class="mt-2 text-xl font-semibold text-blue-900">Form Pendaftaran Donor Darah</h3>
            <p class="mt-2 text-sm text-gray-600">Silakan isi data diri Anda dengan lengkap dan benar</p>
        </div>

        <form class="mt-8 space-y-4" action="process_register.php" method="POST">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                    <input type="text" id="nik" name="nik" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan 16 digit NIK">
                </div>

                <div class="col-span-1">
                    <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="fullname" name="fullname" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan nama lengkap">
                </div>

                <div class="col-span-1">
                    <label for="birthplace" class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                    <input type="text" id="birthplace" name="birthplace" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan tempat lahir">
                </div>

                <div class="col-span-1">
                    <label for="birthdate" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                    <input type="date" id="birthdate" name="birthdate" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="hh/bb/tttt">
                </div>

                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                    <div class="flex space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="Laki-laki" required
                                   class="form-radio text-red-600 focus:ring-red-500">
                            <span class="ml-2">Laki-Laki</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="Perempuan"
                                   class="form-radio text-red-600 focus:ring-red-500">
                            <span class="ml-2">Perempuan</span>
                        </label>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="blood_type" class="block text-sm font-medium text-gray-700 mb-1">Golongan Darah</label>
                    <select id="blood_type" name="blood_type" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500">
                        <option value="">Pilih golongan darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>

                <div class="col-span-2">
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap</label>
                    <textarea id="address" name="address" required rows="3"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                              placeholder="Masukkan alamat lengkap"></textarea>
                </div>

                <div class="col-span-1">
                    <label for="village" class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
                    <input type="text" id="village" name="village" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan kelurahan">
                </div>

                <div class="col-span-1">
                    <label for="district" class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
                    <input type="text" id="district" name="district" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan kecamatan">
                </div>

                <div class="col-span-1">
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Kota/Kabupaten</label>
                    <input type="text" id="city" name="city" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan kota/kabupaten">
                </div>

                <div class="col-span-1">
                    <label for="job" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                    <input type="text" id="job" name="job" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan pekerjaan">
                </div>

                <div class="col-span-1">
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan nomor telepon">
                </div>

                <div class="col-span-1">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                           placeholder="Masukkan email">
                </div>

                <div class="col-span-1">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500"
                               placeholder="Masukkan password">
                        <button type="button" onclick="togglePassword()" class="absolute right-3 top-2">
                            <i data-feather="eye" class="w-5 h-5 text-gray-500"></i>
                        </button>
                    </div>
                </div>

                <!-- Hidden input for role -->
                <input type="hidden" name="role" value="user">
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Daftar Sekarang
                </button>
            </div>

            <div class="text-center text-sm">
                <p>Sudah punya akun? <a href="login.php" class="text-red-600 hover:text-red-700">Login disini</a></p>
            </div>
        </form>
    </div>
</main>

<script>
    function togglePassword() {
    const passwordInput = document.getElementById('password');
    const icon = document.querySelector('[data-feather="eye"]');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.setAttribute('data-feather', 'eye-off');
    } else {
        passwordInput.type = 'password';
        icon.setAttribute('data-feather', 'eye');
    }
    feather.replace();
}
</script>

<?php include 'includes/footer.php'; ?>
