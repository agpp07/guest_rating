<?php
// Mulai session
session_start();

// Simpan data ke session saat form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['kebersihan_alat'] = $_POST['kebersihan_alat'];
    $_SESSION['tampilan_makanan'] = $_POST['tampilan_makanan'];
    $_SESSION['waktu_memasak'] = $_POST['waktu_memasak'];
    $_SESSION['cita_rasa'] = $_POST['cita_rasa'];
    $_SESSION['teknik_memasak'] = $_POST['teknik_memasak'];
    $_SESSION['penyajian'] = $_POST['penyajian'];
    $_SESSION['kekompakan_tim'] = $_POST['kekompakan_tim'];
    $_SESSION['komentar_food'] = $_POST['komentar_food'];

    // Redirect ke halaman mice.php setelah form disubmit
    header('Location: mice.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Comment - Food</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div>
        <h2>Guest Comment - Food</h2>
        <form action="food.php" method="POST">
            <h3>Food</h3>
            <label for="kebersihan_alat">Kebersihan Alat:</label>
            <select name="kebersihan_alat" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="tampilan_makanan">Tampilan Makanan:</label>
            <select name="tampilan_makanan" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="waktu_memasak">Waktu Memasak:</label>
            <select name="waktu_memasak" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="cita_rasa">Cita Rasa:</label>
            <select name="cita_rasa" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="teknik_memasak">Teknik Memasak:</label>
            <select name="teknik_memasak" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="penyajian">Penyajian (Garnish):</label>
            <select name="penyajian" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="kekompakan_tim">Kekompakan Tim/Kelompok:</label>
            <select name="kekompakan_tim" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="komentar_food">Komentar Food:</label>
            <textarea name="komentar_food"></textarea>

            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</body>
</html>
