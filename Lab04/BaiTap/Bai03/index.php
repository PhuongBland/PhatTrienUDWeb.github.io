<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Bai03_Lab04</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Nhập số lượng hành khách</h3>
                </div>
                <div class="card-body">
                    <form action="nhaphk.php" method="GET">
                        <div class="form-group">
                            <label >Số lượng hành khách</label>
                            <input type="number" class="form-control"  name="n">
                        </div>  
                        <input type="submit" class="btn btn-primary" name="submit" value="Nhập Số Hành Khách"/>                  
                </div>
            </div>
        </div>
    </div>
</div>
</body>
