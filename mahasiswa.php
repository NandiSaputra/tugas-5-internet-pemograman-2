<?php 
include 'model.php'; 
$model = new Model();
$index=1;

?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
   
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="Index.php">TUGAS PI 2</a>
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
   
      <h1><center>Daftar Mahasiswa</center></h1> 
       <a href="create_mahasiswa.php">Tambah Data</a> 
       <br> 
      <a href="print_mahasiswa.php" target="_blank">Cetak Data</a> 
    
      <br><br> 
    
      
        <table class="table table-bordered table-striped"> 
          <thead class="text-center"> 
            <tr> 
                <th>NO</th> 
                <th>ID</th> 
                <th>Nama</th> 
                <th>Semeseter</th> 
                <th>ALAMAT</th> 
                <th>No tlp</th>
                <th>email</th> 
                <th>Aksi</th>
            </tr> 
          </thead> 
          <tbody class="text-center"> 
            <?php 
          $result = $model->tampil_mahasiswa(); 
          if ( !empty($result)) { 
            foreach ($result as $data) : ?> 
          
              <tr> 
                <td><?= $index++?></td>
                <td><?= $data->id ?></td> 
                <td><?= $data->nama ?></td> 
                <td><?= $data->semester ?></td> 
                <td><?= $data->alamat ?></td> 
                <td><?= $data->no_tlp ?></td> 
                <td><?= $data->email?></td>
               
                <td> 
                   <a name="edit" id="edit"  class="btn btn-success" href="edit_mahasiswa.php?id=<?= $data->id ?>">Edit</a> 
                   <a  name="hapus" id="hapus"  class="btn btn-danger" href="process.php?id=<?= $data->id ?>">Delete</a> 
                </td> 
                </tr>
                 <?php endforeach; 
        } else{ ?> 

                 <tr> 
                <td colspan="8">Belum ada data pada tabel mahasiswa.</td> 
              </tr> 
             
              <?php } ?> 
          
       
              

          </tbody> 
        </table> 
      </div>
  </div>
    
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
