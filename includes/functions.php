<?php
// Fungsi untuk koneksi database
function db_connect() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sipandora";
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Koneksi gagal: " . $e->getMessage();
        exit;
    }
}

// Fungsi untuk validasi input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Fungsi untuk menampilkan alert
function show_alert($type, $message) {
    echo "<script>
        Swal.fire({
            icon: '$type',
            title: '$message',
            showConfirmButton: false,
            timer: 1500
        });
    </script>";
}

// Fungsi untuk memeriksa login
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Fungsi untuk redirect
function redirect($url) {
    header("Location: $url");
    exit;
}

// Fungsi untuk mendapatkan data pengguna
function get_user_data($user_id) {
    $conn = db_connect();
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Fungsi untuk mengecek golongan darah
function check_blood_type($blood_type) {
    $valid_types = ['A', 'B', 'AB', 'O'];
    return in_array($blood_type, $valid_types);
}
?>