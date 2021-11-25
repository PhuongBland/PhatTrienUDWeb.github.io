<?php

class Department{
    private $conn;
    public $Id;
    private $Name;
    private $NumberOfStaff;
    private $Id_employees;
   
    
    public function __construct($Connection){
        $this ->conn=$Connection;
    }
    
     public function execute($sql){
       $result= $this->conn->query($sql);
        return $result;
    }
    
    public function getAll()
    {
        $sql="Select * from Department";
        $cmd=$this->conn->prepare($sql);
        $cmd->execute();
        $result=$cmd->fetchAll();
        $this->conn=null;
        return $result;
    }
   public function getById($id_dpm)
    {
        $sql = "Select * from Department where id_dpm = :id_dpm";
        $cmd = $this->conn->prepare($sql);
        $cmd -> execute(array("id_dpm"=>$id_dpm));
        $result = $cmd->fetchObject();
        $this -> conn = null;
        return $result; 
   }
   public function deleteData($id, $table)
   {
     $sql="DELETE FROM Department
        WHERE id_dpm = '$id'";
     return $this->execute($sql);
   }
   
  
//    public function insertEmployee($Name,$SurName,$Email,$phone)
//    {
//        //id tự tăng , không cần truyền
//      $sql="INSERT INTO employees(id,Name,SurName,Email,phone)
//      VALUES(NULL,'$Name','$SurName','$Email','$phone')";
//      // hàm này có vấn đề
//         return $this->execute($sql);
       
//    }
//    public function updateData($id,$Name,$SurName,$Email,$phone){
//        $sql="UPDATE employees SET Name='$Name',SurName='$SurName',Email='$Email',phone='$phone'
//        where id= '$id'";  
//             return $this->execute($sql);
//         }
}
?>