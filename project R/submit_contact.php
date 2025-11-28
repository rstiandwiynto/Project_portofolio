<?php
// Matikan semua output sebelumnya takutnya ada
ob_start();
error_reporting(0);
ini_set('display_errors', 0);

// Set header JSON
header('Content-Type: application/json; charset=utf-8');

include("koneksi.php");

// Bersihin buffer
ob_clean();

try {
    // Cek variable dari koneksi.php
    if (!isset($host) || !isset($db) || !isset($user)) {
        echo json_encode(['status' => 'error', 'message' => 'Konfigurasi database tidak ditemukan!']);
        exit;
    }

    // Buat koneksi PDO
    $koneksi = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Cek method POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode(['status' => 'error', 'message' => 'Method tidak diizinkan!']);
        exit;
    }
    
    // Ambil data dari form
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validasi data kosong
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Semua field harus diisi!']);
        exit;
    }
    
    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Format email tidak valid!']);
        exit;
    }
    
    // Sanitasi data
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    
    // Insert ke database
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);
    
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Pesan berhasil dikirim! Terima kasih. Akan Segera di balas, tunggu yaa!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan pesan!']);
    }
    
} catch(PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    
} catch(Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
}

// Tutup koneksi
$koneksi = null;

// Kirim output
ob_end_flush();
?>