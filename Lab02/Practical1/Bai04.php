<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Võ Thị Thúy Phương - 1812828</title>
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
        $n = 5;
        $value = 13.5;
        $name = "Thuy Phuong";
        $var = true;
        echo"The variable function Gettype() <br>";
       
        $array1= array(110,45,"Thuy",1,4,true);
        echo gettype($n)."<br/>";
         echo gettype($value)."<br/>"; 
         echo gettype($name)."<br/>"; 
         echo gettype($var)."<br/>"; 
         echo gettype($array1)."<br/>";
         echo "<hr/>";
        $data = array(1,1.5,null,"Bipin",new stdclass,true);
         foreach($data as $value)
         {
             echo gettype($value)."|";
         }
    ?>
</body>
</html>