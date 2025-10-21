<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM catatan WHERE id='$id'");
echo "<script>alert('Catatan berhasil dihapus!');window.location='index.php';</script>";
?>
