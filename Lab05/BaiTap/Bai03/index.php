<!DOCTYPE html>
<html lang="en">

<?php 
  include 'customer.php';
  include 'milkcompany.php';
  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
         <h2 class="text-center">Chào mừng bạn đến với thế giới Milk</h2>
            <div class="tab-content"> 
                <div class="tab-pane active" id="home" role="tabpanel">
                    <h3 class="text-center">Thông tin hãng Sữa</h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Mã Hãng Sữa</th>
                            <th>Tên Hãng Sữa</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                                
                           
                <?php 
                $hs = new milkcompany("milk");
                $result = $hs->GetAll();
                while ($row =mysqli_fetch_array($result))
                {
                   echo"<tr>";
                   echo"<td>".$row['CompanyCode']."</td>";
                   echo"<td>".$row['CompanyName']."</td>";
                   echo"<td>".$row['Address']."</td>";
                   echo"<td>".$row['Phone']."</td>";
                   echo"<td>".$row['Email']."</td>";
                   echo"</tr>";
                }
                ?>

                    </table>

                </div> 
        <div class="tab-content"> 
        <div class="tab-pane active" id="profile" role="tabpanel">
        <h3 class="text-center">Quản lý Khách Hàng</h2>
        <p>Bảng Khách Hàng - <a href="addcus.php">Thêm</a></p>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Họ tên</th>
                    <th>Giới Tính</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>D/E</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sv = new Customer("milk");
                $result = $sv->GetAll();
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['customercode'] . "</td>";
                    echo "<td>" . $row['customername'] . "</td>";
                   if($row['gender']==1)
                   {
                    echo'<td><i class="fas fa-male"></i></td>';
                   }
                   else 
                   {
                    echo'<td><i class="fas fa-female"></i></td>';
                   }
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td><a href='delcus.php?customercode=" . $row['customercode'] . "'><i class='fas fa-trash'></i></a><a href='editcus.php?customercode=" . $row['customercode'] . "'><i class='fa fa-edit'></i></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>