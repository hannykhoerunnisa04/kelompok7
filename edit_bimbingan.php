<!-- <!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body> -->
<?php
include 'header.php';
include 'sidebar.php';
?>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<!-- <h2>DATA MAHASISWA</h2>
	<br/> -->
  </div>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>
	<br/>
	<a class = "btn btn-success" href="index_bimbingan.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id_bimbingan = $_GET['id_bimbingan'];
	$data = mysqli_query($koneksi,"select * from bimbingan where id_bimbingan='$id_bimbingan'");
    function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
    }
	while($d = mysqli_fetch_array($data)){
    ?>
		<form method="post" action="update_bimbingan.php">
			<table>
				<tr>			
					<td>ID Mahasiswa</td>
					<td>
						<input type="hidden" name="id_bimbingan" value="<?php echo $d['id_bimbingan']; ?>">
						<input type="number" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa']; ?>">
					</td>
				</tr>
				<tr>
					<td>ID Dosen</td>
					<td><input type="number" name="id_dosen" value="<?php echo $d['id_dosen']; ?>"></td>
				</tr>
                <tr>
					<td>Tanggal Bimbingan</td>
					<td><input type="date" name="tanggal_bimbingan" value="<?php echo $d['tanggal_bimbingan']; ?>"></td>
				</tr>
                <tr>			
				    <td>Catatan</td>
                    <td><input type="text" name="catatan" value="<?php echo $d['catatan']; ?>"></td>
			    </tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="btn btn-info"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>