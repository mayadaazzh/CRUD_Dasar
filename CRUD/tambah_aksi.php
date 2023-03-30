<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NRP = $_POST["NRP"];
$Nama = $_POST["Nama"];
$Jenis_Kelamin = $_POST["Jenis_Kelamin"];
$Jurusan = $_POST["Jurusan"];
$Email_Student = $_POST["Email_Student"];
$Alamat = $_POST["Alamat"];
$No_HP = $_POST["No_HP"];
$Asal_SMA = $_POST["Asal_SMA"];
$Matakuliahfav = $_POST["Matakuliahfav"];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO mahasiswa VALUE(NULL,'$NRP','$Nama','$Jenis_Kelamin','$Jurusan','$Email_Student','$Alamat','$No_HP','$Asal_SMA','$Matakuliahfav')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>