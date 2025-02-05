<?php
// Konfigurasi database
$host = 'localhost'; // Ganti dengan host database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$dbname = 'fujiyama'; // Ganti dengan nama database Anda

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel feedback_penilaian
$sql = "SELECT * FROM feedback_penilaian";
$result = $conn->query($sql);

// Membuat tabel HTML untuk menampilkan data
echo "<h2>Data Feedback Penilaian</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>ID</th>
            <th>Keramahan</th>
            <th>Kebersihan Service</th>
            <th>Ketepatan Waktu Pelayanan</th>
            <th>Knowledge</th>
            <th>Komentar Service</th>
            <th>Kebersihan Alat</th>
            <th>Tampilan Makanan</th>
            <th>Waktu Memasak</th>
            <th>Cita Rasa</th>
            <th>Teknik Memasak</th>
            <th>Penyajian</th>
            <th>Keompakan Tim</th>
            <th>Komentar Food</th>
            <th>Dekorasi</th>
            <th>Hiburan</th>
            <th>Acara</th>
            <th>Komentar Mice</th>
            <th>Tampilan Aplikasi</th>
            <th>Fungsi Sistem</th>
            <th>Komentar RPL</th>
            <th>Created At</th>
        </tr>";

// Memeriksa apakah ada data
if ($result->num_rows > 0) {
    // Menampilkan data per baris
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['keramahan'] . "</td>
                <td>" . $row['kebersihan_service'] . "</td>
                <td>" . $row['ketepatan_waktu_pelayanan'] . "</td>
                <td>" . $row['knowledge'] . "</td>
                <td>" . $row['komentar_service'] . "</td>
                <td>" . $row['kebersihan_alat'] . "</td>
                <td>" . $row['tampilan_makanan'] . "</td>
                <td>" . $row['waktu_memasak'] . "</td>
                <td>" . $row['cita_rasa'] . "</td>
                <td>" . $row['teknik_memasak'] . "</td>
                <td>" . $row['penyajian'] . "</td>
                <td>" . $row['kekompakan_tim'] . "</td>
                <td>" . $row['komentar_food'] . "</td>
                <td>" . $row['dekorasi'] . "</td>
                <td>" . $row['hiburan'] . "</td>
                <td>" . $row['acara'] . "</td>
                <td>" . $row['komentar_mice'] . "</td>
                <td>" . $row['tampilan_aplikasi'] . "</td>
                <td>" . $row['fungsi_sistem'] . "</td>
                <td>" . $row['komentar_rpl'] . "</td>
                <td>" . $row['created_at'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 hasil";
}

// Menutup koneksi
$conn->close();
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
