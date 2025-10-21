<?php
$koneksi = mysqli_connect("localhost", "root", "", "diarydb");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
