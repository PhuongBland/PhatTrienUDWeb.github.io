<html>
    <head>
        <title>Session</title>
    </head>
    <body>
        <?php
        session_start();
        echo "Welcome ".$_SESSION['name']."<br/>";
        echo "Your Password: ".$_SESSION['Password'];
        ?>
    </body>
</html>