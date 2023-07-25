<?php
 include 'header.php';//Memanggil Header
 include 'sidebar.php';//Memanggil Sidebar
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" class="container-fluid">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
 
	<h2>Tabel MAHASISWA</h2>
	<br/>
	<a class="btn btn-succes" href="tambah_mahasiswa.php">+ TAMBAH MAHASISWA</a>
	<!-- btn-btn digunakan untuk merubah button menjadi berwarna, 
	success=hijau, warning=kuning keorenan , danger=merah, primary=biru tua, info=biru cerah -->
	<br/>
	<br/>
	<!-- Membuat garis tabel -->
	<table border="0" class="gap-1" class="w-100">
		<tr class="gap-1">
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
            <th>Jenis Kelamin</th> 
            <th>Kelas</th>
			<th>Alamat</th>
            <th>No Telepon</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		/*Foreach untuk menampilkan hasil jenis kelamin, misal kita di codingan memasukkan 
		value perempuan atau laki laki, maka di hasilnya akan terbaca P/L*/
		foreach($data as $d){
            $jenis_kelamin = $d['jenis_kelamin']=='P'?'Perempuan' : 'Laki-Laki';
            ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telepon']; ?></td>
				<td>
					<a class="btn btn-warning" href="edit.php?id_mahasiswa=<?php echo $d['id_mahasiswa']; ?>">EDIT</a>
					<a class="btn btn-danger" href="hapus.php?id_mahasiswa=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</main>
</body>
</html>









