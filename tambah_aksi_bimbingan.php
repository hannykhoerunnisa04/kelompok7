<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_bimbingan = $_POST['id_bimbingan'];
$id_mahasiswa = $_POST['id_mahasiswa'];
$id_dosen = $_POST['id_dosen'];
$tanggal_bimbingan = $_POST['tanggal_bimbingan'];
$catatan = $_POST['catatan'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into bimbingan (id_bimbingan, id_mahasiswa, id_dosen, tanggal_bimbingan, catatan)
values('0','$id_mahasiswa','$id_dosen','$tanggal_bimbingan','$catatan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index_bimbingan.php");
 
?>