<?php
// Mulai session
session_start();

// Simpan data ke session saat form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['keramahan'] = $_POST['keramahan'];
    $_SESSION['kebersihan_service'] = $_POST['kebersihan_service'];
    $_SESSION['ketepatan_waktu_pelayanan'] = $_POST['ketepatan_waktu_pelayanan'];
    $_SESSION['knowledge'] = $_POST['knowledge'];
    $_SESSION['komentar_service'] = $_POST['komentar_service'];

    // Redirect ke halaman food.php setelah form disubmit
    header('Location: food.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Comment - Service</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div>
        <h2>Guest Comment - Service</h2>
        <form action="service.php" method="POST">
            <h3>Service</h3>
            <label for="keramahan">Keramahan:</label>
            <select name="keramahan" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="kebersihan_service">Kebersihan Service:</label>
            <select name="kebersihan_service" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="ketepatan_waktu_pelayanan">Ketepatan Waktu Pelayanan:</label>
            <select name="ketepatan_waktu_pelayanan" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="knowledge">Knowledge:</label>
            <select name="knowledge" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="komentar_service">Komentar Service:</label>
            <textarea name="komentar_service"></textarea>

            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</body>
</html>
