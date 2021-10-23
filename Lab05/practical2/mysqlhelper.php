<?php
class MySQLHelper{
 private $server;
 private $user;
 private $pass;
 private $conn;
 function __construct($server="localhost",$user="root",$pass="")
 {
 $this->server = $server;
 $this->user = $user;
 $this->pass = $pass;
 }
 public function OpenDB($db){
 $this->conn = new mysqli($this->server,$this->user,$this->pass,$db);
 if($this->conn->connect_error)
 echo "conncetion fail: ".$this->conn->connect_error;
 }
 public function CloseDB(){
 mysqli_close($this->conn);
 }
 public function MyQuery($query){
 $result = $this->conn->query($query);
 $this->CloseDB();
 return $result;
 }
 public function GetAll($table){
 $sql = "select * from ".$table;
 $result = $this->conn->query($sql);
 $this->CloseDB();
 return $result;
 }
}
?>