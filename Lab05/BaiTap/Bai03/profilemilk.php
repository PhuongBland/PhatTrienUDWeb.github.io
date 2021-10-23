<?php
 require_once 'entity.php';
 class profilemilk extends Entity{
 public function GetAll(){
 return $this->mysql->GetAll("ThongTinSua");
 }
 public function GetByID($ten){
 $query = "select * from ThongTinSua where Ten='".$ten."'";
 $result = $this->mysql->MyQuery($query);
 return mysqli_fetch_array($result);
 }
 public function Insert($ma,$ten,$hang,$loai,$trongluong,$dongia,$thanhphan,$loiich,$hinhanh){
 $query = "insert into ThongTinSua values ('".$ma."','".$ten."','".$hang."',".$loai.",'".$trongluong."','".$dongia."','".$thanhphan."',".$loiich.",'".$hinhanh."')"; 
 return $this->mysql->MyQuery($query);
 }
 public function Delete($ten){
 $query = "delete from ThongTinSua where ten = '".$ten."'"; 
 return $this->mysql->MyQuery($query);
 }
 public function Update($ma,$stt,$tenold,$tennew,$hang,$loai,$trongluong,$dongia,$thanhphan,$loiich,$hinhanh){
    $query = "update ThongTinSua set ten = '".$tennew
    ."', ma = '".$ma
    .", hang = '".$hang
    .", loai = '".$loai
    .", trongluong = '".$trongluong
    .", dongia = '".$dongia
    .", thanhphan = '".$thanhphan
    .", loiich = '".$loiich
    .", hinhanh = '".$hinhanh
    ."' where ten= '".$tenold."'";
    echo $query; 
    return $this->mysql->MyQuery($query);
    }
   
 }
?>
