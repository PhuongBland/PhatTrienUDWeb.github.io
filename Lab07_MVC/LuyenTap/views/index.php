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
        <p>Danh sách các User hiện có
            <!-- m hiểu sai mô hình mvc rồi
        tất cả các tương tác đều phải đi qua controller trước , chứ không được trả thẳng tới view -->
            <a href="index.php?action=insertData">Thêm mới</a>
        </p>
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
                    ?> <tr>
                    <td><?php echo $List["id"] ?></td>
                    <td><?php echo $List["Name"] ?></td>
                    <td><?php echo $List["SurName"] ?></td>
                    <td><?php echo $List["email"] ?></td>
                    <td><?php echo $List["phone"] ?></td>
                    <td>
                        <a href="index.php?action=details&id=<?php echo $List["id"]?>">Detail</a>
                        <a onclick="return confirm(' Bạn có chắc chắn muốn xóa không?' )"
                            href="index.php?action=delete&id=<?php echo $List["id"]?>">Delete</a>
                        <a onclick="return confirm(' Bạn có chắc chắn muốn sửa không?' )" href="
                            index.php?action=update&id=<?php echo $List["id"]?>">Update</a>
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