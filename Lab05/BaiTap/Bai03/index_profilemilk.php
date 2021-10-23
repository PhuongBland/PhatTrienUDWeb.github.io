    <!DOCTYPE html>
    <html lang="en">
    <?php
    include 'profilemilk.php';
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Võ Thị Thúy Phương</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <h2 class="text-center">THÔNG TIN SỮA</h2>
    <table class="table table-dark">
    <thead>
    <tr>
    <th>STT</th>
    <th>Tên sữa</th>
    <th>Hãng sữa</th>
    <th>Loại sữa</th>
    <th>Trọng lượng</th>
    <th>Đơn giá</th>
    <th>E/D</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $tts = new profilemilk("milk");
    $result = $tts->GetAll();
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['STT']."</td>";
    echo "<td>".$row['Ten']."</td>";
    echo "<td>".$row['Hang']."</td>";
    echo "<td>".$row['Loai']."</td>";
    echo "<td>".$row['TrongLuong']."</td>";
    echo "<td>".$row['DonGia']."</td>";
    echo "<td>
        <a href='addtt.php?ten=".$row['Ten']."'>
        <i class='fas fa-plus'></i>
        </a>
        <a href='deltt.php?ten=".$row['Ten']."'>
        <i class='fas fa-trash'></i>
        </a> 
        <a href='edittt.php?ten=".$row['Ten']."'>
        <i class='fa fa-edit'></i>
        </a>
        
        </td>";
    echo "</tr>";
    } 
    ?>
    </tbody>
    </table>
    <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay lại</button>

    </div>

    </body>
    </html>