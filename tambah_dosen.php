<?php
include 'header.php';
include 'sidebar.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h2">Data Dosen</h1> -->
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
 

	<!-- btn-btn digunakan untuk merubah button menjadi berwarna, 
	success=hijau, warning=kuning keorenan , danger=merah, primary=biru tua, info=biru cerah -->
	<a class="btn btn-success" href="index_dosen.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA DOSEN</h3>
	<form method="post" action="tambah_aksi_dosen.php">
		<table>
				<td>NIDN</td>
				<td><input type="number" name="nidn"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama_dosen"></td>
			</tr>
      		<tr>			
				<td>Jenis kelamin</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="P">Perempuan
					<input type="radio" name="jenis_kelamin" value="L">Laki-laki
        		</td>
			</tr>
      		<tr>			
				<td>Kbk</td>
        		<td>
					<input type="text" name="kbk"></td>
        		</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr>			
				<td>No Telepon</td>
				<td><input type="number" name="no_telepon"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" class="btn btn-info"></td>
			</tr>		
		</table>
	</form>
</body>
</html>