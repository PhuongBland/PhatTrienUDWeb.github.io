<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Example PHP+PDO+POO+MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Employee List</h2>
        <p>Danh sách các User hiện có | Thêm mới</p>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>SurName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php
 foreach($data["ListEmp"] as $List){
 ?>
                <tr>
                    <td><?php echo $List["id"] ?></td>
                    <td><?php echo $List["Name"] ?></td>
                    <td><?php echo $List["SurName"] ?></td>
                    <td><?php echo $List["email"] ?></td>
                    <td><?php echo $List["phone"] ?></td>
                    <td>
                        <a href="index.php?action=details&id=<?php echo $List["id"]?>">Detail</a>
                    </td>
                </tr>
                <?php
 }
 ?>
            </tbody>
        </table>
    </div>
</body>

</html>