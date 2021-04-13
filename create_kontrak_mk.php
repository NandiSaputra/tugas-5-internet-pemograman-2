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
            <label>Matakuliah ID</label> 
            <br> 
            <input type="text" name="matakuliah_id"> 
            <br> 
            <label>Mahasiswa ID</label> 
            <br> 
            <input type="text" name="mhs_id"> 
          

            <br><br> 
            <button type="submit" name="submit_kontrak">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 