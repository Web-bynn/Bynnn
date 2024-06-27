<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yg dikirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

//mengambalikan ke index.php
header("location:index.php");
 