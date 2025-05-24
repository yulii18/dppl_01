CREATE DATABASE IF NOT EXISTS sipandora;
USE sipandora;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nik VARCHAR(16) UNIQUE NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    birthplace VARCHAR(100) NOT NULL,
    birthdate DATE NOT NULL,
    gender ENUM('Laki-laki', 'Perempuan') NOT NULL,
    blood_type ENUM('A', 'B', 'AB', 'O') NOT NULL,
    address TEXT NOT NULL,
    village VARCHAR(100) NOT NULL,
    district VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('pendonor', 'admin_pmi', 'admin_rs') NOT NULL DEFAULT 'pendonor',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tambahkan admin default untuk PMI dan RS
INSERT INTO users (nik, fullname, birthplace, birthdate, gender, blood_type, address, village, district, city, phone, email, password, role)
VALUES 
('1234567890123456', 'Admin PMI', 'Jakarta', '1990-01-01', 'Laki-laki', 'O', 'Jl. PMI No. 1', 'Kebon Jeruk', 'Kebon Jeruk', 'Jakarta Barat', '081234567890', 'admin.pmi@sipandora.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin_pmi'),
('6543210987654321', 'Admin RS', 'Jakarta', '1990-01-01', 'Perempuan', 'AB', 'Jl. RS No. 1', 'Grogol', 'Grogol', 'Jakarta Barat', '089876543210', 'admin.rs@sipandora.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin_rs');