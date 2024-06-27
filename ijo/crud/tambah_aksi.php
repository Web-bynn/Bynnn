<?php
//koneksi db
include 'koneksi.php';

//menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')");

//mengalihkan ke halaman index
header("location:index.php");
