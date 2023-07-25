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
	<h3>EDIT DATA DOSEN</h3>
	<br/>
	<a class = "btn btn-success" href="index_dosen.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id_dosen = $_GET['id_dosen'];
	$data = mysqli_query($koneksi,"select * from dosen where id_dosen='$id_dosen'");
    function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
    }
	while($d = mysqli_fetch_array($data)){
    ?>
		<form method="post" action="update_dosen.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_dosen" value="<?php echo $d['id_dosen']; ?>">
						<input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nidn" value="<?php echo $d['nidn']; ?>"></td>
				</tr>
                <tr>			
				    <td>Jenis kelamin</td>
				    <td>
                        <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $d['jenis_kelamin'])?>>Perempuan
                        <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $d['jenis_kelamin'])?>>Laki-Laki
                    </td>
			    </tr>
                <tr>			
                    <td>Kbk</td>
                    <td><input type="text" name="kbk" value="<?php echo $d['kbk']; ?>"></td>
			    </tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
                <tr>			
				    <td>No Telepon</td>
				    <td><input type="number" name="no_telepon" value="<?php echo $d['no_telepon']; ?>"></td>
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