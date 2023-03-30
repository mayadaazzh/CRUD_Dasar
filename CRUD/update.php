<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NRP = $_POST["NRP"];
$Nama = $_POST["Nama"];
$Jenis_Kelamin = $_POST["Jenis_Kelamin"];
$Jurusan = $_POST["Jurusan"];
$Email_Student = $_POST["Email_Student"];
$Alamat = $_POST["Alamat"];
$No_HP = $_POST["No_HP"];
$Asal_SMA = $_POST["Asal_SMA"];
$Matakuliahfav = $_POST["Matakuliahfav"];
 
// update data ke database
mysqli_query($koneksi,"UPDATE mahasiswa SET NRP='$NRP',Nama='$Nama',Jenis_Kelamin='$Jenis_Kelamin',Jurusan='$Jurusan',Email_Student='$Email_Student',Alamat='$Alamat',No_HP='$No_HP',Asal_SMA='$Asal_SMA',Matakuliahfav='$Matakuliahfav' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?> 