<!DOCTYPE html>
<html lang="en">
<?php
 include 'student.php';
 include 'class.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Võ Thị Thúy Phương</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
 <h2>Quản lý sinh viên</h2>
 <p>Bảng Sinh viên - <a href="addstudent.php">Thêm</a></p> 
 <table class="table table-dark">
 <thead>
 <tr>
 <th>MSSV</th>
 <th>Họ tên</th>
 <th>Tuổi</th>
 <th>Lớp</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $sv = new SinhVien("qlsinhvien");
 $result = $sv->GetAll();
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['MSSV']."</td>";
 echo "<td>".$row['HoTen']."</td>";
 echo "<td>".$row['Tuoi']."</td>";
 echo "<td>".$row['MaLop']."</td>";
 echo "<td><a href='delstudent.php?mssv=".$row['MSSV']."'>
 <i class='fas fa-trash'></i>
 </a> 
 <a href='editstudent.php?mssv=".$row['MSSV']."'>
 <i class='fa fa-edit'></i>
 </a>
 
 </td>";
 echo "</tr>";
 } 
 ?>
 </tbody>
 </table>
</div>

</body>
</html>