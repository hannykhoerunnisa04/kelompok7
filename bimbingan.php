<?php
 include 'header.php';
 include 'sidebar.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Bimbingan</h1>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
 
	<h2>Tabel BIMBINGAN</h2>
	<br/>
	<a href="tambah_bimbingan.php">+ TAMBAH BIMBINGAN</a>
	<br/>
	<br/>
	<table border="0">
		<tr>
            <th>NO</th>
			<th>ID MAHASISWA</th>
			<th>ID DOSEN</th>
            <th>TANGGAL BIMBINGAN</th>
            <th>CATATAN</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from bimbingan");
		while($d = mysqli_fetch_array($data)){
            ?>
			<tr>
            	<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_mahasiswa']; ?></td>
                <td><?php echo $d['id_dosen']; ?></td>
                <td><?php echo $d['tanggal_bimbingan']; ?></td>
				<td><?php echo $d['catatan']; ?></td>
                <td>
					<a href="edit.php?id_bimbingan=<?php echo $d['id_bimbingan']; ?>">EDIT</a>
					<a href="hapus.php?id_bimbingan=<?php echo $d['id_bimbingan']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>









