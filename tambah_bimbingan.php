<?php
include 'header.php';
include 'sidebar.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h2">Data Bimbingan</h1> -->
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
 
	
	<!-- btn-btn digunakan untuk merubah button menjadi berwarna, 
	success=hijau, warning=kuning keorenan , danger=merah, primary=biru tua, info=biru cerah -->
	<a class="btn btn-success" href="index_bimbingan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA</h3>
	<form method="post" action="tambah_aksi_bimbingan.php">
		<table>
		<tr>			
				<td>ID Bimbingan</td>
				<td><input type="number" name="id_bimbingan"></td>
			</tr>
			<tr>
				<td>ID Mahasiswa</td>
				<td><input type="number" name="id_mahasiswa"></td>
			</tr>
			<tr>			
				<td>ID Dosen</td>
				<td><input type="number" name="id_dosen"></td>
			</tr>
            <tr>			
				<td>Tanggal Bimbingan</td>
                <td><input type="date" name="tanggal_bimbingan"></td>
            	</td>
			</tr>
            <tr>			
				<td>Catatan</td>
                <td>
					<input type="text" name="catatan"></td>
                </td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" class="btn btn-info"></td>
			</tr>		
		</table>
	</form>
</body>
</html>