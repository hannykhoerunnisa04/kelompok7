<?php
include 'header.php';//Memanggil Header
include 'sidebar.php';//Memanggil Sidebar
  ?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DATA MAHASISWA</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div> -->
       
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2>Tabel Mahasiswa</h2>
      <div class="table-responsive small">
      
      <!-- btn-btn digunakan untuk merubah button menjadi berwarna, 
	    success=hijau, warning=kuning keorenan , danger=merah, primary=biru tua, info=biru cerah -->
      <a class="btn btn-success" href="tambah_mahasiswa.php">TAMBAH MAHASISWA</a>
      </br>
        </div>

      <body>
        <!-- membuat container dengan lebar colomn col-lg-10  -->
        <!-- <div class="container col-lg-10"> -->
            <!-- membuat tulisan alert berwarna hijau dengan tulisan di tengah  -->
            <!-- <h3 class="alert alert-success text-center" role="alert">
                Tutorial Konfirmasi Hapus dan Notifikasi Hapus Berhasil dengan Sweet Alert
            </h3> -->
      <!-- Membuat garis tabel -->
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Kelas</th>
              <th scope="col">Alamat</th>
              <th scope="col">No Telepon</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
          <?php
          include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from mahasiswa order by nama_mahasiswa asc");

            /*Foreach untuk menampilkan hasil jenis kelamin, misal kita di codingan memasukkan 
		        value perempuan atau laki laki, maka di hasilnya akan terbaca P/L*/
            foreach($data as $d){
            $jenis_kelamin = $d['jenis_kelamin']=='P'?'Perempuan' : 'Laki-Laki';
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['nama_mahasiswa']; ?></td>
                <td><?php echo $jenis_kelamin; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telepon']; ?></td>
                <td>
                  <a class="btn btn-warning" href="edit.php?id_mahasiswa=<?php echo $d['id_mahasiswa']; ?>">EDIT</a>
                  <a href="hapus.php?id_mahasiswa=<?php echo $d['id_mahasiswa']; ?>" class="btn btn-danger alert_notif">HAPUS</a>
                </td>
              </tr>
              <?php 
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    
    
        <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
        di dalam session sukses  -->
        <?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'data berhasil dihapus',                        
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
        <?php unset($_SESSION['sukses']); } ?>
    
    
        <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
        <script>
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
        </script>
    </body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
