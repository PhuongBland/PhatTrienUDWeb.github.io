<?php
 include 'student.php';
 $student=new Students("Phương","Võ", "7/4, Da Lat");
 echo $student->greeting()."<br/>";
 echo $student ->getAddress();
?>