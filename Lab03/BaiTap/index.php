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
            $a=isset($_POST['a'])? (float)trim($_POST['a']):'';
             $b=isset($_POST['b'])? (float)trim($_POST['b']):'';
            // tinh toan
            if($a==''){
            $result='Bạn chưa nhập số a';
            }
            else if($b==''){
            $result='Bạn chưa nhập số b';
            }
            else if($a==0){
                $result='Số a phải nhập khác 0';
            }
            else {
                $result=(-$b)/$a;
            }
         }

    ?>
    <h1>Giải phương tình bậc nhất</h1>
    <form action="" method="post">
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giai phuong trinh</title>
</head>
<body>
    <h1>Gải phương trình bậc 2</h1>
    <form action="" method="$_POST"></form>
</body>
</html>