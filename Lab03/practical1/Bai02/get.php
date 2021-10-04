<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data</title>
    <style>
        body{
            color:blue;
            font:20px;
        }
    </style>
</head>
<body>
    <?php
    echo 'Full name: '. $_GET['name']. '<br>';
    echo 'Age: ' .$_GET['age'];
    ?>
</body>
</html>