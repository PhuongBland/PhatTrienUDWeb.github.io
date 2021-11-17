<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Dữ Liệu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3>Thêm nhân viên mới</h3>
        <div class="row">
            <form action="" method="post">
                <table>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="Name" placeholder="Enter name" name="Name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter surname" name="surname">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                        </div>
                    </div>
                </table>
            </form>
        </div>
        <button type="submit" class="btn btn-primary">Chấp nhận</button>
    </div>
</body>
<?php
$Name = "";
$surname = "";
$email = "";
$phone = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["title"])) { $title = $_POST['Name']; }
    if(isset($_POST["date"])) { $date = $_POST['surname']; }
    if(isset($_POST["description"])) { $description = $_POST['email']; }
    if(isset($_POST["content"])) { $content = $_POST['phone']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO employees (Name, surname, email, phone)
    VALUES ('$Name', '$surname', '$email', '$phone')";

    if (mysqli_query($connect, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}


?>


</html>