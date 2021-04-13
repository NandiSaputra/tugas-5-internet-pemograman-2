<?php 
include 'connection.php'; 
class Model extends Connection{ 
   
    public function __construct() 
    { 
        $this->conn = $this->get_connection(); 
    } 
 public function insert($nim, $nama, $uts, $uas, $tugas) 
 { 
     $na = $this->na($uts,$tugas,$uas); 
     $status = $this->status($na); 
     $sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) VALUES ('$nim', '$nama', 
             '$uts', '$uas', '$tugas', '$na', '$status')"; 
     $this->conn->query($sql); 
 } 
 public function na($uts,$tugas,$uas) 
 { 
     $na=(0.3*$uts)+(0.3*$tugas)+(0.4*$uas); 
     return $na; 
 } 
 public function status($na) 
 { 
     $status=""; 
     if($na >=60 && $na <=100){ 
      $status="Lulus"; 
  }else{ 
      $status="Tidak Lulus"; 
  } 
      return $status; 
 } 
 public function tampil_data() 
 { 
     $sql = "SELECT * FROM tbl_nilai"; 
     $bind = $this->conn->query($sql); 
     while ($obj = $bind->fetch_object()) { 
      $baris[] = $obj; 
     } 
     if(!empty($baris)){ 
         return $baris; 
     } 
 } 
    public function edit($id){ 
        $sql = "SELECT * FROM tbl_nilai WHERE nim='$id'"; 
        $bind = $this->conn->query($sql); 
        while ($obj = $bind->fetch_object()){ 
        $baris = $obj; 
        } 
        return $baris; 
    } 
    public function update($nim,$nama,$uts,$tugas,$uas){ 
        $na=$this->na($uts,$tugas,$uas); 
        $status=$this->status($na); 
        $sql = "UPDATE tbl_nilai SET  nama='$nama', uts='$uts', uas='$uas',tugas='$tugas', na='$na',status='$status' WHERE nim='$nim'"; 
        $this->conn->query($sql);
    } 
    public function delete($nim){ 
        $sql = "DELETE FROM tbl_nilai WHERE nim='$nim'"; 
        $this->conn->query($sql); 
    } 

 public function insert_mahasiswa($id,$nama,$semester,$alamat,$no_tlp,$email) { 
     $sql = "INSERT INTO mahasiswa (id, nama, semester, alamat, no_tlp, email) VALUES ('$id','$nama','$semester','$alamat','$no_tlp','$email')"; 
      $this->conn->query($sql);
    }

  public function tampil_mahasiswa(){ 
        $sql = "SELECT * FROM mahasiswa"; 
        $bind = $this->conn->query($sql); 
        while ($obj = $bind->fetch_object()) { 
        $baris[] = $obj; 
        } 
        if(!empty($baris)){ 
            return $baris; 
        } 
    } 
  
     public function edit_mahasiswa($No){ 
        $sql = "SELECT * FROM mahasiswa WHERE id='$No'"; 
        $bind = $this->conn->query($sql); 
        while ($obj = $bind->fetch_object()){ 
        $baris = $obj; 
        } 
        return $baris; 
    } 
    public function update_mahasiswa($id,$nama,$semester,$alamat,$no_tlp,$email){ 
        $sql = "UPDATE mahasiswa SET nama='$nama', semester='$semester', alamat='$alamat', no_tlp='$no_tlp', email='$email' WHERE id='$id'"; 
        $this->conn->query($sql);
    } 
    public function delete_mahasiswa($No){ 
        $sql = "DELETE FROM mahasiswa WHERE id='$No'"; 
        $this->conn->query($sql); 
    } 
    public function insert_absen($id,$mhs_id,$matakuliah_id,$waktu_absen,$status) {
       
     $sql = "INSERT INTO absen (id, mhs_id, matakuliah_id, waktu_absen, status) VALUES ('$id','$mhs_id','$matakuliah_id','$waktu_absen','$status')"; 
      $this->conn->query($sql);
    }
   


    public function tampil_absen(){ 
        $sql = "SELECT * FROM absen"; 
        $bind = $this->conn->query($sql); 
        while ($obj = $bind->fetch_object()) { 
        $baris[] = $obj; 
        } 
        if(!empty($baris)){ 
            return $baris; 
        } 
    } 
      public function edit_absen($no){ 
        $sql = "SELECT * FROM absen WHERE id='$no'"; 
        $bind = $this->conn->query($sql); 
        while ($obj = $bind->fetch_object()){ 
        $baris = $obj; 
        } 
        return $baris; 
    } 
    public function update_absen($id,$mhs_id,$matakuliah_id,$waktu_absen,$status){ 
        $sql = "UPDATE absen SET mhs_id='$mhs_id', matakuliah_id='$matakuliah_id', waktu_absen='$waktu_absen', status='$status' WHERE id='$id'"; 
        $this->conn->query($sql);
    } 
    public function delete_absen($id){ 
        $sql = "DELETE FROM absen WHERE id='$id'"; 
        $this->conn->query($sql); 


  }
 
  public function insertmatkul($id, $nama_mk){
            $sql = "INSERT INTO matakuliah (id, nama_mk) VALUES ('$id','$nama_mk')";
            $this->conn->query($sql);
        }

    public function tampil_matkul(){
            $sql = "SELECT * FROM matakuliah";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }
        }
    public function editmatkul($id){
            $sql = "SELECT * FROM matakuliah WHERE id = '$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }
    public function updatemk($id,$nama_mk){
            $sql = "UPDATE matakuliah set nama_mk = '$nama_mk' WHERE id = '$id'";
            $this->conn->query($sql);
}
    public function deletemk($id){ 
            $sql = "DELETE FROM matakuliah  WHERE id='$id'";
            $this->conn->query($sql);
        }
    public function insertkontrak_mk($matakuliah_id, $mhs_id){
            $sql = "INSERT INTO kontrak_mk (matakuliah_id, mhs_id) VALUES ('$matakuliah_id','$mhs_id')";
            $this->conn->query($sql);
        }
    public function tampil_konrtak_mk(){
            $sql = "SELECT * FROM kontrak_mk";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }
        }
  

}