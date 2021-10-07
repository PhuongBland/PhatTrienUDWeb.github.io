<?php
    $hoa = "fdimages/flowers";
    $anime = "fdimages/anime";
    $animal = "fdimages/animal";
    $fdval = "";
    $dpval ="";

    if(isset($_POST['folder'])){
        $fdval = $_POST["folder"];
    }
    if(isset($_POST['displaysize'])){
        $dpval = $_POST["displaysize"];
    }

    
    if($fdval == "hoa"){
        $all_files = glob($hoa . "/*.jpg");
        if($dpval == "200x200"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:200px;height:200px;"/>';
          }
        }elseif($dpval == "400x400"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:400px;height:400px;"/>';
          }
        }elseif($dpval == "800x800"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:800px;height:800px;"/>';
          }
        }
    }elseif($fdval == "anime"){
        $all_files = glob($anime . "/*.jpg");
        if($dpval == "200x200"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:200px;height:200px;"/>';
          }
        }elseif($dpval == "400x400"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:400px;height:400px;"/>';
          }
        }elseif($dpval == "800x800"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:800px;height:800px;"/>';
          }
        }
    }elseif($fdval == "animal"){
        $all_files = glob($animal . "/*.jpg");
        if($dpval == "200x200"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:200px;height:200px;"/>';
          }
        }elseif($dpval == "400x400"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:400px;height:400px;"/>';
          }
        }elseif($dpval == "800x800"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:800px;height:800px;"/>';
          }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-col-6">
            <a href="index.php" class="btn" style="width:300px; font-size:20px; background-color: #008B8B;
            color:white;">Quay lại trang chủ</a>
        </div>
    </div>
</div>
</body>
</html>