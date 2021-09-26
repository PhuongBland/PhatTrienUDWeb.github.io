<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab02 - Bai01</title>
    <style>
        body{
            color: blue;
            text-align:center;
            font-size:40px;
        }
    </style>
</head>
<body>
    <?php
        $str1 = 'a';
        $str2 = 'b';
        echo strcmp($str1, $str2)."<br/>";
        $str3 = 'b';
        $str4 = 'b';
        echo strcmp($str3, $str4)."<br/>";
        $str5 = "phuong";
        $str6 = "Phuong";
        echo strcmp($str5, $str6)."<br/>";
    ?>
</body>
</html>