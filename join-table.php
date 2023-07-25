<!-- <!DOCTYPE html>
<html>
<head>
 <title>Join Table</title>
</head>
<body> -->
    <?php
    include 'header.php';
    include 'sidebar.php';
    ?>
<!-- <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Bimbingan.xls");
    ?>  -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2>Data Bimbingan Mahasiswa</h2>
	    <br/> 
      <h1 class='tengah'> <br/> <br/><a href='#'></a></h1>
        <br/>
        <div class='tengah'>
        <a target="_blank" class="btn btn-sm btn-outline-secondary" href="cetak.php">PDF</a>
		    <a target="_blank" class="btn btn-sm btn-outline-secondary" href="export_excel.php">Export To Excel</a>
        </div>
      </div>
      <div class="table-r esponsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <td scope="col">NO</td>
                <td scope="col">Nama Mahasiswa</td>
                <td scope="col">NIM</td>
                <td scope="col">Kelas</td>
                <td scope="col">Nama Dosen</td>
                <td scope="col">NIDN</td>
                <td scope="col">Kbk</td>
                <td scope="col">Tanggal Bimbingan</td>
                <td scope="col">Catatan</td>
            </tr>
            </thead>
          <body>
  <?php
    include 'koneksi.php';
  $data = mysqli_query($koneksi, "select * from bimbingan inner join mahasiswa on bimbingan.id_mahasiswa = mahasiswa.id_mahasiswa INNER JOIN dosen ON bimbingan.id_dosen = dosen.id_dosen");
  $no = 1;
  foreach ($data as $d) :
   ?>

   <tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama_mahasiswa']; ?></td>
    <td><?= $d['nim']; ?></td>
    <td><?= $d['kelas']; ?></td> 
    <td><?= $d['nama_dosen']; ?></td>
    <td><?= $d['nidn']; ?></td>
    <td><?= $d['kbk']; ?></td>
    <td><?= $d['tanggal_bimbingan']; ?></td>
    <td><?= $d['catatan']; ?></td>
   </tr>

  <?php endforeach; ?>

 </table>
</body>
</html>