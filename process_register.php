<?php
require_once 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = db_connect();
    
    // Sanitize input
    $nik = sanitize_input($_POST['nik']);
    $fullname = sanitize_input($_POST['fullname']);
    $birthplace = sanitize_input($_POST['birthplace']);
    $birthdate = sanitize_input($_POST['birthdate']);
    $gender = sanitize_input($_POST['gender']);
    $blood_type = sanitize_input($_POST['blood_type']);
    $address = sanitize_input($_POST['address']);
    $village = sanitize_input($_POST['village']);
    $district = sanitize_input($_POST['district']);
    $city = sanitize_input($_POST['city']);
    $phone = sanitize_input($_POST['phone']);
    $email = sanitize_input($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try {
        $stmt = $conn->prepare("INSERT INTO users (nik, fullname, birthplace, birthdate, gender, blood_type, 
            address, village, district, city, phone, email, password, role) 
            VALUES (:nik, :fullname, :birthplace, :birthdate, :gender, :blood_type, 
            :address, :village, :district, :city, :phone, :email, :password, 'pendonor')");
        
        $stmt->bindParam(':nik', $nik);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':birthplace', $birthplace);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':blood_type', $blood_type);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':village', $village);
        $stmt->bindParam(':district', $district);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        $stmt->execute();
        redirect('login.php');
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}