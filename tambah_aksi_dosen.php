<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_dosen = $_POST['id_dosen'];
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kbk = $_POST['kbk'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into dosen (id_dosen, nidn, nama_dosen, jenis_kelamin, kbk, alamat, no_telepon)
values('0','$nidn','$nama_dosen','$jenis_kelamin','$kbk','$alamat', '$no_telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:index_dosen.php");
 
?>