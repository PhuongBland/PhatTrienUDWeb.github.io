<?php 
session_start();

if(!isset($_REQUEST['sophantu']))
{
    $sophantu = $_SESSION['sophantu'];
}
else{
    $sophantu=$_REQUEST['sophantu'];
    $_SESSION['sophantu'] = $sophantu;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bai02_Lab04</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <form action="" method="POST" class="form-horizontal">
            <?php 
                if(isset($_REQUEST['sophantu'])){
                    if(empty($_REQUEST['sophantu'])){
                        header('location: index.php');
                        exit();
                    }
                    $sophantu = $_SESSION['sophantu'];
                    
                    for ($i =0 ; $i < $sophantu; $i++)
                    {
                     echo '<label for="">Vận động viên '.($i+1).'</label>
                     <input type="text" name="hoten" id="hoten" placeholder="nhập họ tên">
                     <input type="number" name="tuoi" id="tuoi" placeholder="nhập tuổi">
                     <input type="text" name="monthidau" id="monthidau" placeholder="nhập môn thi đấu">
                     <input type="double" name="cannang" id="cannang" placeholder="nhập cân nặng">
                     <input type="double" name="chieucao" id="chieucao" placeholder="nhập chiều cao"><br/>';
                     
                    }
                    
                }
            ?>
            <input class="btn btn-primary mt-3" type="submit" value="Xem danh sách">
                <?php 
                include 'VanDongVien.php';
                include 'Arraylist.php';
                if(isset($_REQUEST['hoten'])&& isset($_REQUEST['tuoi'])&& isset($_REQUEST['monthidau']) && isset($_REQUEST['mauso2']) && isset($_REQUEST['cannang'])&& isset($_REQUEST['chieucao'])){

                        if(!isset($_REQUEST['hoten'])&& !isset($_REQUEST['tuoi'])&& !isset($_REQUEST['monthidau']) && !isset($_REQUEST['mauso2']) && !isset($_REQUEST['cannang'])&& !isset($_REQUEST['chieucao'])){
                            $hoten = $_REQUEST['hoten'];
                            $tuoi = $_REQUEST['tuoi'];
                            $monthidau = $_REQUEST['monthidau'];
                            $cannang = $_REQUEST['cannang'];
                            $chieucao = $_REQUEST['chieucao'];
                            $vandongvien = new VanDongVien();
                            $vandongvien->nhap($hoten,$tuoi,$monthidau,$cannang,$chieucao);
                            echo "Kết quả = ";
                            VanDongVien::xuat($vandongvien);
                        }
                        else{
                            echo "Vui lòng không để trống ";
                            exit();
                        }
                    
                    }  
                    ?>
            </form>
            <div class="col-md mt-3">
            <a href="index.php" class="btn btn-primary">Quay lại trang trước</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>