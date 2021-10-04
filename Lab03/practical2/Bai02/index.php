<html>
    <head>
        <title>Sesstion</title>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION['name']='Phuong';
        $_SESSION['Password']='@123';
        echo "set session";
        ?>
        <br/>
        <a href="getsession.php">Go to getsession</a>
    </body>
</html>