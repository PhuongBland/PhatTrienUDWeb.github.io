<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Bai04</title>
    <style>
        body{
            color:black;
        }
        .card-header{
            background-color: #AFEEEE;
            color:#008080;
        }
        .btn{
            background-color: #AFEEEE;
            color:#008080;
            font-size:25px;
        }
        .btn:hover{
            background-color: firebrick;
            color:white;
        }
        .btn:active{
            background-color: firebrick;
            color:white;
        }
        .info{
            color: maroon;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
        <form action="thuoctinh.php" method="GET">
                <div class="form-group">
                    <h3 class="card-header text-center">Thuộc tính của tập tin</h3>
                </div>
                <hr>
                <p class="info">
                <?php
                        $MAX_FILE_SIZE = 10000000;
                        if ($_SERVER["REQUEST_METHOD"] != "POST" ) {
                        echo 'Tải lên không thành công';
                        exit(-1);
                        }
                        if ( !isset($_FILES["file_upload"]["error"]) || $_FILES["file_upload"]["error"] != 0 ) {
                        echo 'Tải lên không thành công';
                        exit(-1);
                        }
                        if ($_FILES["file_upload"]["size"] > $MAX_FILE_SIZE) {
                        echo "Kích thước file quá lớn".$_FILES['file_upload']['size'].")";
                        exit(-1);
                        }
                        $temp = preg_split('/[\/\\\\]+/', $_FILES["file_upload"]["name"]);
                        $filename = $temp[count($temp)-1];
                        if (!preg_match('/\.(jpg|bmp|gif|png)$/i', $filename)){
                        echo 'Tải lên không thành công<br>';
                        echo 'Chỉ cho phép tải file ảnh lên<br>';
                        exit(-1);
                        }
                        $upload_dir = "upload";
                        if(!file_exists($upload_dir))
                        mkdir("upload");
                        $upload_file = $upload_dir."/".$filename;
                        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $upload_file) ) {
                        echo "Tên file: ".$_FILES["file_upload"]["name"]."<br />";
                        echo "Loại file: ".$_FILES["file_upload"]["type"]."<br />";
                        echo "Kích cỡ: ".($_FILES["file_upload"]["size"]/1024)." Kb<br />";
                        }
                        else {
                        echo 'Tải lên không thành công';
                        }
                        ?>
                </p>
                <div class="form-group">
                    <a href="index.php" class="btn btn-block">Quay lại trang trước</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>