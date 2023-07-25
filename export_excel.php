<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Bimbingan.xls");
	?>
 
	<!-- <center>
		<h1>Export Data Ke Excel Dengan PHP <br/> www.malasngoding.com</h1>
	</center> -->
 
	<table border="1">
	<tr>
		<th>NO</th>
		<th>Nama Mahasiswa</th>
		<th>NIM</th>
		<th>Kelas</th>
		<th>Nama Dosen</th>
		<th>NIDN</th>
		<th>Kbk</th>
		<th>Tanggal Bimbingan</th>
		<th>Catatan</th>
		</tr>
		<?php 
		// koneksi database
		
		include 'koneksi.php';

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from bimbingan inner join mahasiswa on bimbingan.id_mahasiswa = mahasiswa.id_mahasiswa INNER JOIN dosen ON bimbingan.id_dosen = dosen.id_dosen");
		$no = 1;
  		foreach ($data as $d) {
		?>
		<tr>
		<td style='text-align: center;'><?php echo $no++; ?></td>
		<td><?php echo $d['nama_mahasiswa']; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['kelas']; ?></td>
		<td><?php echo $d['nama_dosen']; ?></td>
		<td><?php echo $d['nidn']; ?> </td>
		<td><?php echo $d['kbk']; ?> </td>
		<td><?php echo $d['tanggal_bimbingan']; ?></td>
		<td><?php echo $d['catatan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>