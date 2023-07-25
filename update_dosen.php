<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_dosen = $_POST['id_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$nidn = $_POST['nidn'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kbk = $_POST['kbk'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
 
// update data ke database
mysqli_query($koneksi,"update dosen set nama_dosen='$nama_dosen', nidn='$nidn', jenis_kelamin='$jenis_kelamin', kbk='$kbk', alamat='$alamat', no_telepon='$no_telepon' where id_dosen='$id_dosen'");
 
// mengalihkan halaman kembali ke index.php
header("location:index_dosen.php");
 
?>