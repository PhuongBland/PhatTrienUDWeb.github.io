<?php
 include 'connectanduse.php';
 $query = "delete from computer where id = 9";
 $crtb = $con->query($query);
 if(!$crtb)
 {
 die("Record not delete. .!".$con->error);
 }
 echo "Record deleted!"."</br>";
?>
