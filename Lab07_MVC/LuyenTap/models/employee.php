<?php

class Employee{
    private $conn;
    public $Id;
    private $Name;
    private $SurName;
    private $Email;
    private $Phone;
    public function __construct($Connection){
        $this ->conn=$Connection;
    }

    public function execute($sql){
       $result= $this->conn->query($sql);
        return $result;
    }
    
    public function getAll()
    {
        $sql="Select * from employees";
        $cmd=$this->conn->prepare($sql);
        $cmd->execute();
        $result=$cmd->fetchAll();
        $this->conn=null;
        return $result;
    }
   public function getById($id)
    {
        $sql = "Select * from employees where id = :id";
        $cmd = $this->conn->prepare($sql);
        $cmd -> execute(array("id"=>$id));
        $result = $cmd->fetchObject();
        $this -> conn = null;
        return $result; 
   }
   public function deleteData($id)
   {
     $sql="DELETE FROM employees
        WHERE id = :id";
     return $this->execute($sql);
   }

   public function insertData($Id,$Name,$SurName,$Email,$phone)
   {
     $sql="INSERT INTO employees(id,Name,SurName,Email,phone)
     VALUES('$Name','$SurName','$Email','$phone')";
      return $this->execute($sql);
       
   }
   public function updateData($Id,$Name,$SurName,$Email,$phone){
       $sql="UPDATE employees SET Name='$Name',SurName='$SurName',Email='$Email',phone='$phone'
       where id= :id";  
            return $this->execute($sql);
        }
}
?>