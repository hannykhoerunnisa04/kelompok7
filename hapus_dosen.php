<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_dosen = $_GET['id_dosen'];

//gunakan fungsi di bawah ini agar session bisa dibuat
session_start();
    
//hapus data dari tabel kontak
$delete = mysqli_query($koneksi, "delete from dosen where id_dosen=".$id_dosen);

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

 
// menghapus data dari database
// mysqli_query($koneksi,"delete from dosen where id_dosen='$id_dosen'");
 
// mengalihkan halaman kembali ke index.php
header("location:index_dosen.php");
 
?>