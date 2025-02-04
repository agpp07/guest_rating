<?php
// File: proses/FeedbackModels.php

class FeedbackModel {
    private $conn;

    // Konstruktor untuk menghubungkan ke database
    public function __construct($db) {
        $this->conn = $db;
    }

    public function saveServiceFeedback($keramahan, $kebersihan_service, $ketepatan_waktu_pelayanan, $knowledge, $komentar_service) {
        try {
            $query = "INSERT INTO feedback_penilaian (keramahan, kebersihan_service, ketepatan_waktu_pelayanan, knowledge, komentar_service) 
                      VALUES (:keramahan, :kebersihan_service, :ketepatan_waktu_pelayanan, :knowledge, :komentar_service)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':keramahan', $keramahan);
            $stmt->bindParam(':kebersihan_service', $kebersihan_service);
            $stmt->bindParam(':ketepatan_waktu_pelayanan', $ketepatan_waktu_pelayanan);
            $stmt->bindParam(':knowledge', $knowledge);
            $stmt->bindParam(':komentar_service', $komentar_service);
            return $stmt->execute();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function saveFoodFeedback($kebersihan_alat, $tampilan_makanan, $waktu_memasak, $cita_rasa, $teknik_memasak, $penyajian, $kekompakan_tim, $komentar_food) {
        try {
            $query = "INSERT INTO feedback_penilaian (kebersihan_alat, tampilan_makanan, waktu_memasak, cita_rasa, teknik_memasak, penyajian, kekompakan_tim, komentar_food) 
                      VALUES (:kebersihan_alat, :tampilan_makanan, :waktu_memasak, :cita_rasa, :teknik_memasak, :penyajian, :kekompakan_tim, :komentar_food)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':kebersihan_alat', $kebersihan_alat);
            $stmt->bindParam(':tampilan_makanan', $tampilan_makanan);
            $stmt->bindParam(':waktu_memasak', $waktu_memasak);
            $stmt->bindParam(':cita_rasa', $cita_rasa);
            $stmt->bindParam(':teknik_memasak', $teknik_memasak);
            $stmt->bindParam(':penyajian', $penyajian);
            $stmt->bindParam(':kekompakan_tim', $kekompakan_tim);
            $stmt->bindParam(':komentar_food', $komentar_food);
            return $stmt->execute();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    
    // Fungsi serupa untuk saveMiceFeedback dan saveRplFeedback...
    

    // Fungsi untuk menyimpan feedback MICE
    public function saveMiceFeedback($dekorasi, $hiburan, $acara) {
        try {
            $query = "INSERT INTO feedback_penilaian 
                      (dekorasi, hiburan, acara) 
                      VALUES 
                      (:dekorasi, :hiburan, :acara)";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':dekorasi', $dekorasi);
            $stmt->bindParam(':hiburan', $hiburan);
            $stmt->bindParam(':acara', $acara);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Fungsi untuk menyimpan feedback RPL
    public function saveRplFeedback($tampilan_aplikasi, $fungsi_sistem) {
        try {
            $query = "INSERT INTO feedback_penilaian 
                      (tampilan_aplikasi, fungsi_sistem) 
                      VALUES 
                      (:tampilan_aplikasi, :fungsi_sistem)";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':tampilan_aplikasi', $tampilan_aplikasi);
            $stmt->bindParam(':fungsi_sistem', $fungsi_sistem);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
