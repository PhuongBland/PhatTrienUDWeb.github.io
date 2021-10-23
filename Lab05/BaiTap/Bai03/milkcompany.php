<?php  
require_once 'entity.php';
class milkcompany extends Entity{
    public function GetAll()
    {
        return $this->mysql->GetAll("milkcompany");
    }

    public function GetByID($CompanyCode)
    {
        $query = "select * from milkcompany where CompanyCode = '$CompanyCode'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }
     public function Insert($CompanyCode, $CompanyName, $Address,$Phone,$Email)
       {
           $query = "insert into milkcompany values ('$CompanyCode', '$CompanyName', '$Address','$Phone','$Email')";
           return $this->mysql->MyQuery($query);
       }

}
?>