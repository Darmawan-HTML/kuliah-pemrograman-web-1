<?php
include 'config.php';
$result = mysqli_query($koneksi, "SELECT * FROM diary ORDER BY id DESC");
?>


<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Dibuat</th>
        <th>Diperbarui</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['isi']; ?></td>
            <td><?= $row['created_at']; ?></td>
            <td><?= $row['updated_at']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus data ini?');">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
