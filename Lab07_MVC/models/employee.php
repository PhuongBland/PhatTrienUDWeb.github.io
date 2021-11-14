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


}
?>