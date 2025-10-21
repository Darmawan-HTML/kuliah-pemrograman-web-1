<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Diary</title>
</head>
<body>
    <h2>Tambah Catatan Baru</h2>

    <form action="proses_tambah.php" method="POST">
        Judul: <br>
        <input type="text" name="judul" required><br><br>
        Isi: <br>
        <textarea name="isi" rows="4" cols="50" required></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="index.php">
        <button type="button">Kembali ke Halaman Utama</button>
    </a>

    <hr>

    <h3>Data Diary Saat Ini</h3>
    <?php include __DIR__ . '/table.php'; ?>
</body>
</html>
