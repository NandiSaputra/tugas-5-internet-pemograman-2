<?php
    include 'model.php';
    $id = $_GET['id'];
    $model = new Model();
    $data = $model->editkontrak_mk($id);
?>
<!doctype html> 
<html lang="en">  
        <head> 
        <title>Tambah Data Mahasiswa</title> 
        </head>  
    <body> 
    <h1>Tambah</h1> 
    <a href="kontrak_mk.php">Kembali</a> 
    <br><br> 
        <form action="process.php" method="post"> 
            <label>ID</label> 
            <br> 
            <input type="text" name="matakuliah_id" value="<?php echo $data->matakuliah_id ?>"> 
            <br> 
            <label>Mata kuliah</label> 
            <br> 
            <input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>"> 
          

            <br><br> 
            <button type="submit" name="submit_edit_kontrak_mk">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 