<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab02 - Bai01</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;
        echo "a= $a"."<br>" ."b=$b"."<br>";
        $third=$a;
        $a=$b;
        $b=$third;
        echo "<b>After Swapping"."<br>". "a =$a"."<br>"."b= $b<b>";
    ?>
</body>
</html>