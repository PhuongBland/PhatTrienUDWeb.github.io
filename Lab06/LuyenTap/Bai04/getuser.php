<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1812828</title>
    <style>
        table {
        width: 100%;
        border-collapse: collapse;
        }
        table, td, th {
        border: 1px solid black;
        padding: 5px;
        }
        th {
        text-align: left;
        }
        </style>
</head>
<body>
    <?php
        $q =intval(isset( $_GET['q']));

        $con = new mysqli('localhost','root','','ajax_demo');
        if (!$con) {
            die('Could not connect: '.mysqli_error($con));
        }
        $sql ='';
        if($q == '0'){
            $sql="SELECT * FROM user"; 
        }
        else{ 
            $sql="SELECT * FROM user WHERE id = '".$q."'";
        }
        $result = mysqli_query($con,$sql);
    
            echo "<table>
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Hometown</th>
            <th>Job</th>
            </tr>";
           while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Hometown'] . "</td>";
            echo "<td>" . $row['Job'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);
            ?>

    
</body>
</html>