<?php
// File: proses/database.php

class Database {
    private $host = "localhost";
    private $db_name = "fujiyama";  // Ganti dengan nama database Anda
    private $username = "root"; // Ganti dengan username MySQL Anda
    private $password = ""; // Ganti dengan password MySQL Anda
    public $conn;

    // Fungsi untuk mendapatkan koneksi ke database
    public function getConnection() {
        $this->conn = null;
        
        try {
            // Membuat koneksi menggunakan PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Mengaktifkan error mode
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
            return null;  // Mengembalikan null jika koneksi gagal
        }

        return $this->conn; // Mengembalikan objek koneksi yang valid
    }
}
?>
