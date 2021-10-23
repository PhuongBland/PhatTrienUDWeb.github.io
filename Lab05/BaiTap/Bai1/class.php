<?php
 require_once 'entity.php';
 class Lop extends Entity {
 public function GetAll(){
 return $this->mysql->GetAll("Lop");
 }
 public function GetByID($malop){
    $query = "select * from Lop where MSSV='".$malop."'";
    $result = $this->mysql->MyQuery($query);
    return mysqli_fetch_array($result); }
public function Insert($malop,$tenlop){
    $query = "insert into Lop values ('".$malop."','".$tenlop."')"; 
    return $this->mysql->MyQuery($query);
    }
public function Delete($malop){
    $query = "delete from Lop where malop = '".$malop."'"; 
    return $this->mysql->MyQuery($query);
    }
public function Update($malopold, $malopnew,$tenlop){
        $query = "update Lop set malop = '".$malopnew
        ."', tenlop = '".$tenlop
        ."' where mssv= '".$malopvold."'";
        echo $query; 
        return $this->mysql->MyQuery($query);
        }
       
}
?>
