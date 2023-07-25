<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values(0,'$nim','$nama_mahasiswa','$jenis_kelamin','$kelas','$alamat','$no_telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:index_mahasiswa.php");
 
?>