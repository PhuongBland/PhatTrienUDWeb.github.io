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
        <div class="row justify-content-center">
            <h2 class="text-center">Chào mừng bạn đến với thế giới Milk</h2>
            <!-- List group -->
               <div class="container mt-5">
                 <div class="list-group" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="index_milkcompany.php" role="tab">Xem
                    Hãng Sữa</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="index_customer.php" role="tab">Xem
                    Khách Hàng</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="index_profilemilk.php" role="tab">Xem Sản
                    Phẩm</a>
            </div>
            <div class="b-example-divider mt-5"></div>
           
         </div>
        </div>
    </div>
</body>

</html>