<!DOCTYPE html>
<html lang="en">
<?php
include 'customer.php';
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
        <h2>Quản lý Khách hàng - Thêm khách hàng</h2>
        <p><a href="index.php">Home</a></p>
        <form action="" method="post">
            <div class="form-group">
                <label>Mã khách hàng</label>
                <input type="text" class="form-control" placeholder="Mã khách hàng" name="customerCode">
            </div>
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" class="form-control" placeholder="Họ tên" name="customerName">
            </div>
            <div class="form-group">
                <label>Giới tính</label>
                <input type="number" class="form-control" name="gender">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="number" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay lại</button>
        </form>
        <?php
        if (isset($_POST["customerCode"])) {
            $sv = new Customer("milk");
            $result = $sv->Insert($_POST["customerCode"], $_POST["customerName"], $_POST["gender"], $_POST["address"], $_POST["phone"]);
            if ($result)
                header("location: index.php");
        }
        ?>
    </div>
</body>

</html>