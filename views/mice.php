<?php
// Mulai session
session_start();

// Simpan data ke session saat form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['dekorasi'] = $_POST['dekorasi'];
    $_SESSION['hiburan'] = $_POST['hiburan'];
    $_SESSION['acara'] = $_POST['acara'];
    $_SESSION['komentar_mice'] = $_POST['komentar_mice'];

    // Redirect ke halaman rpl.php setelah form disubmit
    header('Location: rpl.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Comment - MICE</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div>
        <h2>Guest Comment - MICE</h2>
        <form action="mice.php" method="POST">
            <h3>MICE</h3>
            <label for="dekorasi">Dekorasi:</label>
            <select name="dekorasi" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="hiburan">Hiburan:</label>
            <select name="hiburan" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="acara">Acara:</label>
            <select name="acara" required>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
            </select>

            <label for="komentar_mice">Komentar Mice:</label>
            <textarea name="komentar_mice"></textarea>


            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</body>
</html>
