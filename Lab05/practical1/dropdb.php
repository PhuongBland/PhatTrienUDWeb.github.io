<?php
 $con = new mysqli("localhost","root","");
 if($con->connect_error)
 {
 die("connection failed ". $con ->connect_error);
 }
 else echo "Connection successed"."</br>";
 $query = "drop database std";
 $crdb = $con->query($query);
 if(!$crdb)
 {
 die("Not droped: ".$con->error);
 }
 echo "Database droped.. !";
?>