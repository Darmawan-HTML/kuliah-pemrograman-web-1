<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Catatan</title>
    <style>
        body { font-family: Arial; background: #f7f9fb; margin: 30px; }
        h1 { color: #333; }
        form { background: white; padding: 20px; border: 1px solid #ccc; }
        input[type=text], textarea {
            width: 100%; padding: 8px; margin-bottom: 10px;
        }
        input[type=submit] {
            background: #007bff; color: white; padding: 8px 16px;
            border: none; cursor: pointer; border-radius: 5px;
        }
        a { text-decoration: none; color: #007bff; }
    </style>
</head>
<body>
    <h1>Tambah Catatan Baru</h1>
    <form method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br>

        <label>Isi Catatan:</label><br>
        <textarea name="isi" rows="5" required></textarea><br>

        <input type="submit" name="simpan" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        mysqli_query($koneksi, "INSERT INTO catatan (judul, isi) VALUES ('$judul', '$isi')");
        echo "<script>alert('Catatan berhasil disimpan!');window.location='index.php';</script>";
    }
    ?>
</body>
</html>
