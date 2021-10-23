<?php
 include 'connectanduse.php';
 $query = "insert into computer values(7009,'Anil J Basantani','Sadhana colony Jamnagar')";
 $insrtb = $con->query($query);
 if(!$insrtb)
 {
 die("Record not inserted:".$con->error);
 }
 echo "Record inserted successfully. . .!"."</br>";
?>