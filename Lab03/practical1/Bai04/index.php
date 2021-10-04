<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstraptheme.min.css">

</head>
<body>
    <div class="container">
        <form action="post.php" method="POST" role="form">
            <legend>Get files</legend>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Input you name" name ="name">
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="number" class="form-control" placeholder="Input you age" name ="age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>