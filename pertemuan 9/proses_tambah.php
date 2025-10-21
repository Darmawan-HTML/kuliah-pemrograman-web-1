<?php
include 'config.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];

mysqli_query($koneksi, "INSERT INTO diary (judul, isi) VALUES ('$judul', '$isi')");
header("Location: create.php");
exit;
?>
