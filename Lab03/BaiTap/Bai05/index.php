<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>FILE</title>
    <style>
        body{
            background-color: #AFEEEE;
            color:black;
        }
        .card-header{
            background-color: #008B8B;
            color:white;
        }
        .btn{
            background-color: #008B8B;
            color:white;
        }
        .btn:hover{
            background-color: #008080;
            color:white;
        }
        .btn:active{
            background-color: #008080;
            color:white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
        <form action="display.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <h3 class="card-header text-center">Xem thư mục hình ảnh</h3>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Chọn thư mục</label>
                    <select class="form-control" name="folder" id="">
                        <option value="hoa">flowers</option>
                        <option value="anime">anime</option>
                        <option value="animal">animal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Chọn kích cỡ</label>
                    <select name="displaysize" id="" class="form-control">
                        <option value="200x200">200x200</option>
                        <option value="400x400">400x400</option>
                        <option value="800x800">800x800</option>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" class="btn btn-block" name="submit" value="Xem hình ảnh"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>