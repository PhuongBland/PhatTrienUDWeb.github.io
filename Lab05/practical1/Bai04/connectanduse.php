<?php
$db = '1812828';
$con = new mysqli("localhost","root","",$db);
if($con->connect_error)
{
 die("connection failed ". $con ->connect_error);
}
?>
