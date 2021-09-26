<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab02 - Bai01</title>
    <style>
        body{
            color:blue;
            font-size: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $a = 1;
        $b = 4;
        $c = 3;
        if($a > $b && $a > $c)
        {
             echo "Maximum num a = $a";
        }
        else if($b > $c)
        {
        echo "Maximum num b = $b";
        }
        else
        {
        echo "Maximum num c = $c";
        }
    ?>
</body>
</html>