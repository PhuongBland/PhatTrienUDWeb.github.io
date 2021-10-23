<?php
 require_once 'entity.php';
 class SinhVien extends Entity{
 public function GetAll(){
 return $this->mysql->GetAll("SinhVien");
 }
 public function GetByID($mssv){
 $query = "select * from SinhVien where MSSV='".$mssv."'";
 $result = $this->mysql->MyQuery($query);
 return mysqli_fetch_array($result);
 }
 public function Insert($mssv,$hoten,$tuoi,$lop){
 $query = "insert into SinhVien values ('".$hoten."','".$lop."',".$mssv.",'".$tuoi."')"; 
 return $this->mysql->MyQuery($query);
 }
 public function Delete($mssv){
 $query = "delete from SinhVien where mssv = '".$mssv."'"; 
 return $this->mysql->MyQuery($query);
 }
 public function Update($mssvold, $mssvnew,$hoten,$tuoi,$lop){
 $query = "update SinhVien set mssv = '".$mssvnew
 ."', hoten = '".$hoten
 ."', tuoi = ".$tuoi
 .", malop = '".$lop
 ."' where mssv= '".$mssvold."'";
 echo $query; 
 return $this->mysql->MyQuery($query);
 }
 }
?>
