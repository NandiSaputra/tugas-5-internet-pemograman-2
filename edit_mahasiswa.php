<?php
$No = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mahasiswa($No);
?>
<!doctype html>
<html lang="eng">
<head>
    <title>Edit Nilai Mahasiswa</title>
</head>
<body>
    <h1>Edit data Mahasiswa</h1>
    <a href="mahasiswa.php">Kembali</a>
    <form action="process.php" method="post">
        <label>ID</label>
        <br>
         <input type="text" name="id" value="<?php echo $data->id ?>">
        <br>
         <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
         <label>SEMESTER</label>
        <br>
        <input type="number" name="semester" value="<?php echo $data->semester ?>">
        <br>
         <label>ALAMAT</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br>
         <label>No. tlp</label>
        <br>
        <input type="text" name="no_tlp" value="<?php echo $data->no_tlp ?>">
        <br>
        <label>Email</label>
        <br>
        <input type="email" name="email" value="<?php echo $data->email ?>">
        
        
        <br><br>
        <button type="submit" name="submit_edit_mahasiswa">submit</button>
    </form>
</body>
<html>