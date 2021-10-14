<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Bai03_Lab04</title>
    <style>
    .btnnext{
        background-color: #40E0D0;
        font-size: 19px;
        color:black;
    }
    .btn:hover{
        background-color: #66CDAA;
        color: white;
    }
    .tenhk{
        float:left;
    }
    .loaive{
        float:left;
    }
    .soluong{
        float:left;
    }
    .btnback{
        float:left;
        background-color:#008B8B;
        font-size:19px;
         color: white;
    }
    .btnback:hover{
        background-color:#66CDAA;
    }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Nhập thông tin hành khách</h3>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                    <?php
                    $n=1;
                    if(isset($_GET['n'])){
                    $n = $_GET['n'];
                    }; 
                        echo "<div class='form-group'>
                        <label >Tổng hành khách</label>
                        <input type='text' class='form-control'  name='tong' value='$n'>
                </div> ";

                    for($i = 1; $i<=$n; $i++){
                        echo "<div class='tenhk col-lg-7'>
                    <div class='form-group'>
                        <label >Tên hành khách</label>
                        <input type='text' class='form-control'  name='tenhk$i'  >
                    </div> 
                    </div> s
                    <div class='loaive col-lg-3'>
                    <div class='form-group'>
                        <label >Loại vé</label>
                        <select class='form-control' name='loaive$i'>
                            <option value='re'>Rẻ</option>
                            <option value='binhthuong'>Bình thường</option>
                            <option value='thuonggia'>Thương gia</option>
                            <option value='tongthong'>Tổng thống</option>
                        </select>
                    </div>
                    </div>
                    <div class='soluong col-lg-2'>
                    <div class='form-group'>
                        <label >Số lượng</label>
                        <input type='number' class='form-control'  name='soluong$i'  >
                    </div>
                    </div> "; 
                    }                          
                    ?> 
                        <input type="submit" class="btn btn-block btnnext" name="submit" value="Tiếp tục"/> 
                        <a href="index.php" class="btn btn-block btnback">Quay lại trang trước</a>                      
                </div>
            </div>
        </div>
    </div>
</div>
</body>