<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>📘 Catatan Harian</title>
    <style>
        body { font-family: Arial; background: #f7f9fb; margin: 30px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #eee; }
        a { text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
        .btn { padding: 8px 12px; background: #007bff; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>📘 Daftar Catatan Harian</h1>
    <a href="tambah.php" class="btn">+ Tambah Catatan</a>
    <br><br>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM catatan ORDER BY waktu DESC");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($d['judul']); ?></td>
            <td><?= nl2br(htmlspecialchars($d['isi'])); ?></td>
            <td><?= $d['waktu']; ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin mau hapus catatan ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
