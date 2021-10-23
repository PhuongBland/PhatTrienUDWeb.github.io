<!DOCTYPE html>
<html lang="en">
<?php
include 'customer.php';
?>
<?php
if (count($_POST) > 0) {
    $sv = new Customer("milk");
    $result = $sv->Update($_GET['customercode'], $_POST['customercode'], $_POST['customername'], $_POST['gender'], $_POST['address'],$_POST['phone']);
    if ($result)
        header("location:index.php");
}
if (isset($_GET["customercode"])) {
    $sv = new Customer("milk");
    $student = $sv->GetByID($_GET["customercode"]);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Quản lý sinh viên - Sửa sinh viên</h2>
        <p><a href="index.php">Home</a></p>
        <form action="" method="post">
            <div class="form-group">
                <label>MSSV</label>
                <input type="text" value="<?php echo $student['customercode']; ?>" class="form-control"name="customercode">
            </div>
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" value="<?php echo $student['customername']; ?>" class="form-control" name="customername">
            </div>
            <div class="form-group">
                <label>Lớp</label>
                <input type="number" value="<?php echo $student['gender']; ?>" class="form-control" name="gender">
            </div>
            <div class="form-group">
                <label>Tuổi</label>
                <input value="<?php echo $student['address']; ?>" type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label>Tuổi</label>
                <input value="<?php echo $student['phone']; ?>" type="number" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <button type="button" class="btn btn-primary" onclick="javasctip: history.back(1)">Quay lại</button>
        </form>
    </div>
</body>

</html>