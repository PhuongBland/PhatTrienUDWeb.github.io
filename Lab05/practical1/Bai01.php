<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>practical1</title>
</head>
<body>
  <?php
 $con = new mysqli("localhost","root","");
 if($con->connect_error)
 {
 die("connection failed ". $con ->connect_error);
 }
 else echo "Connection successed"."</br>";
 $query = "create database std";
 $crdb = $con->query($query);
 if($crdb)
 {
 echo "Database created successfully";
 }
 else {
 echo "Error creating database: ".$con->error ;
}
?>

</body>
</html>