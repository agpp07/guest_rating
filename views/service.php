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
        <h2>Guest Comment</h2>
        <h3>Fujiyama Resto</h3>
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
<style>
    /* Mengatur font dasar dan padding untuk body */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    /* Mengatur kontainer agar tampilan lebih terpusat */
    .container {
        width: 80%;
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Styling untuk heading */
    h2 {
        text-align: center;
        color: #333;
        font-size: 28px;
        margin-bottom: 5px;
        /* Mengurangi jarak antara h2 dan h3 */
    }

    h3 {
        font-size: 22px;
        margin-top: 5px;
        /* Mengurangi jarak atas h3 */
        margin-bottom: 15px;
        text-align: center;
    }


    /* Styling untuk label dan elemen form */
    label {
        font-size: 16px;
        margin-bottom: 8px;
        display: block;
        color: #555;
    }

    select,
    textarea {
        width: 90%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        background-color: #f9f9f9;
    }

    /* Mengatur textarea agar lebih besar dan lebih nyaman untuk mengetik */
    textarea {
        resize: vertical;
    }

    /* Styling untuk tombol submit */
    .submit-button {
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-button:hover {
        background-color: #45a049;
    }

    /* Responsif untuk ukuran layar kecil */
    @media (max-width: 600px) {
        .container {
            width: 90%;
            padding: 15px;
        }

        h2 {
            font-size: 24px;
        }

        h3 {
            font-size: 20px;
        }

        .submit-button {
            font-size: 18px;
        }
    }
</style>