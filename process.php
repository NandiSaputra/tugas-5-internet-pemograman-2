<?php 
include 'model.php'; 
if (isset($_POST['submit_simpan'])) { 
    $nim = $_POST['nim']; 
    $nama = $_POST['nama']; 
    $uts = $_POST['uts']; 
    $uas = $_POST['uas']; 
    $tugas = $_POST['tugas']; 
    $model = new Model(); 
    $model->insert($nim,$nama,$uts,$uas,$tugas); 
    header('location:index.php'); 
} 
if (isset($_POST['submit_edit'])) { 
    $nim = $_POST['nim']; 
    $nama = $_POST['nama']; 
    $uts = $_POST['uts']; 
    $uas = $_POST['uas']; 
    $tugas = $_POST['tugas']; 
    $model = new Model(); 
    $model->update($nim,$nama,$uts,$tugas,$uas); 
    header('location:index.php'); 
} 
if (isset($_GET['nim'])) { 
    $id = $_GET['nim']; 
    $model = new Model(); 
    $model->delete($id); 
    header('location:index.php'); 
}  

if (isset($_POST['submit_simpan_mahasiswa'])) { 
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $semester = $_POST['semester']; 
    $alamat = $_POST['alamat']; 
    $no_tlp = $_POST['no_tlp']; 
    $email =$_POST['email'];
    $model = new Model(); 
    $model->insert_mahasiswa($id,$nama,$semester,$alamat,$no_tlp,$email); 
    header('location:mahasiswa.php'); 
} 

if (isset($_POST['submit_edit_mahasiswa'])) { 
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $semester = $_POST['semester']; 
    $alamat = $_POST['alamat']; 
    $no_tlp = $_POST['no_tlp'];
    $email =$_POST['email']; 
    $model = new Model(); 
    $model->update_mahasiswa($id,$nama,$semester,$alamat,$no_tlp,$email); 
    header('location:mahasiswa.php'); 
} 
if (isset($_GET['id'])) { 
    $no = $_GET['id']; 
    $model = new Model(); 
    $model->delete_mahasiswa($no); 
    header('location:mahasiswa.php'); 
}
if (isset($_POST['submit_simpan_absen'])) { 
    $id = $_POST['id']; 
    $mhs_id = $_POST['mhs_id']; 
    $matakuliah_id = $_POST['matakuliah_id']; 
    $waktu_absen =$_POST['waktu_absen'];
    $status=$_POST['status'];
    $model = new Model(); 
    $model->insert_absen($id,$mhs_id,$matakuliah_id,$waktu_absen,$status); 
    header('location:absen.php'); 
}

if (isset($_POST['submit_edit_absen'])) { 
    $id = $_POST['id']; 
    $mhs_id = $_POST['mhs_id']; 
    $matakuliah_id = $_POST['matakuliah_id']; 
    $waktu_absen =$_POST['waktu_absen'];
    $status =$_POST['status'];
    $model = new Model(); 
    $model->update_absen($id,$mhs_id,$matakuliah_id,$waktu_absen,$status); 
    header('location:absen.php'); 
}
if (isset($_GET['id'])) { 
    $no = $_GET['id']; 
    $model = new Model(); 
    $model->delete_absen($no); 
    header('location:absen.php');
}

if (isset($_POST['submit_matkul'])) {
       
        $id = $_POST['id'];
        $nama_mk = $_POST['nama_mk'];

        $model = new Model();
        $model->insertmatkul($id, $nama_mk);
        header('location:matakuliah.php');
    }
 if (isset($_POST['edit_mk'])) {
        $id = $_POST['id'];
        $nama_mk = $_POST['nama_mk'];

        $model = new Model();
        $model->updatemk($id, $nama_mk);
        header('location:matakuliah.php');
    }
 if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $model = new Model();
        $model->deletemk($id);
        header('location:matakuliah.php');
    }
 if (isset($_POST['submit_kontrak'])) {
       
        $matakuliah_id = $_POST['matakuliah_id'];
        $mhs_id = $_POST['mhs_id'];

        $model = new Model();
        $model->insertkontrak_mk($matakuliah_id, $mhs_id);
        header('location:kontrak_mk.php');
    }
 
