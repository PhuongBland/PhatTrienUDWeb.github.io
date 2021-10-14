<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>1812828_Lab04</title>
    <style>
        .container .row{
            color:black;
            font-size:20px;
        }
        .btn{
            font-size:20px;
        }
      
    </style>

  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center ">
            <form action="" method="POST">
                <div class="row mt-5">
                    <div class="col-3">
                        <input type="text" class="form-control" name="tuso1" placeholder="Tử Số thứ nhất" aria-label="Tử Số thứ nhất">
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" name = "mauso1" placeholder="Mẫu số thứ nhất" aria-label="Mẫu số thứ nhất">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <input type="text" class="form-control" name = "tuso2" placeholder="Tử số thứ hai" aria-label="Tử số thứ hai">
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" name ="mauso2" placeholder="Mẫu số thứ hai" aria-label="Mẫu số thứ hai">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="phepcong" value="+" checked="checked">
                                <label class="form-check-label" for="phepcong">Cộng</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="pheptru" value="-">
                                <label class="form-check-label" for="pheptru">Trừ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="phepnhan" value="*" >
                                <label class="form-check-label" for="phepnhan">Nhân</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pheptinh" id="phepchia" value="/" >
                                <label class="form-check-label" for="phepchia">Chia</label>
                            </div>
                    </div>
                </div>
                <div class="row ">
                <div class="col-4">
                   <input class="btn btn-primary " type="submit" value="Kết quả">
                   <?php 
                    include 'phanso.php';
                    if(isset($_REQUEST['tuso1'])&& isset($_REQUEST['tuso2'])&& isset($_REQUEST['mauso1']) && isset($_REQUEST['mauso2']) && isset($_REQUEST['pheptinh'])){

                        if(!empty($_REQUEST['tuso1'])&& !empty($_REQUEST['tuso2'])&& !empty($_REQUEST['mauso1']) && !empty($_REQUEST['mauso2']) && !empty($_REQUEST['pheptinh'])){
                            $tuso1 = $_REQUEST['tuso1'];
                            $tuso2 = $_REQUEST['tuso2'];
                            $mauso1 = $_REQUEST['mauso1'];
                            $mauso2 = $_REQUEST['mauso2'];
                            $pheptinh = $_REQUEST['pheptinh'];
                            $phanso1 = new PhanSo();
                            $phanso1->nhap($tuso1, $mauso1);
                            $phanso2 = new PhanSo();
                            $phanso2->nhap($tuso2, $mauso2);
                            echo "<br/>";
                            echo "Phân số 1: $tuso1/$mauso1 ";
                            echo " Phân số 2: $tuso2/$mauso2";
                            echo "<br/>";
                            echo "Kết quả = ";
                            TinhToanPhanSo::tinh($phanso1,$phanso2,$pheptinh);
                        }
                        else{
                            echo "Nhập phân số cần tính!!";
                            exit();
                        }
                    
                    }  
                    ?>
                </div>
                </div>
            </form>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>