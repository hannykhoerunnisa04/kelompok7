<?php
 include 'header.php';//Untuk memanggil Header
 include 'sidebar.php';//Untuk memanggil Sidebar
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" class="container-fluid">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Dosen</h1>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
 
	<h2>Tabel DOSEN</h2>
	<br/>
	<a href="tambah_dosen.php">+ TAMBAH DOSEN</a>
	<br/>
	<br/>
	<table border="0" class="gap-1" class="w-100">
		<tr class="w-100">
			<th>NO</th>
			<th>NIDN</th>
			<th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>KBK</th>
			<th>Alamat</th>
            <th>No Telepon</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from dosen");
		foreach($data as $d){
            $jenis_kelamin = $d['jenis_kelamin']=='P'?'Perempuan' : 'Laki-Laki';
            ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nidn']; ?></td>
				<td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['kbk']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telepon']; ?></td>
				<td>
					<a href="edit.php?id_dosen=<?php echo $d['id_dosen']; ?>">EDIT</a>
					<a href="hapus.php?id_dosen=<?php echo $d['id_dosen']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>









