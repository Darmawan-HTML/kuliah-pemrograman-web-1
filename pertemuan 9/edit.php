<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Catatan</title>
    <style>
        body { font-family: Arial; background: #f7f9fb; margin: 30px; }
        form { background: white; padding: 20px; border: 1px solid #ccc; }
        input[type=text], textarea {
            width: 100%; padding: 8px; margin-bottom: 10px;
        }
        input[type=submit] {
            background: #28a745; color: white; padding: 8px 16px;
            border: none; cursor: pointer; border-radius: 5px;
        }
        a { text-decoration: none; color: #007bff; }
    </style>
</head>
<body>
    <h1>Edit Catatan</h1>
    <form method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($d['judul']); ?>" required><br>

        <label>Isi Catatan:</label><br>
        <textarea name="isi" rows="5" required><?= htmlspecialchars($d['isi']); ?></textarea><br>

        <input type="submit" name="update" value="Update Catatan">
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        mysqli_query($koneksi, "UPDATE catatan SET judul='$judul', isi='$isi' WHERE id='$id'");
        echo "<script>alert('Catatan berhasil diperbarui!');window.location='index.php';</script>";
    }
    ?>
</body>
</html>
