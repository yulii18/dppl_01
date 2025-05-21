-- Membuat database SIPANDORA
CREATE DATABASE IF NOT EXISTS sipandora;
USE sipandora;

-- Tabel Users (Pengguna)
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nik VARCHAR(16) UNIQUE NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    golongan_darah ENUM('A', 'B', 'AB', 'O') NOT NULL,
    alamat TEXT NOT NULL,
    kelurahan VARCHAR(50) NOT NULL,
    kecamatan VARCHAR(50) NOT NULL,
    kota VARCHAR(50) NOT NULL,
    pekerjaan VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    is_active BOOLEAN DEFAULT TRUE
);

-- Tabel Donor_History (Riwayat Donor)
CREATE TABLE donor_history (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    tanggal_donor DATE NOT NULL,
    lokasi_donor VARCHAR(100) NOT NULL,
    jenis_donor VARCHAR(50) NOT NULL,
    status ENUM('Berhasil', 'Gagal', 'Pending') NOT NULL,
    poin_donor INT DEFAULT 0,
    catatan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE RESTRICT
);

-- Tabel Blood_Requests (Permintaan Darah)
CREATE TABLE blood_requests (
    id INT PRIMARY KEY AUTO_INCREMENT,
    requester_id INT NOT NULL,
    golongan_darah ENUM('A', 'B', 'AB', 'O') NOT NULL,
    jumlah_unit INT NOT NULL,
    urgency_level ENUM('Normal', 'Urgent', 'Emergency') NOT NULL,
    rumah_sakit VARCHAR(100) NOT NULL,
    alamat_rs TEXT NOT NULL,
    kontak_rs VARCHAR(20) NOT NULL,
    status ENUM('Open', 'In Progress', 'Fulfilled', 'Closed') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (requester_id) REFERENCES users(id) ON DELETE RESTRICT
);

-- Tabel Donation_Schedule (Jadwal Donor)
CREATE TABLE donation_schedule (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    tanggal_jadwal DATE NOT NULL,
    waktu_jadwal TIME NOT NULL,
    lokasi VARCHAR(100) NOT NULL,
    status ENUM('Scheduled', 'Completed', 'Cancelled') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE RESTRICT
);

-- Tabel PMI_Locations (Lokasi PMI)
CREATE TABLE pmi_locations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_pmi VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    kota VARCHAR(50) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    jam_operasional VARCHAR(100) NOT NULL,
    koordinat_lat DECIMAL(10,8) NOT NULL,
    koordinat_long DECIMAL(11,8) NOT NULL,
    status ENUM('Active', 'Inactive') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Membuat indeks untuk optimasi pencarian
CREATE INDEX idx_users_nik ON users(nik);
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_donor_history_tanggal ON donor_history(tanggal_donor);
CREATE INDEX idx_blood_requests_status ON blood_requests(status);
CREATE INDEX idx_donation_schedule_tanggal ON donation_schedule(tanggal_jadwal);
CREATE INDEX idx_pmi_locations_kota ON pmi_locations(kota);