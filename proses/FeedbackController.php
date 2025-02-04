<?php
// File: proses/FeedbackController.php
include_once 'FeedbackModels.php';

class FeedbackController
{
    private $model;
    private $conn;

    // Konstruktor untuk menghubungkan controller dengan database
    public function __construct($db)
    {
        $this->conn = $db;  // Menyimpan objek koneksi ke dalam $conn
        $this->model = new FeedbackModel($this->conn);  // Menggunakan koneksi di model
    }

    // Fungsi untuk menangani form feedback untuk layanan
    public function handleServiceFeedback()
    {
        // Memeriksa apakah form sudah disubmit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Mendapatkan nilai input dari form
            $keramahan = $_POST['keramahan'];
            $kebersihan_service = $_POST['kebersihan_service'];
            $ketepatan_waktu_pelayanan = $_POST['ketepatan_waktu_pelayanan'];
            $knowledge = $_POST['knowledge'];
            $komentar_service = $_POST['komentar_service'];

            // Menyimpan feedback menggunakan model
            if ($this->model->saveServiceFeedback(
                $keramahan,
                $kebersihan_service,
                $ketepatan_waktu_pelayanan,
                $knowledge,
                $komentar_service
            )) {
                echo "Thank you for your feedback!";
                // Redirect atau tampilkan pesan sukses
            } else {
                echo "Sorry, there was an error saving your feedback.";
            }
        }
    }

    // Fungsi untuk menangani form feedback untuk makanan (food)
    public function handleFoodFeedback()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Mendapatkan nilai input dari form
            $kebersihan_alat = $_POST['kebersihan_alat'];
            $tampilan_makanan = $_POST['tampilan_makanan'];
            $waktu_memasak = $_POST['waktu_memasak'];
            $cita_rasa = $_POST['cita_rasa'];
            $teknik_memasak = $_POST['teknik_memasak'];
            $penyajian = $_POST['penyajian'];
            $kekompakan_tim = $_POST['kekompakan_tim'];
            $komentar_food = $_POST['komentar_food'];

            // Menyimpan feedback menggunakan model
            if ($this->model->saveFoodFeedback(
                $kebersihan_alat,
                $tampilan_makanan,
                $waktu_memasak,
                $cita_rasa,
                $teknik_memasak,
                $penyajian,
                $kekompakan_tim,
                $komentar_food
            )) {
                echo "Thank you for your feedback!";
            } else {
                echo "Sorry, there was an error saving your feedback.";
            }
        }
    }

    // Fungsi untuk menangani form feedback untuk MICE
    public function handleMiceFeedback()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Mendapatkan nilai input dari form
            $dekorasi = $_POST['dekorasi'];
            $hiburan = $_POST['hiburan'];
            $acara = $_POST['acara'];
            $komentar_mice = $_POST['komentar_mice'];

            // Menyimpan feedback menggunakan model
            if ($this->model->saveMiceFeedback($dekorasi, $hiburan, $acara, $komentar_mice)) {
                echo "Thank you for your feedback!";
            } else {
                echo "Sorry, there was an error saving your feedback.";
            }
        }
    }

    // Fungsi untuk menangani form feedback untuk RPL
    public function handleRplFeedback()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Mendapatkan nilai input dari form
            $tampilan_aplikasi = $_POST['tampilan_aplikasi'];
            $fungsi_sistem = $_POST['fungsi_sistem'];
            $komentar_rpl = $_POST['komentar_rpl'];

            // Menyimpan feedback menggunakan model
            if ($this->model->saveRplFeedback($tampilan_aplikasi, $fungsi_sistem, $komentar_rpl)) {
                echo "Thank you for your feedback!";
            } else {
                echo "Sorry, there was an error saving your feedback.";
            }
        }
    }

    public function handleAllFeedback(
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
        $kekompakan_tim,
        $komentar_food,
        $dekorasi,
        $hiburan,
        $acara,
        $komentar_mice,
        $tampilan_aplikasi,
        $fungsi_sistem,
        $komentar_rpl
    ) {
        // Debugging: Cek apakah data diterima dengan benar
        var_dump(
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
            $kekompakan_tim,
            $komentar_food,
            $dekorasi,
            $hiburan,
            $acara,
            $komentar_mice,
            $tampilan_aplikasi,
            $fungsi_sistem,
            $komentar_rpl
        );

        // Pastikan semua data diterima, kemudian simpan ke database
        if (
            $this->model->saveServiceFeedback($keramahan, $kebersihan_service, $ketepatan_waktu_pelayanan, $knowledge, $komentar_service) &&
            $this->model->saveFoodFeedback($kebersihan_alat, $tampilan_makanan, $waktu_memasak, $cita_rasa, $teknik_memasak, $penyajian, $kekompakan_tim, $komentar_food) &&
            $this->model->saveMiceFeedback($dekorasi, $hiburan, $acara, $komentar_mice) &&
            $this->model->saveRplFeedback($tampilan_aplikasi, $fungsi_sistem, $komentar_rpl)
        ) {
            return true;
        }
        return false;
    }

    public function saveFeedback($keramahan, $kebersihan_service, $ketepatan_waktu_pelayanan, $knowledge, $komentar_service,
                             $kebersihan_alat, $tampilan_makanan, $waktu_memasak, $cita_rasa, $teknik_memasak, 
                             $penyajian, $komentar_food, $dekorasi, $hiburan, $acara, $komentar_mice,
                             $tampilan_aplikasi, $fungsi_sistem, $komentar_rpl) {
    try {
        $query = "INSERT INTO feedback_penilaian (
                    keramahan, kebersihan_service, ketepatan_waktu_pelayanan, knowledge, komentar_service, 
                    kebersihan_alat, tampilan_makanan, waktu_memasak, cita_rasa, teknik_memasak, 
                    penyajian, komentar_food, dekorasi, hiburan, acara, komentar_mice, 
                    tampilan_aplikasi, fungsi_sistem, komentar_rpl
                  ) 
                  VALUES (
                    :keramahan, :kebersihan_service, :ketepatan_waktu_pelayanan, :knowledge, :komentar_service, 
                    :kebersihan_alat, :tampilan_makanan, :waktu_memasak, :cita_rasa, :teknik_memasak, 
                    :penyajian, :komentar_food, :dekorasi, :hiburan, :acara, :komentar_mice, 
                    :tampilan_aplikasi, :fungsi_sistem, :komentar_rpl
                  )";

        $stmt = $this->conn->prepare($query);
        
        // Bind parameters
        $stmt->bindParam(':keramahan', $keramahan);
        $stmt->bindParam(':kebersihan_service', $kebersihan_service);
        $stmt->bindParam(':ketepatan_waktu_pelayanan', $ketepatan_waktu_pelayanan);
        $stmt->bindParam(':knowledge', $knowledge);
        $stmt->bindParam(':komentar_service', $komentar_service);
        $stmt->bindParam(':kebersihan_alat', $kebersihan_alat);
        $stmt->bindParam(':tampilan_makanan', $tampilan_makanan);
        $stmt->bindParam(':waktu_memasak', $waktu_memasak);
        $stmt->bindParam(':cita_rasa', $cita_rasa);
        $stmt->bindParam(':teknik_memasak', $teknik_memasak);
        $stmt->bindParam(':penyajian', $penyajian);
        $stmt->bindParam(':komentar_food', $komentar_food);
        $stmt->bindParam(':dekorasi', $dekorasi);
        $stmt->bindParam(':hiburan', $hiburan);
        $stmt->bindParam(':acara', $acara);
        $stmt->bindParam(':komentar_mice', $komentar_mice);
        $stmt->bindParam(':tampilan_aplikasi', $tampilan_aplikasi);
        $stmt->bindParam(':fungsi_sistem', $fungsi_sistem);
        $stmt->bindParam(':komentar_rpl', $komentar_rpl);

        // Menjalankan query untuk menyimpan data
        if ($stmt->execute()) {
            return true; // Data berhasil disimpan
        }
        return false; // Gagal menyimpan data
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

}
