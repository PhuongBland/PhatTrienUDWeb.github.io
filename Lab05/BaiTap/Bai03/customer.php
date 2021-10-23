<?php
require_once 'entity.php';
class Customer extends Entity
{
    public function GetAll()
    {
        return $this->mysql->GetAll("customer");
    }
    public function GetByID($customerCode)
    {
        $query = "select * from customer where CustomerCode ='$customerCode'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }
    public function Insert($customerCode, $customerName, $gender, $address, $phone)
    {
        $query = "insert into customer(CustomerCode, CustomerName, Gender, Address, Phone) values ('$customerCode','$customerName', '$gender','$address','$phone')";
        return $this->mysql->MyQuery($query);
    }
    public function Delete($customerCode)
    {
        $query = "delete from customer where CustomerCode = '$customerCode'";
        return $this->mysql->MyQuery($query);
    }
    public function Update($customerCodeOld, $customerCodeNew, $customerName, $gender, $address, $phone)
    {
        $query = "update customer 
        set CustomerCode = '$customerCodeNew', CustomerName = '$customerName', Gender = '$gender', Address = '$address', phone = '$phone'
        where CustomerCode= ' $customerCodeOld'";
        echo $query;
        return $this->mysql->MyQuery($query);
    }
}
