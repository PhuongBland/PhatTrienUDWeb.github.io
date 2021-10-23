<!DOCTYPE html>
<html lang="en">
<?php
 include 'class.php';
 include 'student.php';
 ?>
<?php
 if(count($_POST)>0){
 $sv = new SinhVien("qlsinhvien"); 
 $result = $sv -> Update($_GET["mssv"],$_POST["mssv"],$_POST["hoten"],$_POST["tuoi"],$_POST["lop"]);
 if($result)
 header("location:index.php");
 }
 if(isset($_GET["mssv"])){
 $sv = new SinhVien("qlsinhvien"); 
 $student = $sv->GetByID($_GET["mssv"]);
 } 
 ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Võ Thị Thúy Phương</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <h2>Quản lý sinh viên - Sửa sinh viên</h2>
 <p><a href="index.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">MSSV</label>
 <input type="text" value="<?php echo $student["MSSV"];?>" class="form-control" id="mssv"
placeholder="MSSV" name="mssv">
 </div>
 <div class="form-group">
 <label for="pwd">Họ tên</label>
 <input type="text" value="<?php echo $student["HoTen"];?>" class="form-control" id="hoten"
placeholder="Họ tên" name="hoten">
 </div>
 <div class="form-group">
 <label for="pwd">Lớp</label>
 <?php
 $lop = new Lop("qlsinhvien");
 $result = $lop->GetAll();
 echo "<select name='lop' id = 'lop' class='form-select form-control' aria-label='Default 
select example'>";
 while($row = mysqli_fetch_array($result)){
 echo "<option value='".$row['MaLop']."'";
 echo ($row['MaLop']==$student["MaLop"])?"selected":"";
 echo ">".$row['MaLop']."</option>";
 }
 echo "</select>";
 ?>
 </div>
 <div class="form-group">
 <label for="pwd">Tuổi</label>
 <input value="<?php echo $student["Tuoi"];?>" type="number" class="form-control" id="tuoi"
name="tuoi">
 </div>
 <button type="submit" class="btn btn-primary">Cập nhật</button>
 <button type="button" class="btn btn-primary" onclick="javasctip: history.back(1)">Quay 
lại</button>
 </form>
</div>   
</body>
</html>