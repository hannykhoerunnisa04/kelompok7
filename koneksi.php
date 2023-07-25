<?php 
$koneksi = mysqli_connect("localhost","root","","dosen_bimbingan");//Untuk mengkoneksi database
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>