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
            <input type="text" name="id"> 
            <br> 
            <label>Mata kuliah</label> 
            <br> 
            <input type="text" name="nama_mk"> 
          

            <br><br> 
            <button type="submit" name="submit_matkul">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 