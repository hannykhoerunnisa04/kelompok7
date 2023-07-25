<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_mahasiswa = $_POST['id_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama_mahasiswa='$nama_mahasiswa', nim='$nim', jenis_kelamin='$jenis_kelamin', kelas='$kelas', alamat='$alamat', no_telepon='$no_telepon' where id_mahasiswa='$id_mahasiswa'");
 
// mengalihkan halaman kembali ke index.php
header("location:index_mahasiswa.php");
 
?>