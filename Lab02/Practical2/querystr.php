<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab02-Bai02</title>
    
</head>
<body>
    Information: 
   <?php

    $all_params = $_GET;
    
    echo "Fullname: ".$_POST["username"]."<br/>";
    echo "Password:".$_POST["pass"]."<br/>";
    echo "Gender:".$_POST["gender"]."<br/>";
    echo "Branch:".$_POST["branch"]."<br/>";

    ?>
</body>
</html>