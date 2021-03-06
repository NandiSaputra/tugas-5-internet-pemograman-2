<?php 
include 'model.php'; 
$model = new Model(); 
$index = 1; 
?> 
<!doctype html> 
<html lang="en">  
  <head> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Mahasiswa</title> 
  </head>  
<body> 
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Index.php">Tugas PI 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php">Daftar Nilai</a>
        <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
        <a class="nav-link" href="absen.php">Absen</a>
        <a class="nav-link" href="matakuliah.php">Matakuliah</a>
         <a class="nav-link" href="kontrak_mk.php">Kontrak Matakuliah</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
   
      <h1><center>Data Nilai Mahasiswa</center></h1> 
       <a href="create.php">Tambah Data</a> 
       <br> 
       <a href="print.php" target="_blank">Cetak Data</a> 
      <br><br> 
    
      
        <table class="table table-bordered table-striped"> 
          <thead class="text-center"> 
            <tr> 
                <th>No.</th> 
                <th>NIM</th> 
                <th>Nama</th> 
                <th>UTS</th> 
                <th>UAS</th> 
                <th>Tugas</th> 
                <th>NA</th>  
                <th>Status</th> 
                <th>Aksi</th> 
            </tr> 
          </thead> 
          <tbody class="text-center"> 
          <?php 
          $result = $model->tampil_data(); 
          if ( !empty($result)) { 
            foreach ($result as $data) : ?> 
              <tr> 
                <td><?= $index++ ?></td> 
                <td><?= $data->nim ?></td> 
                <td><?= $data->nama ?></td> 
                <td><?= $data->uts ?></td> 
                <td><?= $data->uas ?></td> 
                <td><?= $data->tugas ?></td> 
                <td><?= $data->na ?></td> 
                <td><?= $data->status ?></td> 
                <td> 
                   <a name="edit" id="edit"  class="btn btn-success" href="edit.php?nim=<?= $data->nim ?>">Edit</a> 
                   <a  name="hapus" id="hapus" class="btn btn-danger" href="process.php?nim=<?= $data->nim ?>">Delete</a> 
                </td> 
              </tr> 
            <?php endforeach; 
        } else{ ?> 
              <tr> 
                <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td> 
              </tr> 
              <?php } ?> 
          </tbody> 
        </table> 
      </div>
  </div>
</body>  
</html> 