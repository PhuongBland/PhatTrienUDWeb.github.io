<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giai phuong trinh bac1</title>
</head>
<body>
  
      <?php
        $result='';
        if(isset($_POST['calculate'])){
            // lay thong tin
            $soa=isset($_POST['a'])? (float)trim($_POST['a']):'';
             $sob=isset($_POST['b'])? (float)trim($_POST['b']):'';
            // tinh toan
            if($soa==''){
            $result='Bạn chưa nhập số a';
            }
            else if($sob==''){
            $result='Bạn chưa nhập số b';
            }
            else if($soa==0){
                $result='Số a phải nhập khác 0';
            }
            else {
                $result=(-$sob)/$soa;
            }
         }

    ?>
    <h1>Giải phương tình bậc nhất</h1>
    <form action="" method="POST">
    <input type="text" style="width:20px" name="a" value=""/ > x
    +
    <input type="text"style="width:20px" name="b" value=""/> =0
</br></br>
    <input type="submit"style="margin-left:20px" name="calculate" value="Tính" />
        </br></br>
    </form>
    <?php echo "Kết quả là: ".$result; ?>
</body>
</html>

<hr>
<!DOCTYPE html>
<html lang="en">
<body>
    
     <form action="" method="GET" role="form">
        <h1>Giải phương trình bậc hai</h1>
        <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="Nhập a" name="abt2">
        </div>
</br>
        <div class="form-group">
        <input type="number" class="form-control" id="number" placeholder="Nhập b" name="bbt2">
        </div>
</br>
        <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="Nhập c" name="cbt2">
        </div>
</br>
        <button type="submit" class="btn btn-primary" name="calculate" style="margin-left:20px">Submit</button>
        </form>
        </br>
    <?php
     if(isset($_GET['calculate'])){
    if (isset ( $_GET ['abt2'] )) {
        $a = $_GET ['abt2'];
    }
    if (isset ( $_GET ['bbt2'] )) {
        $b = $_GET ['bbt2'];
    }
    if (isset ( $_GET ['cbt2'] )) {
        $c = $_GET ['cbt2'];

    }
    echo "Phương trình ".$a."x^2 + ".$b."x + ".$c." = 0 ";
    if ($a == 0) {
        if ($b == 0) {
            echo ("vô nghiệm!");
        } else {
            echo  ("có một nghiệm: "
                    . "x = " . (-$c / $b));
        }
    }else{
        $delta = $b*$b - 4*$a*$c;
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2*$a);
            $x2 = (-$b - sqrt($delta)) / (2*$a);
            echo ("có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        } else if ($delta == 0) {
            $x1 = (-$b / (2 * $a));
            echo ("có nghiệm kép: x1 = x2 = " . $x1);
        } else {
            echo ("vô nghiệm!");
        }
       

    } 
     }
?>
</body>

</html>

<hr class="mb-3">
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="GET" role="form">
        <h1>Các loại tam giác</h1>
        <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="cạnh a" name="a1">
        </div>
</br>
        <div class="form-group">
        <input type="number" class="form-control" id="number" placeholder="cạnh b" name="b1">
        </div>
</br>
        <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="cạnh c" name="c1">
        </div>
</br>
        <button type="submit" class="btn btn-primary" name="calculate" style="margin-left:20px">Submit</button>
        </form>
        </br>
 <?php
    if (isset ( $_GET ['a1'] )) {
        $a = $_GET ['a1'];
    }
    if (isset ( $_GET ['b1'] )) {
        $b = $_GET ['b1'];
    }
    if (isset ( $_GET ['c1'] )) {
        $c = $_GET ['c1'];
    }

    if($a*$b*$c == 0){
        echo "Số liệu nhập vào không phải của tam giác";
    }
    else{
        echo "Tam giác có ba cạnh a=".$a." b=".$b." c=".$c." ";
        if($a==$b && $a==$c){
            echo "là tam giác đều";
        }elseif($a==$b || $b==$c || $c==$a){
            echo "là tam giác cân";
        }elseif($a*$a == $b*$b+$c*$c || $b*$b == $a*$a+$c*$c || $c*$c == $a*$a+$b*$b){
            echo "là tam giác vuông";
        }else{
            echo "là tam giác thường";
        }
    }
?>
        
</body>

</html>
<hr class="mb-3">
<!DOCTYPE html>
<html lang="en">
<body>
      <form action="" method="GET" role="form">
        <h1>Bảng cửu chương</h1>
        <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="Nhập n" name="n1">
        </div>
        </br>
        <button type="submit" class="btn btn-primary" name="calculate" style="margin-left:20px">Calculate</button>
        </form>
        </br>
    <?php
     if(isset($_GET['calculate'])){
          if(isset($_GET['n1'])){
        $n = $_GET["n1"];
    }
    if($n==0 || $n > 9){
        echo "Không có bảng cửu chương này";
    }else{
        echo "Bảng cửu chương của ".$n. " là:";
                echo "<br>";
        for($i = 1; $i <= 10; $i++){
                echo $n." x ".$i." = ".($n*$i);
                echo "<br>";
        }
    }   
    }
    ?>
</body>
</html>
<hr class="mb-3"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="GET" role="form">
        <h1>UCLN, BCNN</h1>
        <div class="form-group">
        <input type="number" class="form-control" id="number" placeholder="nhập số a" name="soa">
        </div>
</br>
        <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="nhập số b" name="sob">
        </div>
</br>
        <button type="submit" class="btn btn-primary" style="margin-left:20px">Submit</button>
        </form>
        </br>
    <?php
    if(isset($_GET['soa'])){
        $sa = $_GET["soa"];
    }
        if(isset($_GET['sob'])){
        $sb = $_GET["sob"];
        }
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
 

//   Tìm bội số chung nhỏ nhất (BSCNN)

function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}

// tính USCLN của a và b
echo ("USCLN của $sa và $sb là: " . USCLN($sa, $sb)) . "<br>";
// tính BSCNN của a và b
echo ("BSCNN của $sa và  $sb là: " . BSCNN($sa, $sb));
?>
</body>
</html>