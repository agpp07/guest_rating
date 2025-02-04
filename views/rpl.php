<?php
session_start(); // Memulai session untuk menyimpan data antar halaman

// Termasuk file yang diperlukan
include_once '../proses/database.php';  // Pastikan file database.php di-include
include_once '../proses/FeedbackController.php';  // Termasuk controller yang akan menangani penyimpanan data

// Membuat instance dari koneksi database
$database = new Database();
$db = $database->getConnection(); // Mendapatkan objek koneksi
$feedbackController = new FeedbackController($db); // Membuat instance FeedbackController

// Memeriksa apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil semua data dari session
    $keramahan = $_SESSION['keramahan'] ?? '';
    $kebersihan_service = $_SESSION['kebersihan_service'] ?? '';
    $ketepatan_waktu_pelayanan = $_SESSION['ketepatan_waktu_pelayanan'] ?? '';
    $knowledge = $_SESSION['knowledge'] ?? '';
    $komentar_service = $_SESSION['komentar_service'] ?? '';

    $kebersihan_alat = $_SESSION['kebersihan_alat'] ?? '';
    $tampilan_makanan = $_SESSION['tampilan_makanan'] ?? '';
    $waktu_memasak = $_SESSION['waktu_memasak'] ?? '';
    $cita_rasa = $_SESSION['cita_rasa'] ?? '';
    $teknik_memasak = $_SESSION['teknik_memasak'] ?? '';
    $penyajian = $_SESSION['penyajian'] ?? '';
    $komentar_food = $_SESSION['komentar_food'] ?? '';

    $dekorasi = $_SESSION['dekorasi'] ?? '';
    $hiburan = $_SESSION['hiburan'] ?? '';
    $acara = $_SESSION['acara'] ?? '';
    $komentar_mice = $_SESSION['komentar_mice'] ?? '';

    $tampilan_aplikasi = $_POST['tampilan_aplikasi'] ?? '';  // Ambil dari form di rpl.php
    $fungsi_sistem = $_POST['fungsi_sistem'] ?? '';  // Ambil dari form di rpl.php
    $komentar_rpl = $_POST['komentar_rpl'] ?? '';  // Ambil dari form di rpl.php

    // Simpan semua data ke database menggunakan controller
    if ($feedbackController->saveFeedback(
        $keramahan,
        $kebersihan_service,
        $ketepatan_waktu_pelayanan,
        $knowledge,
        $komentar_service,
        $kebersihan_alat,
        $tampilan_makanan,
        $waktu_memasak,
        $cita_rasa,
        $teknik_memasak,
        $penyajian,
        $komentar_food,
        $dekorasi,
        $hiburan,
        $acara,
        $komentar_mice,
        $tampilan_aplikasi,
        $fungsi_sistem,
        $komentar_rpl
    )) {
        // Hapus session setelah data disimpan
        session_unset();
        session_destroy();
        echo "Feedback submitted successfully!";
    } else {
        echo "Error saving feedback.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Comment - RPL</title>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <div>
        <h2>Guest Comment - RPL</h2>
        <form action="rpl.php" method="POST">
            <h3>RPL</h3>

            <label for="tampilan_aplikasi">Tampilan Aplikasi/UI:</label>
            <select name="tampilan_aplikasi" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="fungsi_sistem">Fungsionalitas Sistem:</label>
            <select name="fungsi_sistem" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="komentar_rpl">Komentar RPL:</label>
            <textarea name="komentar_rpl"></textarea>

            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</body>

</html>