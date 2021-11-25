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
            <form action="" method="POST">
                <table>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="Name" placeholder="Enter name" name="Name">
                            <br>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter surname" name="surname">
                            <br>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                        </div>
                    </div>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="add_employee" value="Thêm nhân viên">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</body>