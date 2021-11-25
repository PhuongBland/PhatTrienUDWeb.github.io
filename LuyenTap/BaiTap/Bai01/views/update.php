<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật dữ Liệu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="container">
            <h3>Cập nhật mới nhân viên</h3>
            <form action="" method="POST">
                <table>
                    <div class="form-row">
                        <div class="col">
                        </div>
                        <input type="text" class="form-control" id="Name" placeholder="Enter name" name="Name">
                        <br>
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
                        <td>
                            <input type="submit" name="update_employee" value=" Câp nhật">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>