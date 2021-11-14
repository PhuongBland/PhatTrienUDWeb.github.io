<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3>Employee - Detail</h3>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col"><?php echo $data['emp']->id?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <th scope="row"><?php echo $data['emp']->Name?></th>

                </tr>
                <tr>
                    <th scope="row">SurName</th>
                    <th scope="row"><?php echo $data['emp']->SurName?></th>
                </tr>
            </tbody>
    </div>
    </table>
</body>

</html>