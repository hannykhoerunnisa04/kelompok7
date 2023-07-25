<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_bimbingan = $_POST['id_bimbingan'];
$id_mahasiswa = $_POST['id_mahasiswa'];
$id_dosen = $_POST['id_dosen'];
$tanggal_bimbingan = $_POST['tanggal_bimbingan'];
$catatan = $_POST['catatan'];

 
// update data ke database
mysqli_query($koneksi,"update bimbingan set id_mahasiswa='$id_mahasiswa', id_dosen='$id_dosen', tanggal_bimbingan='$tanggal_bimbingan', catatan='$catatan' where id_bimbingan='$id_bimbingan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index_bimbingan.php");
 
?>