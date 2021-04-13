<?php
    include 'model.php';
    $id = $_GET['id'];
    $model = new Model();
    $data = $model->editmatkul($id);
?>
<!doctype html> 
<html lang="en">  
        <head> 
        <title>Tambah Data Mahasiswa</title> 
        </head>  
    <body> 
    <h1>Tambah</h1> 
    <a href="mahasiswa.php">Kembali</a> 
    <br><br> 
        <form action="process.php" method="post"> 
            <label>ID</label> 
            <br> 
            <input type="text" name="id" value="<?php echo $data->id ?>"> 
            <br> 
            <label>Mata kuliah</label> 
            <br> 
            <input type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>"> 
          

            <br><br> 
            <button type="submit" name="edit_mk">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 