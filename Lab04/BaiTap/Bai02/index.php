<?php 
    session_start();
?>
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
    <title>Bai02_Lab04</title>
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
              <?php 
    
              ?>
                <form action="Bai02_Lab04.php" method="post">
                    <label for="sophantu">Nhập số lượng phần tử</label>
                    <input class="form-control" type="number" name="sophantu" id="sophantu"
                        placeholder="nhập số phần tử">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Gửi">
                </form>
            </div>
        </div>
    </div>

</body>