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
            </div>
            <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay lại</button>
         </div>
</body>

</html>