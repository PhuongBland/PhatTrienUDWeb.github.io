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
                    <th>Name</th>
                    <th>NumberOfStaff</th>
                    <th>id_employee</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        foreach($data["ListDpm"] as $List){
                    ?> <tr>
                    <td><?php echo $List["id_dpm"] ?></td>
                    <td><?php echo $List["Name"] ?></td>
                    <td><?php echo $List["NumberOfStaff"] ?></td>
                    <td><?php echo $List["id_employee"] ?></td>
                    <td>
                        <a href="index.php?action=details&id=<?php echo $List["id_dpm"]?>">Detail</a>
                        <a onclick="return confirm(' Bạn có chắc chắn muốn xóa không?' )"
                            href="index.php?action=delete&id=<?php echo $List["id_dpm"]?>">Delete</a>
                        <a onclick="return confirm(' Bạn có chắc chắn muốn sửa không?' )"
                            href="index.php?action=update&id=<?php echo $List["id_employee"]?>">Update</a>
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