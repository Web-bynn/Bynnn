<?php
$koneksi = mysqli_connect("localhost", "root", "", "akademik");
// Check Konnecktion
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
